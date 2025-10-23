<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{

    public function userLoginIndex()
    {
        return view('auth.signin');
    }

    public function userSignin(Request $request)
    {
        // Validate the incoming request data
        $credentials = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required|string|min:2',
            ],
            [],
            [
                'email' => 'Email Address',
                'password' => 'Password'
            ]
        );

        // Attempt to authenticate the user
        if (auth::attempt($credentials)) {

            $user = Auth::User();

            // User exist but not verified
            if (!$user->is_verified) {
                Auth::logout(); // logout immediately
                return back()->with('unverified', $user->email);
            }

            // Authentication passed, regenerate session
            $request->session()->regenerate();
            // return redirect()->route('loginSuccess');
            return back()->with('loginSuccess', true);
        }

        // Authentication failed, redirect back with error
        return back()->with('incorrectAuth', true);
    }

    public function userLogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('userLoginIndex');
    }
}
