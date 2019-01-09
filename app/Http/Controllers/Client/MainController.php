<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class MainController extends Controller
{
    public function index()
    {
        return view('client.main.index');
    }

    public function vacant($id)
    {
        return view('client.vacant.index');
    }
}
