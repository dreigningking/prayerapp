<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class GuestController extends Controller
{
    public function contactus(Request $request){
        // Validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'type' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first()
            ], 422);
        }
        

        try {
            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'type' => $request->type,
                'message' => $request->message
            ]);
            // Here you would typically send an email
            // For now, we'll just return success
            // TODO: Implement actual email sending logic

            return response()->json([
                'status' => 'success',
                'message' => 'Thank you for contacting us! We will get back to you shortly.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong. Please try again later.'
            ], 500);
        }
    }

    public function newsletterSubscription(Request $request){
        // Validate the request
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first()
            ], 422);
        }

        try {
            // Here you would typically add the email to your newsletter list
            // TODO: Implement newsletter subscription logic

            return response()->json([
                'status' => 'success',
                'message' => 'Thank you for subscribing to our newsletter!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong. Please try again later.'
            ], 500);
        }
    }

    public function waitinglist(Request $request){

    }
}
