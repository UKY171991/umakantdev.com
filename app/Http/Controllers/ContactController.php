<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactNotification;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'project_type' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        $contact = Contact::create($validated);

        // Get admin settings
        $adminEmail = \App\Models\Setting::get('site_email');
        if (empty($adminEmail)) {
            $adminEmail = \App\Models\Setting::get('contact_email', 'admin@umakantdev.com');
        }
        
        $notificationsEnabled = \App\Models\Setting::get('email_notifications', '1') == '1';

        // Send email notification to admin if enabled
        if ($notificationsEnabled) {
            try {
                \Illuminate\Support\Facades\Log::info('Attempting to send contact notification to: ' . $adminEmail);
                Mail::to($adminEmail)->send(new ContactNotification($contact));
            } catch (\Exception $e) {
                // Log the error or handle it silently to prevent 500 error for the user
                \Illuminate\Support\Facades\Log::error('Mail sending failed to ' . $adminEmail . ': ' . $e->getMessage());
            }
        }

        return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
