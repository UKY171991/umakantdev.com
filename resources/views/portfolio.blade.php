@extends('layouts.app')

@section('title', 'Portfolio | Our Latest Projects')

@section('content')
<div class="breadcrumb-section py-5 bg-dark bg-opacity-25 mb-5">
    <div class="container text-center py-4">
        <h1 class="display-4 fw-bold text-white mb-2">Our <span class="gradient-text">Work</span></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/" class="text-primary text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-muted" aria-current="page">Portfolio</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container py-5">
    <div class="text-center mb-5 pb-5" data-aos="fade-down">
        <h6 class="text-primary fw-bold text-uppercase mb-3">Case Studies</h6>
        <h2 class="display-5 fw-bold mb-4 text-white">Visual Stories of <span class="gradient-text">Success</span></h2>
        <p class="text-muted mx-auto" style="max-width: 700px;">Explore our collection of successful projects and digital transformations we've delivered for clients across various industries.</p>
    </div>

    <div class="row g-5">
        <!-- Project 1 -->
        <div class="col-lg-6" data-aos="fade-up">
            <div class="glass-card overflow-hidden h-100 hvr-grow shadow-lg">
                <div class="position-relative">
                    <img src="{{ asset('images/portfolio-1.png') }}" class="img-fluid w-100" alt="SaaS Dashboard" onerror="this.src='https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80'">
                    <div class="glass-overlay"></div>
                </div>
                <div class="p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge bg-primary rounded-pill px-3 py-2">SaaS Platform</span>
                        <small class="text-muted fw-bold">PROJECT #01</small>
                    </div>
                    <h3 class="fw-bold mb-2 text-white">CloudScale Analytics</h3>
                    <p class="text-muted mb-4 small">A comprehensive dashboard for real-time cloud infrastructure monitoring and predictive analytics.</p>
                    <a href="#" class="btn btn-premium btn-sm px-4">Case Study <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>

        <!-- Project 2 -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="glass-card overflow-hidden h-100 hvr-grow shadow-lg">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1557821552-17105176677c?auto=format&fit=crop&w=600&q=80" class="img-fluid w-100" alt="E-commerce" style="height: 337px; object-fit: cover;">
                    <div class="glass-overlay"></div>
                </div>
                <div class="p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge bg-secondary rounded-pill px-3 py-2">E-commerce</span>
                        <small class="text-muted fw-bold">PROJECT #02</small>
                    </div>
                    <h3 class="fw-bold mb-2 text-white">LuxVibe Marketplace</h3>
                    <p class="text-muted mb-4 small">An high-end e-commerce platform for luxury fashion with AI-driven recommendations.</p>
                    <a href="#" class="btn btn-premium btn-sm px-4">Case Study <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>

        <!-- Project 3 -->
        <div class="col-lg-6" data-aos="fade-up">
            <div class="glass-card overflow-hidden h-100 hvr-grow shadow-lg">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1512428559087-560fa5ceab42?auto=format&fit=crop&w=600&q=80" class="img-fluid w-100" alt="Mobile App" style="height: 337px; object-fit: cover;">
                    <div class="glass-overlay"></div>
                </div>
                <div class="p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge bg-info rounded-pill px-3 py-2">Mobile App</span>
                        <small class="text-muted fw-bold">PROJECT #03</small>
                    </div>
                    <h3 class="fw-bold mb-2 text-white">FitTrack Pro</h3>
                    <p class="text-muted mb-4 small">Cross-platform health and fitness application with wearable device integration.</p>
                    <a href="#" class="btn btn-premium btn-sm px-4">Case Study <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>

        <!-- Project 4 -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="glass-card overflow-hidden h-100 hvr-grow shadow-lg">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80" class="img-fluid w-100" alt="SEO Campaign" style="height: 337px; object-fit: cover;">
                    <div class="glass-overlay"></div>
                </div>
                <div class="p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge bg-accent rounded-pill px-3 py-2">SEO Audit</span>
                        <small class="text-muted fw-bold">PROJECT #04</small>
                    </div>
                    <h3 class="fw-bold mb-2 text-white">Growth Engine</h3>
                    <p class="text-muted mb-4 small">Comprehensive SEO strategy and content overhaul delivering 300% traffic growth.</p>
                    <a href="#" class="btn btn-premium btn-sm px-4">Case Study <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
