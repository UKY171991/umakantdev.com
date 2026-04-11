@extends('layouts.app')

@section('content')
<div class="container hero-section">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
            <h6 class="text-primary fw-bold text-uppercase mb-3">Professional Web Solutions</h6>
            <h1 class="display-3 fw-bold mb-4">Crafting Digital <span class="gradient-text">Masterpieces</span></h1>
            <p class="lead mb-5 text-muted">I help businesses scale by building ultra-fast, modern, and SEO-friendly websites tailored to your unique needs.</p>
            <div class="d-flex gap-3">
                <a href="#contact" class="btn btn-premium">Get Started</a>
                <a href="#portfolio" class="btn btn-outline-light rounded-pill px-4">View Work</a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="glass-card p-2 position-relative">
                <img src="{{ asset('images/hero.png') }}" alt="Web Development" class="img-fluid rounded-4 shadow-lg">
                <div class="position-absolute bottom-0 start-0 m-4 p-3 glass-card d-none d-md-block">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-primary p-2 rounded-circle">
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

<div id="services" class="py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">What I <span class="gradient-text">Offer</span></h2>
            <p class="text-muted mx-auto" style="max-width: 600px;">Comprehensive website development services to help your business stand out in the digital landscape.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="glass-card p-5 h-100 text-center">
                    <div class="service-icon text-primary"><i class="fas fa-code"></i></div>
                    <h4 class="fw-bold mb-3">Web Development</h4>
                    <p class="text-muted">Custom-built websites using modern frameworks like Laravel, ensuring scalability and performance.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="glass-card p-5 h-100 text-center">
                    <div class="service-icon text-secondary"><i class="fas fa-paint-brush"></i></div>
                    <h4 class="fw-bold mb-3">UI/UX Design</h4>
                    <p class="text-muted">User-centric designs that prioritize usability and provide a seamless experience across all devices.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="glass-card p-5 h-100 text-center">
                    <div class="service-icon text-info"><i class="fas fa-rocket"></i></div>
                    <h4 class="fw-bold mb-3">SEO Strategy</h4>
                    <p class="text-muted">Optimizing your site for search engines to increase visibility and drive organic traffic to your business.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact" class="py-5">
    <div class="container py-5">
        <div class="glass-card p-5">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="display-5 fw-bold mb-4">Let's Build Something <span class="gradient-text">Great</span></h2>
                    <p class="text-muted mb-4">Have a project in mind? Reach out and let's discuss how we can bring your vision to life.</p>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-center gap-3">
                            <i class="fas fa-envelope text-primary"></i>
                            <span>hello@umakantdev.com</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center gap-3">
                            <i class="fas fa-map-marker-alt text-primary"></i>
                            <span>Global Services - Remote Work</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control bg-dark text-white border-0 p-3" placeholder="Your Name" style="background: rgba(255,255,255,0.05) !important;">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control bg-dark text-white border-0 p-3" placeholder="Email Address" style="background: rgba(255,255,255,0.05) !important;">
                        </div>
                        <div class="mb-4">
                            <textarea class="form-control bg-dark text-white border-0 p-3" rows="4" placeholder="Your Message" style="background: rgba(255,255,255,0.05) !important;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-premium w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
