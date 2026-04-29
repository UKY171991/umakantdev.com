<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    public function index(): View
    {
        $keys = [
            'site_name', 'site_email', 'contact_email', 'contact_phone', 'contact_address', 'maintenance_mode', 'email_notifications',
            'mail_mailer', 'mail_host', 'mail_port', 'mail_username', 'mail_password', 'mail_encryption', 'mail_from_address', 'mail_from_name',
            'social_facebook', 'social_twitter', 'social_instagram', 'social_linkedin',
            'app_env', 'app_debug', 'logo', 'favicon',
            'meta_title', 'meta_description', 'meta_keywords'
        ];

        $settings = [];
        foreach ($keys as $key) {
            $settings[$key] = Setting::get($key, config('app.' . $key) ?? config('mail.mailers.smtp.' . str_replace('mail_', '', $key)) ?? '');
        }

        // Defaults if empty
        if (empty($settings['site_name'])) $settings['site_name'] = config('app.name');
        if (empty($settings['app_env'])) $settings['app_env'] = config('app.env');
        if (empty($settings['mail_mailer'])) $settings['mail_mailer'] = config('mail.default');

        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'site_name' => 'required|string|max:255',
            'site_email' => 'required|email|max:255',
            'contact_email' => 'required|email|max:255',
            'contact_phone' => 'nullable|string|max:20',
            'contact_address' => 'nullable|string|max:500',
            'social_facebook' => 'nullable|url|max:255',
            'social_twitter' => 'nullable|url|max:255',
            'social_instagram' => 'nullable|url|max:255',
            'social_linkedin' => 'nullable|url|max:255',
            'maintenance_mode' => 'nullable|string',
            'email_notifications' => 'nullable|string',
            'mail_mailer' => 'required|string|in:smtp,sendmail,mailgun,ses,postmark,log,array',
            'mail_host' => 'nullable|string',
            'mail_port' => 'nullable|string',
            'mail_username' => 'nullable|string',
            'mail_password' => 'nullable|string',
            'mail_encryption' => 'nullable|string',
            'mail_from_address' => 'nullable|email',
            'mail_from_name' => 'nullable|string',
            'app_env' => 'required|string|in:local,production,testing',
            'app_debug' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'favicon' => 'nullable|image|mimes:ico,png,jpg|max:1024',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:500',
        ]);

        $settingsToSave = $request->except(['_token', '_method', 'logo', 'favicon']);
        
        // Handle checkboxes
        $settingsToSave['maintenance_mode'] = $request->has('maintenance_mode') ? '1' : '0';
        $settingsToSave['email_notifications'] = $request->has('email_notifications') ? '1' : '0';
        $settingsToSave['app_debug'] = $request->has('app_debug') ? '1' : '0';

        foreach ($settingsToSave as $key => $value) {
            Setting::set($key, $value);
        }

        // Handle File Uploads
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('settings', 'public');
            Setting::set('logo', $logoPath);
        }

        if ($request->hasFile('favicon')) {
            $faviconPath = $request->file('favicon')->store('settings', 'public');
            Setting::set('favicon', $faviconPath);
        }

        return redirect()->route('admin.settings.index')
            ->with('success', 'Settings updated successfully.');
    }
}
