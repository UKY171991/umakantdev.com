@extends('layouts.app')

@section('title', 'Portfolio | Our Latest Projects')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5 mt-5">
        <h6 class="text-primary fw-bold text-uppercase mb-3">Case Studies</h6>
        <h1 class="display-4 fw-bold mb-4">Crafting Visual <span class="gradient-text">Stories</span></h1>
        <p class="text-muted mx-auto" style="max-width: 700px;">Explore our collection of successful projects and digital transformations we've delivered for clients across various industries.</p>
    </div>

    <div class="row g-4">
        <!-- Project 1 -->
        <div class="col-md-6">
            <div class="glass-card overflow-hidden">
                <img src="{{ asset('images/portfolio-1.png') }}" class="img-fluid" alt="SaaS Dashboard Project">
                <div class="p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge bg-primary rounded-pill">SaaS Platform</span>
                        <small class="text-muted">2024</small>
                    </div>
                    <h3 class="fw-bold mb-2">CloudScale Analytics</h3>
                    <p class="text-muted mb-4">A comprehensive dashboard for real-time cloud infrastructure monitoring and analytics.</p>
                    <a href="#" class="btn btn-outline-light btn-sm rounded-pill px-4">View Case Study</a>
                </div>
            </div>
        </div>

        <!-- Project 2 (Placeholder or second image) -->
        <div class="col-md-6">
            <div class="glass-card overflow-hidden">
                <div style="height: 300px; background: linear-gradient(135deg, #1e293b, #0f172a); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-shopping-bag display-1 text-primary opacity-25"></i>
                </div>
                <div class="p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge bg-secondary rounded-pill">E-commerce</span>
                        <small class="text-muted">2023</small>
                    </div>
                    <h3 class="fw-bold mb-2">LuxVibe Marketplace</h3>
                    <p class="text-muted mb-4">An high-end e-commerce platform for luxury fashion with seamless payment integration.</p>
                    <a href="#" class="btn btn-outline-light btn-sm rounded-pill px-4">View Case Study</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
