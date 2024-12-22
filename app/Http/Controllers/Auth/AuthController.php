<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
        // For Show Register Page
        public function userRegister()
        {
            return view('auth.register'); // Returns the view for the registration form
        }
        // Post Login
        public function registerSubmit( Request $request)
        {
            dd($request);
        }

    public function login()
    {
        return view('auth.login'); // Returns the view for the registration form
    }

    public function loginSubmit(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        $user = User::where(function ($query) use ($username) {
            $query->where('email', $username)->orWhere('mobile', $username);
        })->first();

        if ($user && Hash::check($password, $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();
            // return redirect('/user')->with('success', 'Login successful.');
             // Redirect to login page with a success message
        return redirect()->route('user-dash')->with('success', 'Login successful.');
        }

        return back()->withErrors(['username' => 'Invalid credentials.']);
    }




    public function forgotPass()
    {
        return view('auth.forgotpass'); // Returns the view for the registration form
    }
    public function forgotPassSubmit(Request $request)
    {
        dd($request);
    }




}
