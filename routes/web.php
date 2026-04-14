<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/services', function () {
    return view('services');
})->name('services');

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
});

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
});

Route::redirect('/umakant', '/admin', 301);

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/packages', function () {
    return view('packages');
})->name('packages');
