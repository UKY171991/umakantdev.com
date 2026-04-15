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
        <h2 class="display-5 fw-bold mb-4 text-white">Solutions for <span class="gradient-text">Modern Web</span></h2>
        <p class="text-muted mx-auto" style="max-width: 700px;">We provide a wide range of services to help you build, grow, and scale your online presence with cutting-edge technology.</p>
    </div>

    @if($categories->count() > 0)
        <!-- Service Categories -->
        <div class="row g-4 mb-5">
            @foreach($categories as $category)
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="glass-card p-5 h-100 border-bottom-primary border-4">
                        <div class="service-icon text-primary">
                            @if($category->icon)
                                <i class="{{ $category->icon }}"></i>
                            @else
                                <i class="fas fa-cogs"></i>
                            @endif
                        </div>
                        <h3 class="fw-bold mb-3 text-white">{{ $category->name }}</h3>
                        <p class="text-muted mb-4">{{ $category->description }}</p>
                        <div class="text-center">
                            <span class="badge bg-primary bg-opacity-10 text-primary">{{ $category->services()->count() }} Services</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- All Services -->
        <div class="text-center mb-5" data-aos="fade-up">
            <h3 class="fw-bold mb-3 text-white">All <span class="gradient-text">Services</span></h3>
            <p class="text-muted">Explore our complete range of professional services</p>
        </div>
        
        <div class="row g-4 mb-5 pb-5">
            @foreach($services as $service)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                    <div class="glass-card p-4 h-100">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="service-icon text-{{ $loop->index % 3 == 0 ? 'primary' : ($loop->index % 3 == 1 ? 'secondary' : 'info') }}">
                                @if($service->category && $service->category->icon)
                                    <i class="{{ $service->category->icon }}"></i>
                                @else
                                    <i class="fas fa-cogs"></i>
                                @endif
                            </div>
                            @if($service->is_featured)
                                <span class="badge bg-warning">Featured</span>
                            @endif
                        </div>
                        <h4 class="fw-bold mb-3 text-white">{{ $service->title }}</h4>
                        <p class="text-muted small mb-4">{{ $service->description }}</p>
                        
                        @if($service->price)
                            <div class="mb-3">
                                <span class="fw-bold text-primary">{{ $service->formatted_price }}</span>
                                <small class="text-muted">/ {{ $service->price_type }}</small>
                            </div>
                        @else
                            <div class="mb-3">
                                <span class="text-muted">Contact for pricing</span>
                            </div>
                        @endif
                        
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('service.detail', $service->slug) }}" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-eye me-1"></i> View Details
                            </a>
                            @if($service->category)
                                <small class="text-muted">{{ $service->category->name }}</small>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-5">
            <i class="fas fa-cogs fa-3x text-muted mb-3"></i>
            <h4 class="text-muted">No services available</h4>
            <p class="text-muted">Services will be available soon.</p>
        </div>
    @endif

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
