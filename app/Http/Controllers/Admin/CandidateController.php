<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class CandidateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        
    }
    public function create(){
        return '';
    }
    public function store(Request $request){
        
    }
    public function update(String $id,Request $request){
        
    }
    public function edit(String $id){
        
    }
    public function destroy(String $id){
        
    }
}
