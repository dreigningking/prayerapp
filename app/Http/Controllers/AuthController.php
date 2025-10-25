<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    /**
     * Handle user login via AJAX
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()->toArray()
            ], 422);
        }

        if (Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            $request->session()->regenerate();

            return response()->json([
                'success' => true,
                'message' => 'Login successful!',
                'redirect' => route('dashboard')
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid credentials.'
        ], 401);
    }

    /**
     * Handle user registration via AJAX
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()->toArray()
            ], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'email_verified_at' => now(),
        ]);

        Auth::login($user);

        return response()->json([
            'success' => true,
            'message' => 'Registration successful!',
            'redirect' => route('dashboard')
        ]);
    }

    /**
     * Send one-time password for login
     */
    public function sendOneTimePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()->toArray()
            ], 422);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            // Return success even if user doesn't exist for security
            return response()->json([
                'success' => true,
                'message' => 'If an account with that email exists, a one-time password has been sent.'
            ]);
        }

        // Generate one-time password
        $otp = strtoupper(Str::random(8));

        // Store OTP temporarily (you might want to create a dedicated table/model for this)
        session(['otp_' . $user->id => ['code' => $otp, 'expires' => now()->addMinutes(15)]]);

        // Here you would send the OTP via email
        // For demo purposes, we'll just return it in the response
        // In production, use Mail facade to send email

        return response()->json([
            'success' => true,
            'message' => 'One-time password sent to your email.',
            'otp' => config('app.debug') ? $otp : null // Only show in debug mode
        ]);
    }

    /**
     * Login with one-time password
     */
    public function loginWithOneTimePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'otp' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()->toArray()
            ], 422);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid email address.'
            ], 401);
        }

        $sessionOtp = session('otp_' . $user->id);

        if (!$sessionOtp ||
            $sessionOtp['code'] !== $request->otp ||
            now()->isAfter($sessionOtp['expires'])) {

            return response()->json([
                'success' => false,
                'message' => 'Invalid or expired one-time password.'
            ], 401);
        }

        // Clear the OTP
        session()->forget('otp_' . $user->id);

        // Log the user in
        Auth::login($user);
        $request->session()->regenerate();

        return response()->json([
            'success' => true,
            'message' => 'Login successful!',
            'redirect' => route('dashboard')
        ]);
    }

    /**
     * Logout user
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        if ($request->wantsJson()) {
            return response()->json(['message' => 'Logged out successfully']);
        }

        return redirect('/');
    }
}
