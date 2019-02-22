<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function dashboardContent()
   {
   	   //return view('admin.login.login');
   	return 'admin';
   }

    public function test()
   {
   	   //return view('admin.login.login');
   	return 'test';
   }
}
