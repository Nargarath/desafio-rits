<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Support\Facades\Validator;

use App\JobVacants;
use App\Companies;

class JobVacantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request){
        $jobs = JobVacants::all();

        return response()->view('admin.jobs.index',compact('jobs'));
    }
    public function create(){
        
    }
    public function store(Request $request){
        
    }
    public function update(String $id,Request $request){
        $validator  = Validator::make($request->all(),
        [
            'name' => 'required',
            'company_id' => 'required',
            'status' => 'required'
        ]);
        
        $job = new JobVacants([
            'id' => $id,
            'name'=>$request->name,
            'company_id'=>$request->company_id,
            'status'=>$request->status
        ]);

        $companies = Companies::all();

        if ($validator->fails()) {
            $msg = $validator->messages()->toArray();
            $messages['messages'] = $msg;
            $messages['success'] = false;
        } else {
            $updated_job = JobVacants::find($id);
            $updated_job->name = $request->name;
            $updated_job->company_id = $request->company_id;
            $updated_job->status = $request->status;
            $updated_job->save();

            $messages['success'] = true;
        }
        $request->session()->flash('messages', $messages);
        return back()->withInput();
    }
    public function edit(String $id){
        $job = JobVacants::find($id);
        $companies = Companies::all();
        return response()->view('admin.jobs.edit',compact('job','companies'));
    }
    public function destroy(String $id){
        $job = JobVacants::find($id);
        $job->delete();
        return redirect()
          ->route('admin.jobs.index');
    }
}
