<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    // Dash
    public function userDash()
    {
        return view('user.userdash'); // Returns the view for the registration form
    }


}
