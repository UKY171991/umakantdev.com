@extends('layouts.app')

@section('meta_title', 'Insights & Updates | Blog - Umakant Dev')
@section('meta_description', 'Stay updated with the latest trends, tips, and news from the world of web development and digital marketing.')

@section('content')
<div class="breadcrumb-section py-5 bg-dark bg-opacity-25 mb-5">
    <div class="container text-center py-4">
        <h1 class="display-4 fw-bold text-white mb-2">Our <span class="gradient-text">Blog</span></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/" class="text-primary text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-muted" aria-current="page">Blog</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container py-5">
    <div class="row g-4 justify-content-center mb-5">
        <div class="col-lg-8 text-center" data-aos="fade-up">
            <h6 class="text-primary fw-bold text-uppercase mb-3">Latest Insights</h6>
            <h2 class="display-5 fw-bold mb-4 text-white">Knowledge share for <span class="gradient-text">Digital Success</span></h2>
            <p class="text-muted mb-0">Stay updated with the latest trends, tips, and news from the world of web development and digital marketing.</p>
        </div>
    </div>

    <div class="row g-4">
        @forelse($posts as $post)
        <!-- Blog Post -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="glass-card h-100 overflow-hidden border-0">
                <div class="position-relative">
                    @if($post->featured_image)
                        <img src="{{ asset('storage/' . $post->featured_image) }}" class="card-img-top w-100" alt="{{ $post->title }}" style="height: 220px; object-fit: cover;">
                    @else
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=600&q=80" class="card-img-top w-100" alt="{{ $post->title }}" style="height: 220px; object-fit: cover;">
                    @endif
                    <div class="position-absolute top-0 start-0 m-3">
                        <span class="badge bg-primary px-3 py-2 rounded-pill">Digital Marketing</span>
                    </div>
                </div>
                <div class="p-4">
                    <div class="d-flex align-items-center gap-2 mb-3 text-muted small">
                        <span><i class="far fa-calendar-alt text-primary me-1"></i> {{ $post->created_at->format('M d, Y') }}</span>
                        <span>•</span>
                        <span><i class="far fa-user text-primary me-1"></i> Admin</span>
                    </div>
                    <h4 class="fw-bold mb-3 text-white">
                        <a href="{{ route('blog.show', $post->slug) }}" class="text-decoration-none text-white hover-primary transition">
                            {{ $post->title }}
                        </a>
                    </h4>
                    <p class="text-muted small mb-4">{{ $post->excerpt }}</p>
                    <a href="{{ route('blog.show', $post->slug) }}" class="btn btn-outline-primary btn-sm rounded-pill px-4">Read More</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center py-5">
            <h3 class="text-white">No posts found.</h3>
        </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="row pt-5" data-aos="fade-up">
        <div class="col-12 d-flex justify-content-center pagination-premium">
            {{ $posts->links() }}
        </div>
    </div>

    <style>
        .pagination-premium .pagination .page-item .page-link {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff;
            margin: 0 5px;
            border-radius: 8px !important;
            padding: 10px 18px;
            transition: all 0.3s ease;
        }

        .pagination-premium .pagination .page-item.active .page-link {
            background: linear-gradient(135deg, #6366f1, #ec4899);
            border-color: transparent;
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.4);
        }

        .pagination-premium .pagination .page-item.disabled .page-link {
            background: rgba(255, 255, 255, 0.02);
            color: rgba(255, 255, 255, 0.3);
        }

        .pagination-premium .pagination .page-item .page-link:hover:not(.active) {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }
    </style>
</div>

<section class="py-5 bg-dark bg-opacity-25 mt-5">
    <div class="container py-5 text-center">
        <h2 class="display-6 fw-bold mb-4" data-aos="fade-up">Have a project in mind?</h2>
        <p class="text-muted mb-5" data-aos="fade-up" data-aos-delay="100">Let's work together to build something amazing.</p>
        <a href="{{ route('contact') }}" class="btn btn-premium btn-lg px-5 shadow-lg" data-aos="zoom-in" data-aos-delay="200">Start Your Project</a>
    </div>
</section>
@endsection
