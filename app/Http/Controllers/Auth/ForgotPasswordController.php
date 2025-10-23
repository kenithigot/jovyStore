<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;

class ForgotPasswordController extends Controller
{
    public function forgotindex()
    {
        return view('auth.forgotPassword');
    }

    public function forgotSend(Request $request)
    {
        // Validate input field
        $request->validate(['email' => 'required|email']);

        // Check user email data
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', "We couldn't find an account with that email address");
        }

        // Check if user is not verified
        if (!$user->is_verified) {
            return back()->with('error', "We couldn't find an account with that email address.");
        }

        // Generate 3-digit OTP
        $randomNum = rand(1000, 9999);

        $user->verification_code = $randomNum;
        $user->save();

        // Send the verification email
        Mail::raw("Your Forgot Password PIN is: $randomNum", function ($message) use ($user) {
            $message->to($user->email)
                ->subject('Forgot Password');
        });

        return redirect()->route('forgot-password.verificationIndex', ['email' => $user->email])
            ->with(['success' => 'OTP sent successfully!']);
    }


    public function verificationIndex($email)
    {
        return view('auth.resetPassword', compact('email'));
    }

    public function verificationSend(Request $request)
    {
        $pin = is_array($request->pinNum) ? implode('', $request->pinNum) : $request->pinNum;

        $request->merge(['pinNum' => $pin]);

        $request->validate(
            [
                'email' => 'required|email',
                'pinNum' => 'required|digits:4',
            ]
        );
        $user = User::where('email', $request->email)
            ->where('verification_code', $request->pinNum)
            ->first();

        if (!$user) {
            return redirect()->back()->with(['error' => 'Invalid or incorrect verification code.']);
        }

        $user->update(
            [
                'verification_code' => null
            ]
        );

        return redirect()->route('forgot-password.resetPasswordIndex', ['email' => $user->email]);
    }

    public function resetPasswordIndex($email)
    {
        return view('auth.confirmPassword', compact('email'));
    }

    public function resetPasswordSend(Request $request, $email)
    {

        $user = User::where('email', $email)->first();

        if (!$user) {
            return back()->with('error', 'User not found');
        }

        if ($request->password !== $request->password_confirmation) {
            return redirect()->back()->with('notMatch', 'Password and Confirm Password do not match.');
        }

        // Validate Input field
        $request->validate([
            'password' => 'required|min:6|confirmed',
        ]);

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success', 'Your password has been reset successfully!');
    }

}
