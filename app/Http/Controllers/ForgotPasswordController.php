<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{

    /**
     * Showing Index page
     */
    public function index()
    {
        return view('auth.forgot-password');
    }

    /**
     * Forgot password
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function forgotPassword(Request $request)
    {
        // validate request
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        // filter request
        $credentials = $request->only('email');

        $user = User::where('email', $credentials['email'])->first();
        // create token
        $token = app('auth.password.broker')->createToken($user);
        // send email to user
        $user->sendPasswordResetNotification($token);
        dd($user, $token);
        // redirect to forgot password page
        return \redirect()->route('password.forgot.mailSend');
    }

    /**
     * Forgot password mail send
     */
    public function forgotPasswordMailSend()
    {
        return view('auth.forgot-password-mail-send');
    }
}
