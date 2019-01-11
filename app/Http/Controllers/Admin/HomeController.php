<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

use App\JobVacants;
use App\Companies;
use App\Candidates;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $companies = Companies::count();
        $candidates = Candidates::count();
        $hireds = Candidates::where('status','hired')->count();
        $jobs = JobVacants::where('status','A')->count();
        return response()->view('admin.home',compact('companies','candidates','hireds','jobs'));
    }
}
