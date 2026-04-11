@extends('layouts.app')

@section('content')
<div class="container hero-section">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
            <h6 class="text-primary fw-bold text-uppercase mb-3">Professional Web Solutions</h6>
            <h1 class="display-3 fw-bold mb-4">Crafting Digital <span class="gradient-text">Masterpieces</span></h1>
            <p class="lead mb-5 text-muted">I help businesses scale by building ultra-fast, modern, and SEO-friendly websites tailored to your unique needs.</p>
            <div class="d-flex gap-3">
                <a href="{{ route('contact') }}" class="btn btn-premium">Get Started</a>
                <a href="{{ route('portfolio') }}" class="btn btn-outline-light rounded-pill px-4">View Work</a>
            </div>
        </div>
        <div class="col-lg-6 hero-image-wrapper" data-aos="zoom-in" data-aos-delay="200">
            <div class="glass-card p-2 position-relative">
                <img src="{{ asset('images/hero.png') }}" alt="Web Development" class="img-fluid rounded-4 shadow-lg">
                <div class="position-absolute bottom-0 start-0 m-4 p-3 glass-card d-none d-md-block" data-aos="fade-up" data-aos-delay="400">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-primary p-2 rounded-circle shadow-glow">
                            <i class="fas fa-check text-white"></i>
                        </div>
                        <div>
                            <p class="mb-0 fw-bold">SEO Optimized</p>
                            <small class="text-muted">Rank higher on Google</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="services" class="py-5 overflow-hidden">
    <div class="container py-5">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold mb-3">Our Core <span class="gradient-text">Expertise</span></h2>
            <p class="text-muted mx-auto" style="max-width: 600px;">We specialize in building high-performance digital solutions that drive results.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="glass-card p-5 h-100 text-center">
                    <div class="service-icon text-primary"><i class="fas fa-code"></i></div>
                    <h4 class="fw-bold mb-3">Development</h4>
                    <p class="text-muted small mb-4">Robust backends and pixel-perfect frontends built for speed.</p>
                    <a href="{{ route('services') }}" class="text-primary text-decoration-none fw-bold">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="glass-card p-5 h-100 text-center">
                    <div class="service-icon text-secondary"><i class="fas fa-paint-brush"></i></div>
                    <h4 class="fw-bold mb-3">Design</h4>
                    <p class="text-muted small mb-4">User-centric designs that prioritize usability and aesthetics.</p>
                    <a href="{{ route('services') }}" class="text-secondary text-decoration-none fw-bold">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="glass-card p-5 h-100 text-center">
                    <div class="service-icon text-info"><i class="fas fa-rocket"></i></div>
                    <h4 class="fw-bold mb-3">Optimization</h4>
                    <p class="text-muted small mb-4">SEO and performance tuning to keep you ahead of the curve.</p>
                    <a href="{{ route('services') }}" class="text-info text-decoration-none fw-bold">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container text-center py-5">
        <h2 class="display-5 fw-bold mb-4" data-aos="fade-up">Featured <span class="gradient-text">Projects</span></h2>
        <div class="row justify-content-center" data-aos="zoom-in-up">
            <div class="col-md-8">
                <div class="glass-card p-2 mb-4">
                    <img src="{{ asset('images/portfolio-1.png') }}" class="img-fluid rounded-4 shadow-lg" alt="Featured Work">
                </div>
                <h4 class="fw-bold">Ready to see more?</h4>
                <p class="text-muted mb-4">Visit our full portfolio to see how we've helped other businesses succeed.</p>
                <a href="{{ route('portfolio') }}" class="btn btn-premium">Explore Portfolio</a>
            </div>
        </div>
    </div>
</div>
@endsection
