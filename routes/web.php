<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/services', [App\Http\Controllers\FrontServiceController::class, 'index'])->name('services');
Route::get('/service/{slug}', [App\Http\Controllers\FrontServiceController::class, 'show'])->name('service.detail');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

// Utility Routes for Maintenance
Route::get('/run-migrate', function () {
    try {
        \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
        return "✅ Migration Success:<br><pre>" . \Illuminate\Support\Facades\Artisan::output() . "</pre>";
    } catch (\Exception $e) {
        return "❌ Migration Error: " . $e->getMessage();
    }
});

Route::get('/run-composer', function () {
    try {
        set_time_limit(600);
        $output = shell_exec('composer update 2>&1');
        return "✅ Composer Output:<br><pre>$output</pre>";
    } catch (\Exception $e) {
        return "❌ Composer Error: " . $e->getMessage();
    }
});

Route::get('/clear-cache', function () {
    try {
        \Illuminate\Support\Facades\Artisan::call('config:clear');
        \Illuminate\Support\Facades\Artisan::call('cache:clear');
        \Illuminate\Support\Facades\Artisan::call('view:clear');
        \Illuminate\Support\Facades\Artisan::call('route:clear');
        return '✅ Success: All caches have been cleared!';
    } catch (\Exception $e) {
        return '❌ Error: ' . $e->getMessage();
    }
});

Route::get('/setup-admin', function () {
    try {
        $user = \App\Models\User::updateOrCreate(
            ['email' => 'admin@umakantdev.com'],
            [
                'name' => 'Administrator',
                'password' => \Illuminate\Support\Facades\Hash::make('Admin@2026'),
            ]
        );

        return "✅ Admin Account Prepared!<br><b>Email:</b> admin@umakantdev.com<br><b>Password:</b> Admin@2026<br><br>Please delete this route from web.php after use.";
    } catch (\Exception $e) {
        return '❌ Error: ' . $e->getMessage();
    }
});

Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
    Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
    Route::get('/login', [AdminController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminController::class, 'login'])->name('login.submit');
});

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    
    // Contact Inquiries
    Route::get('/admin/inquiries', [App\Http\Controllers\ContactInquiryController::class, 'index'])->name('admin.inquiries.index');
    Route::get('/admin/inquiries/{inquiry}', [App\Http\Controllers\ContactInquiryController::class, 'show'])->name('admin.inquiries.show');
    Route::delete('/admin/inquiries/{inquiry}', [App\Http\Controllers\ContactInquiryController::class, 'destroy'])->name('admin.inquiries.destroy');
    
    // Service Categories
    Route::get('/admin/service-categories', [App\Http\Controllers\ServiceCategoryController::class, 'index'])->name('admin.service-categories.index');
    Route::get('/admin/service-categories/create', [App\Http\Controllers\ServiceCategoryController::class, 'create'])->name('admin.service-categories.create');
    Route::post('/admin/service-categories', [App\Http\Controllers\ServiceCategoryController::class, 'store'])->name('admin.service-categories.store');
    Route::get('/admin/service-categories/{serviceCategory}', [App\Http\Controllers\ServiceCategoryController::class, 'show'])->name('admin.service-categories.show');
    Route::get('/admin/service-categories/{serviceCategory}/edit', [App\Http\Controllers\ServiceCategoryController::class, 'edit'])->name('admin.service-categories.edit');
    Route::put('/admin/service-categories/{serviceCategory}', [App\Http\Controllers\ServiceCategoryController::class, 'update'])->name('admin.service-categories.update');
    Route::delete('/admin/service-categories/{serviceCategory}', [App\Http\Controllers\ServiceCategoryController::class, 'destroy'])->name('admin.service-categories.destroy');
    
    // Services
    Route::get('/admin/services', [App\Http\Controllers\ServiceController::class, 'index'])->name('admin.services.index');
    Route::get('/admin/services/create', [App\Http\Controllers\ServiceController::class, 'create'])->name('admin.services.create');
    Route::post('/admin/services', [App\Http\Controllers\ServiceController::class, 'store'])->name('admin.services.store');
    Route::get('/admin/services/{service}', [App\Http\Controllers\ServiceController::class, 'show'])->name('admin.services.show');
    Route::get('/admin/services/{service}/edit', [App\Http\Controllers\ServiceController::class, 'edit'])->name('admin.services.edit');
    Route::put('/admin/services/{service}', [App\Http\Controllers\ServiceController::class, 'update'])->name('admin.services.update');
    Route::delete('/admin/services/{service}', [App\Http\Controllers\ServiceController::class, 'destroy'])->name('admin.services.destroy');
    
    // Settings
    Route::get('/admin/settings', [App\Http\Controllers\SettingsController::class, 'index'])->name('admin.settings.index');
    Route::put('/admin/settings', [App\Http\Controllers\SettingsController::class, 'update'])->name('admin.settings.update');
});

Route::redirect('/umakant', '/admin', 301);

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

Route::get('/packages', function () {
    return view('packages');
})->name('packages');
