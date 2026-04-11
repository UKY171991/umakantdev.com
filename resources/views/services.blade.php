@extends('layouts.app')

@section('title', 'Our Services | Professional Web Development')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5 mt-5" data-aos="fade-down">
        <h6 class="text-primary fw-bold text-uppercase mb-3">Service Excellence</h6>
        <h1 class="display-4 fw-bold mb-4">Solutions for the <span class="gradient-text">Modern Web</span></h1>
        <p class="text-muted mx-auto" style="max-width: 700px;">We provide a wide range of services to help you build, grow, and scale your online presence with cutting-edge technology.</p>
    </div>

    <div class="row g-4 mb-5">
        <!-- Web Development -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="glass-card p-5 h-100">
                <div class="service-icon text-primary"><i class="fas fa-code"></i></div>
                <h3 class="fw-bold mb-3">Full-Stack Development</h3>
                <p class="text-muted mb-4">Building robust backends and dynamic frontends using Laravel, Livewire, and modern JavaScript frameworks.</p>
                <ul class="list-unstyled text-muted small">
                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Custom CMS Development</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>E-commerce Solutions</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>API Integrations</li>
                </ul>
            </div>
        </div>

        <!-- UI/UX -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="glass-card p-5 h-100">
                <div class="service-icon text-secondary"><i class="fas fa-layer-group"></i></div>
                <h3 class="fw-bold mb-3">UI/UX Design</h3>
                <p class="text-muted mb-4">Designing intuitive user interfaces that convert visitors into customers with high retention rates.</p>
                <ul class="list-unstyled text-muted small">
                    <li class="mb-2"><i class="fas fa-check-circle text-secondary me-2"></i>Mobile-First Design</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-secondary me-2"></i>Interactive Prototypes</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-secondary me-2"></i>Brand Identity</li>
                </ul>
            </div>
        </div>

        <!-- SEO -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="glass-card p-5 h-100">
                <div class="service-icon text-info"><i class="fas fa-search-dollar"></i></div>
                <h3 class="fw-bold mb-3">SEO & Analytics</h3>
                <p class="text-muted mb-4">Ensuring your website ranks at the top of search results and providing actionable insights from data.</p>
                <ul class="list-unstyled text-muted small">
                    <li class="mb-2"><i class="fas fa-check-circle text-info me-2"></i>On-Page Optimization</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-info me-2"></i>Performance Audits</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-info me-2"></i>Google Analytics Setup</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="glass-card p-5 text-center my-5 bg-gradient-premium" data-aos="zoom-in">
        <h2 class="fw-bold mb-4">Ready to kickstart your project?</h2>
        <p class="mb-4">Let's discuss your requirements and build something amazing together.</p>
        <a href="{{ route('contact') }}" class="btn btn-premium">Get a Free Consultation</a>
    </div>
</div>
@endsection
