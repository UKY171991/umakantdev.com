@extends('layouts.app')

@section('content')
<div class="container hero-section py-5">
    <div class="row align-items-center min-vh-75">
        <div class="col-lg-7 mb-5 mb-lg-0 text-center text-lg-start" data-aos="fade-right">
            <h6 class="text-primary fw-bold text-uppercase mb-3 tracking-widest">Full Service Digital Agency</h6>
            <h1 class="display-2 fw-bold mb-4 lh-sm">We Help Bring Your <span class="gradient-text">Ideas to Reality!</span></h1>
            <p class="lead mb-5 text-muted pe-lg-5">A full service digital marketing agency dedicated to helping businesses grow online. We specialize in custom web development, SEO, and app development.</p>
            <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-start">
                <a href="{{ route('portfolio') }}" class="btn btn-premium btn-lg px-5">Our Portfolio</a>
                <a href="#" class="btn btn-outline-light rounded-pill btn-lg px-5">SEO Packages</a>
            </div>
        </div>
        <div class="col-lg-5 hero-image-wrapper text-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="hero-shapes">
                <div class="shape-1"></div>
                <div class="shape-2"></div>
            </div>
            <div class="glass-card p-3 position-relative z-1">
                <img src="{{ asset('images/hero.png') }}" alt="Web Development" class="img-fluid rounded-4 shadow-lg">
                <!-- Floating Card -->
                <div class="position-absolute -bottom-10 -right-10 p-3 glass-card d-none d-md-block" data-aos="fade-up" data-aos-delay="400">
                    <div class="d-flex align-items-center gap-3 text-start">
                        <div class="bg-primary bg-opacity-20 p-2 rounded-circle">
                            <i class="fas fa-chart-line text-primary"></i>
                        </div>
                        <div>
                            <p class="mb-0 fw-bold small text-white">Conversion Rate</p>
                            <span class="text-primary fw-bold">+24% Increase</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Core Values Section (Brand Feature) -->
<section class="py-5">
    <div class="container overflow-hidden">
        <div class="row g-4 justify-content-center">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="glass-card p-4 h-100 text-center border-bottom-primary border-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-comments-dollar text-primary fs-2"></i>
                    </div>
                    <h5 class="fw-bold text-white mb-2">Transparent Communication</h5>
                    <p class="text-muted small mb-0">We keep you in the loop with regular updates and clear reporting on every project status.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="glass-card p-4 h-100 text-center border-bottom-secondary border-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-brain text-secondary fs-2"></i>
                    </div>
                    <h5 class="fw-bold text-white mb-2">Smart Process</h5>
                    <p class="text-muted small mb-0">Our agile methodology ensures efficient delivery, quality code, and faster time-to-market.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="glass-card p-4 h-100 text-center border-bottom-accent border-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-laptop-code text-accent fs-2"></i>
                    </div>
                    <h5 class="fw-bold text-white mb-2">Clean Coding</h5>
                    <p class="text-muted small mb-0">We write clean, sustainable, and scalable code that powers your business for the long term.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="services" class="py-5">
    <div class="container py-5">
        <div class="text-center mb-5" data-aos="fade-up">
            <h6 class="text-primary fw-bold text-uppercase mb-3">Our Core Expertise</h6>
            <h2 class="display-5 fw-bold mb-3 text-white">Empowering Your <span class="gradient-text">Digital Growth</span></h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">Explore our suite of digital solutions designed to help your brand stand out and thrive in the modern landscape.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="glass-card p-4 h-100">
                    <div class="service-icon text-primary"><i class="fas fa-laptop-code"></i></div>
                    <h4 class="fw-bold mb-3 text-white">Website Designing</h4>
                    <p class="text-muted small mb-4">Responsive, high-converting websites built with modern frameworks and pixel-perfect design.</p>
                    <a href="{{ route('services') }}" class="text-primary text-decoration-none fw-bold small">Explore Service <i class="fas fa-chevron-right ms-2 mt-1"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="glass-card p-4 h-100">
                    <div class="service-icon text-secondary"><i class="fas fa-mobile-alt"></i></div>
                    <h4 class="fw-bold mb-3 text-white">App Development</h4>
                    <p class="text-muted small mb-4">Scalable iOS and Android applications developed for seamless performance and user engagement.</p>
                    <a href="{{ route('services') }}" class="text-secondary text-decoration-none fw-bold small">Explore Service <i class="fas fa-chevron-right ms-2 mt-1"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="glass-card p-4 h-100">
                    <div class="service-icon text-info"><i class="fas fa-search-dollar"></i></div>
                    <h4 class="fw-bold mb-3 text-white">SEO Services</h4>
                    <p class="text-muted small mb-4">Result-driven SEO strategies to boost your organic rankings and drive sustainable traffic.</p>
                    <a href="{{ route('services') }}" class="text-info text-decoration-none fw-bold small">Explore Service <i class="fas fa-chevron-right ms-2 mt-1"></i></a>
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
