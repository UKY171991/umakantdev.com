@extends('layouts.app')

@section('title', $service->title . ' | Service Details')

@section('content')
<div class="breadcrumb-section py-5 bg-dark bg-opacity-25 mb-5">
    <div class="container text-center py-4">
        <h1 class="display-4 fw-bold text-white mb-2">{{ $service->title }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/" class="text-primary text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('services') }}" class="text-primary text-decoration-none">Services</a></li>
                <li class="breadcrumb-item active text-muted" aria-current="page">{{ $service->title }}</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="glass-card p-5 mb-4">
                <div class="d-flex justify-content-between align-items-start mb-4">
                    <div>
                        @if($service->category)
                            <span class="badge bg-primary bg-opacity-10 text-primary mb-2">{{ $service->category->name }}</span>
                        @endif
                        @if($service->is_featured)
                            <span class="badge bg-warning ms-2">Featured</span>
                        @endif
                    </div>
                    @if($service->price)
                        <div class="text-end">
                            <h3 class="fw-bold text-primary mb-0">{{ $service->formatted_price }}</h3>
                            <small class="text-muted">{{ $service->price_type }}</small>
                        </div>
                    @else
                        <div class="text-end">
                            <h3 class="fw-bold text-muted mb-0">Contact for pricing</h3>
                        </div>
                    @endif
                </div>
                
                <h2 class="fw-bold mb-4 text-white">{{ $service->title }}</h2>
                
                <div class="mb-4">
                    <p class="text-muted lead">{{ $service->description }}</p>
                </div>
                
                @if($service->content)
                    <div class="mb-4">
                        <h4 class="fw-bold mb-3 text-white">Service Details</h4>
                        <div class="text-muted" style="white-space: pre-wrap;">{{ $service->content }}</div>
                    </div>
                @endif
                
                @if($service->image)
                    <div class="mb-4">
                        <img src="{{ $service->image }}" alt="{{ $service->title }}" class="img-fluid rounded">
                    </div>
                @endif
                
                <div class="d-flex gap-3 mt-4">
                    <a href="{{ route('contact') }}" class="btn btn-premium">
                        <i class="fas fa-envelope me-2"></i> Get Quote
                    </a>
                    <a href="{{ route('services') }}" class="btn btn-outline-light">
                        <i class="fas fa-arrow-left me-2"></i> Back to Services
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="glass-card p-4 mb-4">
                <h4 class="fw-bold mb-3 text-white">Service Information</h4>
                
                <div class="mb-3">
                    <label class="text-muted small">Category</label>
                    <p class="mb-0 fw-bold">
                        @if($service->category)
                            {{ $service->category->name }}
                        @else
                            Uncategorized
                        @endif
                    </p>
                </div>
                
                <div class="mb-3">
                    <label class="text-muted small">Price Type</label>
                    <p class="mb-0 fw-bold text-capitalize">{{ $service->price_type }}</p>
                </div>
                
                <div class="mb-3">
                    <label class="text-muted small">Status</label>
                    <p class="mb-0">
                        @if($service->is_active)
                            <span class="badge bg-success">Available</span>
                        @else
                            <span class="badge bg-secondary">Unavailable</span>
                        @endif
                    </p>
                </div>
                
                @if($service->is_featured)
                    <div class="mb-3">
                        <label class="text-muted small">Featured</label>
                        <p class="mb-0">
                            <i class="fas fa-star text-warning"></i> Featured Service
                        </p>
                    </div>
                @endif
            </div>
            
            @if($relatedServices->count() > 0)
                <div class="glass-card p-4">
                    <h4 class="fw-bold mb-3 text-white">Related Services</h4>
                    <div class="space-y-3">
                        @foreach($relatedServices as $relatedService)
                            <div class="border-bottom border-secondary border-opacity-25 pb-3 {{ !$loop->last ? 'mb-3' : '' }}">
                                <h6 class="fw-bold mb-1 text-white">{{ $relatedService->title }}</h6>
                                <p class="text-muted small mb-2">{{ Str::limit($relatedService->description, 80) }}</p>
                                @if($relatedService->price)
                                    <div class="mb-2">
                                        <span class="fw-bold text-primary small">{{ $relatedService->formatted_price }}</span>
                                        <small class="text-muted">/ {{ $relatedService->price_type }}</small>
                                    </div>
                                @endif
                                <a href="{{ route('service.detail', $relatedService->slug) }}" class="btn btn-sm btn-outline-primary">
                                    View Details
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
