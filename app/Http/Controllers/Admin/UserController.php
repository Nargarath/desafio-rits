<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class UserController extends Controller
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
    public function store(){
        
    }
    public function update(){
        
    }
    public function edit(){
        
    }
    public function destroy(){
        
    }

}
