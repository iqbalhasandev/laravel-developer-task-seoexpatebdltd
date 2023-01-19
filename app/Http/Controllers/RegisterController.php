<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Showing Index page
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Register user
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        // validate request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        // filter request
        $credentials = $request->only('name', 'email', 'password');

        $user = User::create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => Hash::make($credentials['password']),
        ]);
        // Register attempt
        auth()->login($user);
        // Authentication passed...
        $request->session()->regenerate();
        // redirect to home page
        return redirect()->route('home');
    }
}
