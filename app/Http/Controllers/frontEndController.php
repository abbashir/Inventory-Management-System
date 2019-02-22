<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontEndController extends Controller
{
    public function index()
    {
    	return view('admin.login.login1');
    }

    public function adminLogin()
    {
    	return view('admin.login.login');
    }
    
}
