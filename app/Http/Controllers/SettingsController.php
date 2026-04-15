<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class SettingsController extends Controller
{
    public function index(): View
    {
        $settings = [
            'site_name' => config('app.name', 'Umakant Dev'),
            'site_email' => 'admin@umakantdev.com',
            'contact_email' => 'hello@umakantdev.com',
            'maintenance_mode' => false,
            'email_notifications' => true,
        ];
        
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'site_name' => 'required|string|max:255',
            'site_email' => 'required|email|max:255',
            'contact_email' => 'required|email|max:255',
            'maintenance_mode' => 'boolean',
            'email_notifications' => 'boolean',
        ]);

        // In a real application, you would save these to a settings table or config file
        // For now, we'll just show a success message
        
        return redirect()->route('admin.settings.index')
            ->with('success', 'Settings updated successfully.');
    }
}
