<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
       // Dash
       public function adminDash()
       {
           return view('admin.admindash'); // Returns the view for the registration form
       }

       // Admin Profile
       public function adminProfile()
       {
           return view('admin.adminprofile'); // Returns the view for the registration form
       }
}
