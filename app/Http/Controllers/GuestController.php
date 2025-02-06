<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Notifications\ContactFormAutoReply;
use App\Notifications\ContactFormSubmission;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewsletterSubscription;
use App\Notifications\AdminNewsletterSubscriber;

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
        //dd($request->all());

        try {
            // Store contact information
            $contact = Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'type' => $request->type,
                'message' => $request->message
            ]);

            // Send notification to admin(s)
            $adminEmails = config('mail.admin_emails', ['admin@example.com']); // Default fallback email
            
            Notification::route('mail', $adminEmails)
                ->notify(new ContactFormSubmission($contact->toArray()));

            // Send auto-reply to user
            Notification::route('mail', $request->email)
                ->notify(new ContactFormAutoReply($contact->toArray()));

            return response()->json([
                'status' => 'success',
                'message' => 'Thank you for contacting us! We will get back to you shortly.'
            ]);
        } catch (\Exception $e) {
            Log::error('Contact form submission error: ' . $e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong. Please try again later.'
            ], 500);
        }
    }

    public function newsletterSubscription(Request $request){
        // Validate the request
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255|unique:subscribers,email'
        ],["email.unique"=> "You have already subscribed"]);

        try {
            // Store subscriber information
            $subscriber = Subscriber::create([
                'email' => $request->email,
                'name' => $request->name
            ]);
            
            // Send welcome email to subscriber
            Notification::route('mail', $request->email)
                ->notify(new NewsletterSubscription($request->email));

            // Notify admin about new subscriber
            $adminEmails = config('mail.admin_emails', ['social@gbeya.com']);
            Notification::route('mail', $adminEmails)
                ->notify(new AdminNewsletterSubscriber($request->email));

            return response()->json([
                'status' => 'success',
                'message' => 'Thank you for subscribing to our newsletter!'
            ]);
        } catch (\Exception $e) {
            Log::error('Newsletter subscription error: ' . $e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong. Please try again later.'
            ], 500);
        }
    }

    public function waitinglist(Request $request){

    }
}
