<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
              // Landing Page
              public function home()
              {
                  return view('pages.home'); // Returns the view for the registration form
              }
}
