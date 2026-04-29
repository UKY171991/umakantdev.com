@extends('layouts.app')

@section('meta_title', $post->title . ' | Blog')
@section('meta_description', $post->excerpt)

@section('content')
<div class="breadcrumb-section py-5 bg-dark bg-opacity-25 mb-5">
    <div class="container text-center py-4">
        <h1 class="display-5 fw-bold text-white mb-2">{{ $post->title }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/" class="text-primary text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('blog') }}" class="text-primary text-decoration-none">Blog</a></li>
                <li class="breadcrumb-item active text-muted" aria-current="page">Post Details</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container py-5">
    <div class="row g-5">
        <!-- Post Content -->
        <div class="col-lg-8" data-aos="fade-right">
            <div class="glass-card overflow-hidden mb-5">
                @if($post->featured_image)
                    <img src="{{ asset('storage/' . $post->featured_image) }}" class="img-fluid w-100" alt="{{ $post->title }}" style="max-height: 500px; object-fit: cover;">
                @else
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1200&q=80" class="img-fluid w-100" alt="Default Image" style="max-height: 500px; object-fit: cover;">
                @endif
                
                <div class="p-5">
                    <div class="d-flex align-items-center gap-3 mb-4 text-muted border-bottom border-white border-opacity-10 pb-4">
                        <div class="d-flex align-items-center gap-2">
                            <i class="far fa-calendar-alt text-primary"></i>
                            <span>{{ $post->created_at->format('M d, Y') }}</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="far fa-user text-primary"></i>
                            <span>Admin</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="far fa-clock text-primary"></i>
                            <span>5 min read</span>
                        </div>
                    </div>

                    <div class="post-body text-white-50 lh-lg">
                        {!! $post->content !!}
                    </div>

                    <!-- Share Section -->
                    <div class="mt-5 pt-5 border-top border-white border-opacity-10">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                            <h5 class="fw-bold text-white mb-0">Share this post:</h5>
                            <div class="d-flex gap-3">
                                <a href="#" class="btn btn-outline-light rounded-circle p-0" style="width: 40px; height: 40px; line-height: 38px; text-align: center;"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="btn btn-outline-light rounded-circle p-0" style="width: 40px; height: 40px; line-height: 38px; text-align: center;"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-outline-light rounded-circle p-0" style="width: 40px; height: 40px; line-height: 38px; text-align: center;"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4" data-aos="fade-left">
            <div class="sticky-top" style="top: 100px;">
                <!-- Recent Posts -->
                <div class="glass-card p-4 mb-4">
                    <h5 class="fw-bold text-white mb-4 border-bottom border-white border-opacity-10 pb-3">Recent Posts</h5>
                    @foreach($recentPosts as $recent)
                        <div class="d-flex gap-3 mb-4 last-mb-0">
                            <div class="flex-shrink-0">
                                @if($recent->featured_image)
                                    <img src="{{ asset('storage/' . $recent->featured_image) }}" class="rounded shadow-sm" style="width: 70px; height: 70px; object-fit: cover;">
                                @else
                                    <div class="rounded bg-primary bg-opacity-10 d-flex align-items-center justify-content-center text-primary" style="width: 70px; height: 70px;">
                                        <i class="far fa-image"></i>
                                    </div>
                                @endif
                            </div>
                            <div>
                                <h6 class="fw-bold text-white mb-1 small">
                                    <a href="{{ route('blog.show', $recent->slug) }}" class="text-decoration-none text-white hover-primary transition">
                                        {{ Str::limit($recent->title, 50) }}
                                    </a>
                                </h6>
                                <small class="text-muted">{{ $recent->created_at->format('M d, Y') }}</small>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Newsletter -->
                <div class="glass-card p-4 bg-gradient-premium border-0">
                    <h5 class="fw-bold text-white mb-3">Newsletter</h5>
                    <p class="text-white-50 small mb-4">Subscribe to our newsletter for latest updates and news.</p>
                    <form>
                        <input type="email" class="form-control mb-3" placeholder="Enter your email">
                        <button type="submit" class="btn btn-premium w-100">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .post-body p {
        margin-bottom: 1.5rem;
    }
    .post-body img {
        max-width: 100%;
        height: auto;
        border-radius: 1rem;
        margin: 2rem 0;
    }
    .last-mb-0:last-child {
        margin-bottom: 0 !important;
    }
    .hover-primary:hover {
        color: #6366f1 !important;
    }
</style>
@endsection
