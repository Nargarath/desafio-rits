<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller as Controller;

use App\Candidates;
use App\Curriculums;
use App\Rules\IsPdf;

class CandidateController extends Controller
{
    

    public function store($id,Request $request){
        
        $validator  = Validator::make($request->all(),
        [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'linkedin' => 'required',
            'github' => 'required',
            'english_level' => 'required',
            'salary_pretension' => 'required',
            'curriculum' => 'required',
            'curriculum' => new IsPdf
        ]);
            
        if ($validator->fails()) {
            $messages = $validator->messages()->toArray();
            $messages['success'] = false;
            return response()->json($messages);
        } else {
            $pdf = explode( ',', $request->curriculum );
            $decoded = base64_decode($pdf[1]);  
            $name = md5($request->email . microtime()).'.pdf';    

            Storage::put($name, $decoded);
            Storage::move($name, 'public/curriculums/'.$name);

            $candidate = Candidates::create(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'linkedin' => $request->linkedin,
                    'github' => $request->github,
                    'english_level' => $request->english_level,
                    'salary_pretension' => $request->salary_pretension,
                    'job_id' => $id
                ]
            );
            $curriculum = $candidate->curriculum()->create(['name'=>$name]);
            
            return response()->json(['success'=>true]);

        }
       

        


        

    }
}
