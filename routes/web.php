<?php

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

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/packages', function () {
    return view('packages');
})->name('packages');
