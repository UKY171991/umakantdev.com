@extends('layouts.app')

@section('title', 'Our Services | Professional Web Development')

@section('content')
<div class="breadcrumb-section py-5 bg-dark bg-opacity-25 mb-5">
    <div class="container text-center py-4">
        <h1 class="display-4 fw-bold text-white mb-2">Our <span class="gradient-text">Services</span></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/" class="text-primary text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-muted" aria-current="page">Services</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container py-5">
    <div class="text-center mb-5" data-aos="fade-down">
        <h6 class="text-primary fw-bold text-uppercase mb-3">Service Excellence</h6>
        <h2 class="display-5 fw-bold mb-4 text-white">Solutions for the <span class="gradient-text">Modern Web</span></h2>
        <p class="text-muted mx-auto" style="max-width: 700px;">We provide a wide range of services to help you build, grow, and scale your online presence with cutting-edge technology.</p>
    </div>

    <div class="row g-4 mb-5 pb-5">
        <!-- Web Development -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="glass-card p-5 h-100 border-bottom-primary border-4">
                <div class="service-icon text-primary"><i class="fas fa-code"></i></div>
                <h3 class="fw-bold mb-3 text-white">Web Development</h3>
                <p class="text-muted mb-4">Building robust backends and dynamic frontends using Laravel, React, and modern tech stacks.</p>
                <ul class="list-unstyled text-muted small">
                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Custom CMS Solutions</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>E-commerce Platforms</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>API Integrations</li>
                </ul>
            </div>
        </div>

        <!-- App Development -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="glass-card p-5 h-100 border-bottom-secondary border-4">
                <div class="service-icon text-secondary"><i class="fas fa-mobile-alt"></i></div>
                <h3 class="fw-bold mb-3 text-white">App Development</h3>
                <p class="text-muted mb-4">Designing and developing high-performance mobile applications for iOS and Android.</p>
                <ul class="list-unstyled text-muted small">
                    <li class="mb-2"><i class="fas fa-check-circle text-secondary me-2"></i>Native iOS & Android</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-secondary me-2"></i>React Native Apps</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-secondary me-2"></i>App Store Optimization</li>
                </ul>
            </div>
        </div>

        <!-- SEO -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="glass-card p-5 h-100 border-bottom-accent border-4">
                <div class="service-icon text-info"><i class="fas fa-search-dollar"></i></div>
                <h3 class="fw-bold mb-3 text-white">SEO & Marketing</h3>
                <p class="text-muted mb-4">Ensuring your website ranks at the top and provides actionable insights for growth.</p>
                <ul class="list-unstyled text-muted small">
                    <li class="mb-2"><i class="fas fa-check-circle text-info me-2"></i>On-Page Optimization</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-info me-2"></i>Content Marketing</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-info me-2"></i>Monthly Audits</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Working Process Section -->
    <div class="py-5" data-aos="fade-up">
        <div class="text-center mb-5">
            <h6 class="text-primary fw-bold text-uppercase mb-3">Our Approach</h6>
            <h2 class="display-5 fw-bold mb-3 text-white">Our 8-Step <span class="gradient-text">Working Process</span></h2>
        </div>
        <div class="row g-4">
            <div class="col-md-3 col-6">
                <div class="text-center p-3">
                    <div class="bg-primary bg-opacity-10 p-4 rounded-circle mb-3 d-inline-block border border-primary border-opacity-25">
                        <span class="fs-3 fw-bold text-primary">01</span>
                    </div>
                    <h6 class="fw-bold text-white">Discovery</h6>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="text-center p-3">
                    <div class="bg-primary bg-opacity-10 p-4 rounded-circle mb-3 d-inline-block border border-primary border-opacity-25">
                        <span class="fs-3 fw-bold text-primary">02</span>
                    </div>
                    <h6 class="fw-bold text-white">Charting Path</h6>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="text-center p-3">
                    <div class="bg-primary bg-opacity-10 p-4 rounded-circle mb-3 d-inline-block border border-primary border-opacity-25">
                        <span class="fs-3 fw-bold text-primary">03</span>
                    </div>
                    <h6 class="fw-bold text-white">Sprints</h6>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="text-center p-3">
                    <div class="bg-primary bg-opacity-10 p-4 rounded-circle mb-3 d-inline-block border border-primary border-opacity-25">
                        <span class="fs-3 fw-bold text-primary">04</span>
                    </div>
                    <h6 class="fw-bold text-white">Reviews</h6>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="text-center p-3">
                    <div class="bg-primary bg-opacity-10 p-4 rounded-circle mb-3 d-inline-block border border-primary border-opacity-25">
                        <span class="fs-3 fw-bold text-primary">05</span>
                    </div>
                    <h6 class="fw-bold text-white">Polish</h6>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="text-center p-3">
                    <div class="bg-primary bg-opacity-10 p-4 rounded-circle mb-3 d-inline-block border border-primary border-opacity-25">
                        <span class="fs-3 fw-bold text-primary">06</span>
                    </div>
                    <h6 class="fw-bold text-white">Assessment</h6>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="text-center p-3">
                    <div class="bg-primary bg-opacity-10 p-4 rounded-circle mb-3 d-inline-block border border-primary border-opacity-25">
                        <span class="fs-3 fw-bold text-primary">07</span>
                    </div>
                    <h6 class="fw-bold text-white">Training</h6>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="text-center p-3">
                    <div class="bg-primary bg-opacity-10 p-4 rounded-circle mb-3 d-inline-block border border-primary border-opacity-25">
                        <span class="fs-3 fw-bold text-primary">08</span>
                    </div>
                    <h6 class="fw-bold text-white">Maintenance</h6>
                </div>
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
