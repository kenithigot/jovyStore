<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class RegisterUserController extends Controller
{
    /**
     * Show registration form
     */
    public function showRegistrationForm()
    {
        return view('auth.registerUser');
    }

    /**
     * Handle user registration
     */
    public function registration(Request $request)
    {
        $validated = $request->validate(
            [
                'firstName' => 'required|string|max:255',
                'lastName' => 'required|string|max:255',
                'phoneNum' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'emailAddress' => 'required|email|unique:users,email',
                'password' => 'required|min:6',
            ],
            [],
            [
                'firstName' => 'First Name',
                'lastName' => 'Last Name',
                'phoneNum' => 'Phone Number',
                'address' => 'Address',
                'emailAddress' => 'Email Address',
                'password' => 'Password',
            ]
        );

        // Generate random 4-digit verification code
        $randomNum = rand(1000, 9999);

        // Create the user
        $user = User::create(
            [
                'name' => $validated['firstName'] . ' ' . $validated['lastName'],
                'phone_number' => $validated['phoneNum'],
                'address' => $validated['address'],
                'email' => $validated['emailAddress'],
                'password' => Hash::make($validated['password']),
                'verification_code' => $randomNum,
                'is_verified' => false,
            ],
        );

        // Send the verification email
        Mail::raw("Your verification PIN is: $randomNum", function ($message) use ($user) {
            $message->to($user->email)
                ->subject('Account Verification');
        });

        // Redirect to verification page and store email in session
        return redirect()
            ->route('registerVerification', ['email' => $user->email])
            ->with('email', $user->email);
    }

    /**
     * Show the verification form
     */
    public function registerVerification(Request $request)
    {
        // Get email from query or session
        $email = $request->query('email') ?? session('email');

        if (!$email) {
            // If no email found, redirect back to registration
            return redirect()
                ->route('showRegistrationForm')
                ->withErrors(['email' => 'Verification email is missing. Please register again.']);
        }

        // Pass email to the view
        return view('auth.registerVerification', compact('email'));
    }

    /**
     * Handle the verification code submission
     */
    public function verifyConfirm(Request $request)
    {
        // Merge array input into a single string
        $pin = is_array($request->pinNum) ? implode('', $request->pinNum) : $request->pinNum;

        // Add merged pin back into request
        $request->merge(['pinNum' => $pin]);

        $request->validate([
            'email' => 'required|email',
            'pinNum' => 'required|digits:4',
        ]);

        // Find the user
        $user = User::where('email', $request->email)
            ->where('verification_code', $request->pinNum)
            ->first();

        if (!$user) {
            return redirect()->back()->with(['error' => 'Invalid or incorrect verification code.']);

        }

        $user->update([
            'is_verified' => true,
            'verification_code' => null,
        ]);

        return redirect()->back()->with('success', 'Your account has been successfully registered.');
    }
}
