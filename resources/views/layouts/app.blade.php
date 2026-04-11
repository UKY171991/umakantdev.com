<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Premium Website Development Services | Umakant Dev')</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Professional website development services. Custom web applications, UI/UX design, and SEO optimized solutions for your business.">
    <meta name="keywords" content="web developer, website development, custom software, UI/UX design, SEO services, Laravel developer">
    <meta name="author" content="Umakant Dev">

    <!-- Styles & Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top glass-card mx-3 mt-3 px-4">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="/">
                <span class="gradient-text">UMAKANT</span>.DEV
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ request()->routeIs('services') ? 'active text-primary' : '' }}" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ request()->routeIs('portfolio') ? 'active text-primary' : '' }}" href="{{ route('portfolio') }}">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ request()->routeIs('about') ? 'active text-primary' : '' }}" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ request()->routeIs('contact') ? 'active text-primary' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-premium ms-lg-3">Hire Me</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="mt-5 py-5 glass-card mx-3 mb-3 text-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-md-start">
                    <h5 class="fw-bold"><span class="gradient-text">UMAKANT</span>.DEV</h5>
                    <p class="text-muted small">Crafting digital experiences that matter.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">&copy; {{ date('Year') }} Umakant Dev. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
