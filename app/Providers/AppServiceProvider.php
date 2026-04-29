<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        if (app()->runningInConsole() === false || app()->runningUnitTests() === false) {
            try {
                if (\Illuminate\Support\Facades\Schema::hasTable('settings')) {
                    $settings = \App\Models\Setting::all()->pluck('value', 'key')->toArray();

                    // App Settings
                    if (isset($settings['site_name'])) config(['app.name' => $settings['site_name']]);
                    if (isset($settings['app_env'])) config(['app.env' => $settings['app_env']]);
                    if (isset($settings['app_debug'])) config(['app.debug' => (bool)$settings['app_debug']]);
                    
                    // Mail Settings
                    if (!empty($settings['mail_mailer'])) config(['mail.default' => $settings['mail_mailer']]);
                    if (!empty($settings['mail_host'])) config(['mail.mailers.smtp.host' => $settings['mail_host']]);
                    if (!empty($settings['mail_port'])) config(['mail.mailers.smtp.port' => $settings['mail_port']]);
                    if (!empty($settings['mail_username'])) config(['mail.mailers.smtp.username' => $settings['mail_username']]);
                    if (!empty($settings['mail_password'])) config(['mail.mailers.smtp.password' => $settings['mail_password']]);
                    
                    // Smart Encryption
                    $encryption = $settings['mail_encryption'] ?? '';
                    if (empty($encryption) && ($settings['mail_port'] ?? '') == '465') {
                        $encryption = 'ssl';
                    }
                    if (!empty($encryption)) config(['mail.mailers.smtp.encryption' => $encryption]);

                    // Fix for SSL verification on some servers (common for Hostinger/Windows)
                    config([
                        'mail.mailers.smtp.stream' => [
                            'ssl' => [
                                'allow_self_signed' => true,
                                'verify_peer' => false,
                                'verify_peer_name' => false,
                            ],
                        ],
                        'mail.mailers.smtp.timeout' => 30,
                    ]);

                    // Smart From Address
                    $fromAddress = $settings['mail_from_address'] ?? '';
                    if (empty($fromAddress) && !empty($settings['mail_username'])) {
                        $fromAddress = $settings['mail_username'];
                    }
                    if (!empty($fromAddress)) config(['mail.from.address' => $fromAddress]);

                    $fromName = $settings['mail_from_name'] ?? '';
                    if (empty($fromName)) {
                        $fromName = $settings['site_name'] ?? config('app.name');
                    }
                    config(['mail.from.name' => $fromName]);

                    // Share settings with all views
                    view()->share('siteSettings', $settings);
                    
                    // Share active service categories
                    $serviceCategories = \App\Models\ServiceCategory::where('is_active', true)
                        ->orderBy('sort_order')
                        ->get();
                    view()->share('serviceCategories', $serviceCategories);
                }
            } catch (\Exception $e) {
                // Fail silently if DB not connected or table not found
            }
        }
    }
}
