<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Showing Index page
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Login user
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // validate request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // filter request
        $credentials = $request->only('email', 'password');

        // Login attempt
        if (auth()->attempt($credentials)) {
            // Authentication passed...
            $request->session()->regenerate();
            //
            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Logout user
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        // Logout attempt
        auth()->logout();
        // redirect to login page
        return redirect()->route('home');
    }
}
