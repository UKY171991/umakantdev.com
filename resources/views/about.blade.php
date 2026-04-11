@extends('layouts.app')

@section('title', 'About Us | The Team Behind the Tech')

@section('content')
<div class="container py-5">
    <div class="row align-items-center py-5">
        <div class="col-lg-5 mb-5 mb-lg-0">
            <div class="glass-card p-5 text-center">
                <div class="mb-4">
                    <img src="https://ui-avatars.com/api/?name=Umakant+Dev&background=6366f1&color=fff&size=200" class="rounded-circle shadow-lg border border-4 border-primary" alt="Umakant Dev">
                </div>
                <h2 class="fw-bold mb-0">Umakant Dev</h2>
                <p class="text-primary fw-bold mb-4">Founder & Lead Architect</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="#" class="text-white opacity-75"><i class="fab fa-github fa-lg"></i></a>
                    <a href="#" class="text-white opacity-75"><i class="fab fa-linkedin fa-lg"></i></a>
                    <a href="#" class="text-white opacity-75"><i class="fab fa-twitter fa-lg"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-7 ps-lg-5">
            <h6 class="text-primary fw-bold text-uppercase mb-3">Our Identity</h6>
            <h1 class="display-4 fw-bold mb-4">Driven by <span class="gradient-text">Innovation</span></h1>
            <p class="lead text-muted mb-4">With over a decade of experience in the digital space, we've helped hundreds of businesses transition into the modern web ecosystem.</p>
            <p class="text-muted mb-5">Our philosophy is simple: technology should be invisible and seamless. We build tools that empower users rather than complicating their tasks. Every line of code we write is optimized for performance, scalability, and security.</p>
            
            <div class="row g-4">
                <div class="col-6 col-md-4">
                    <h2 class="fw-bold gradient-text mb-0">100+</h2>
                    <small class="text-muted text-uppercase">Projects Done</small>
                </div>
                <div class="col-6 col-md-4">
                    <h2 class="fw-bold gradient-text mb-0">50+</h2>
                    <small class="text-muted text-uppercase">Happy Clients</small>
                </div>
                <div class="col-6 col-md-4">
                    <h2 class="fw-bold gradient-text mb-0">10+</h2>
                    <small class="text-muted text-uppercase">Years Experience</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
