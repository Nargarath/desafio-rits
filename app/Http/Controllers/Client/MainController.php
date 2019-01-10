<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

use App\JobVacants;

class MainController extends Controller
{
    public function index()
    {
        $jobs = JobVacants::where('status','A')->with('company')->get();
        return response()->view('client.main.index',compact('jobs'));
    }

    public function vacant($id)
    {   
        $assignments = JobVacants::find($id)->assignments()->GroupByType();
        $job =  JobVacants::where('id',$id)->with('company')->first();
        return response()->view('client.vacant.index',compact('assignments','job'));
    }
}
