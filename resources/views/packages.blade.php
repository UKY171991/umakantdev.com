@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5" data-aos="fade-up">
        <h6 class="text-primary fw-bold text-uppercase mb-3">Transparent Pricing</h6>
        <h1 class="display-4 fw-bold mb-3 text-white">Our SEO <span class="gradient-text">Packages</span></h1>
        <p class="text-muted mx-auto" style="max-width: 700px;">Choose a plan that fits your business goals. Our results-driven SEO packages are designed to boost your rankings and ROI.</p>
    </div>

    <div class="row g-4 mb-5">
        <!-- Value Plan -->
        <div class="col-lg-2 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="glass-card p-4 h-100 text-center border-top-primary border-4">
                <h5 class="fw-bold text-white mb-2">Value</h5>
                <div class="display-6 fw-bold text-primary mb-3">$125</div>
                <ul class="list-unstyled text-muted small mb-4 text-start">
                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Up to 10 Keywords</li>
                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>On-Page Optimization</li>
                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Monthly Reports</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-outline-light btn-sm w-100 rounded-pill">Choose Plan</a>
            </div>
        </div>

        <!-- Bronze Plan -->
        <div class="col-lg-2 col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="glass-card p-4 h-100 text-center border-top-secondary border-4">
                <h5 class="fw-bold text-white mb-2">Bronze</h5>
                <div class="display-6 fw-bold text-secondary mb-3">$225</div>
                <ul class="list-unstyled text-muted small mb-4 text-start">
                    <li class="mb-2"><i class="fas fa-check text-secondary me-2"></i>Up to 25 Keywords</li>
                    <li class="mb-2"><i class="fas fa-check text-secondary me-2"></i>On-Page & Off-Page</li>
                    <li class="mb-2"><i class="fas fa-check text-secondary me-2"></i>Monthly Reports</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-outline-light btn-sm w-100 rounded-pill">Choose Plan</a>
            </div>
        </div>

        <!-- Silver Plan (Most Popular) -->
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="glass-card p-4 h-100 text-center border-top-primary border-4 shadow-glow scale-up">
                <div class="badge bg-primary mb-2">MOST POPULAR</div>
                <h4 class="fw-bold text-white mb-2">Silver</h4>
                <div class="display-5 fw-bold text-primary mb-3">$400</div>
                <ul class="list-unstyled text-muted mb-4 text-start">
                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Up to 50 Keywords</li>
                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Full SEO Strategy</li>
                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Competitor Analysis</li>
                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Bi-Weekly Reports</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-premium w-100 rounded-pill">Get Started</a>
            </div>
        </div>

        <!-- Gold Plan -->
        <div class="col-lg-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="glass-card p-4 h-100 text-center border-top-accent border-4">
                <h5 class="fw-bold text-white mb-2">Gold</h5>
                <div class="display-6 fw-bold text-accent mb-3">$700</div>
                <ul class="list-unstyled text-muted small mb-4 text-start">
                    <li class="mb-2"><i class="fas fa-check text-accent me-2"></i>Up to 100 Keywords</li>
                    <li class="mb-2"><i class="fas fa-check text-accent me-2"></i>Advanced Content</li>
                    <li class="mb-2"><i class="fas fa-check text-accent me-2"></i>Priority Support</li>
                    <li class="mb-2"><i class="fas fa-check text-accent me-2"></i>Weekly Reports</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-outline-light btn-sm w-100 rounded-pill">Choose Plan</a>
            </div>
        </div>

        <!-- Platinum Plan -->
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="glass-card p-4 h-100 text-center border-top-secondary border-4">
                <h5 class="fw-bold text-white mb-2">Platinum</h5>
                <div class="display-6 fw-bold text-secondary mb-3">$1050</div>
                <ul class="list-unstyled text-muted small mb-4 text-start">
                    <li class="mb-2"><i class="fas fa-check text-secondary me-2"></i>Up to 150 Keywords</li>
                    <li class="mb-2"><i class="fas fa-check text-secondary me-2"></i>Global SEO Setup</li>
                    <li class="mb-2"><i class="fas fa-check text-secondary me-2"></i>Custom Marketing</li>
                    <li class="mb-2"><i class="fas fa-check text-secondary me-2"></i>Real-time Dashboard</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-outline-light btn-sm w-100 rounded-pill">Choose Plan</a>
            </div>
        </div>
    </div>
</div>
@endsection
