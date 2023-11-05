<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('admin.dashboard');

    }
    function table(){
        return view('admin.table');
    }
}
