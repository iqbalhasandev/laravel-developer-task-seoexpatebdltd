<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

class ResetPasswordController extends Controller
{

    /**
     * Reset Password page
     */
    public function index(Request $request)
    {
        return view('auth.reset-password')->with(
            ['token' => $request->token, 'email' => $request->email]
        );
    }

    /**
     * Reset Password
     */
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();
            }
        );
        if ($status == Password::PASSWORD_RESET) {
            return redirect()->route('login');
        }

        return back()->withErrors(['email' => 'Invalid email or token has expired.']);
    }
}
