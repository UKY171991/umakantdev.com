@extends('layouts.app')

@section('title', 'Insights & Updates | Blog - Umakant Dev')

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
        <!-- Blog Post 1 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="glass-card h-100 overflow-hidden border-0">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=600&q=80" class="card-img-top w-100" alt="Web Development Trends" style="height: 220px; object-fit: cover;">
                    <div class="position-absolute top-0 start-0 m-3">
                        <span class="badge bg-primary px-3 py-2 rounded-pill">Development</span>
                    </div>
                </div>
                <div class="p-4">
                    <div class="d-flex align-items-center gap-2 mb-3 text-muted small">
                        <span><i class="far fa-calendar-alt text-primary me-1"></i> April 12, 2026</span>
                        <span>•</span>
                        <span><i class="far fa-user text-primary me-1"></i> Admin</span>
                    </div>
                    <h4 class="fw-bold mb-3 text-white">Top 10 Web Development Trends for 2026</h4>
                    <p class="text-muted small mb-4">Discover the latest technologies and methodologies that are shaping the future of web development this year.</p>
                    <a href="#" class="btn btn-outline-primary btn-sm rounded-pill px-4">Read More</a>
                </div>
            </div>
        </div>

        <!-- Blog Post 2 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="glass-card h-100 overflow-hidden border-0">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80" class="card-img-top w-100" alt="SEO Strategies" style="height: 220px; object-fit: cover;">
                    <div class="position-absolute top-0 start-0 m-3">
                        <span class="badge bg-secondary px-3 py-2 rounded-pill">SEO</span>
                    </div>
                </div>
                <div class="p-4">
                    <div class="d-flex align-items-center gap-2 mb-3 text-muted small">
                        <span><i class="far fa-calendar-alt text-primary me-1"></i> April 10, 2026</span>
                        <span>•</span>
                        <span><i class="far fa-user text-primary me-1"></i> Admin</span>
                    </div>
                    <h4 class="fw-bold mb-3 text-white">Maximizing ROI with Result-Driven SEO</h4>
                    <p class="text-muted small mb-4">Learn how to strategize your SEO campaigns to achieve maximum return on investment for your business.</p>
                    <a href="#" class="btn btn-outline-primary btn-sm rounded-pill px-4">Read More</a>
                </div>
            </div>
        </div>

        <!-- Blog Post 3 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="glass-card h-100 overflow-hidden border-0">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1557838923-2985c318be48?auto=format&fit=crop&w=600&q=80" class="card-img-top w-100" alt="Digital Marketing" style="height: 220px; object-fit: cover;">
                    <div class="position-absolute top-0 start-0 m-3">
                        <span class="badge bg-info px-3 py-2 rounded-pill">Marketing</span>
                    </div>
                </div>
                <div class="p-4">
                    <div class="d-flex align-items-center gap-2 mb-3 text-muted small">
                        <span><i class="far fa-calendar-alt text-primary me-1"></i> April 05, 2026</span>
                        <span>•</span>
                        <span><i class="far fa-user text-primary me-1"></i> Admin</span>
                    </div>
                    <h4 class="fw-bold mb-3 text-white">Social Media Marketing: Beyond the Posts</h4>
                    <p class="text-muted small mb-4">Explore the deeper layers of social media marketing that drive engagement and brand loyalty among users.</p>
                    <a href="#" class="btn btn-outline-primary btn-sm rounded-pill px-4">Read More</a>
                </div>
            </div>
        </div>
        
        <!-- Blog Post 4 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="glass-card h-100 overflow-hidden border-0">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=600&q=80" class="card-img-top w-100" alt="Clean Coding" style="height: 220px; object-fit: cover;">
                    <div class="position-absolute top-0 start-0 m-3">
                        <span class="badge bg-primary px-3 py-2 rounded-pill">Coding</span>
                    </div>
                </div>
                <div class="p-4">
                    <div class="d-flex align-items-center gap-2 mb-3 text-muted small">
                        <span><i class="far fa-calendar-alt text-primary me-1"></i> March 28, 2026</span>
                        <span>•</span>
                        <span><i class="far fa-user text-primary me-1"></i> Admin</span>
                    </div>
                    <h4 class="fw-bold mb-3 text-white">The Importance of Clean Code in Business</h4>
                    <p class="text-muted small mb-4">Why clean, sustainable code is essential for the long-term success and scalability of your business applications.</p>
                    <a href="#" class="btn btn-outline-primary btn-sm rounded-pill px-4">Read More</a>
                </div>
            </div>
        </div>

        <!-- Blog Post 5 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="glass-card h-100 overflow-hidden border-0">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=600&q=80" class="card-img-top w-100" alt="Team Work" style="height: 220px; object-fit: cover;">
                    <div class="position-absolute top-0 start-0 m-3">
                        <span class="badge bg-secondary px-3 py-2 rounded-pill">Agency</span>
                    </div>
                </div>
                <div class="p-4">
                    <div class="d-flex align-items-center gap-2 mb-3 text-muted small">
                        <span><i class="far fa-calendar-alt text-primary me-1"></i> March 20, 2026</span>
                        <span>•</span>
                        <span><i class="far fa-user text-primary me-1"></i> Admin</span>
                    </div>
                    <h4 class="fw-bold mb-3 text-white">How We Deliver Results for Our Clients</h4>
                    <p class="text-muted small mb-4">A look behind the scenes at our agile methodology and how we ensure successful project delivery every time.</p>
                    <a href="#" class="btn btn-outline-primary btn-sm rounded-pill px-4">Read More</a>
                </div>
            </div>
        </div>

        <!-- Blog Post 6 -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="glass-card h-100 overflow-hidden border-0">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&q=80" class="card-img-top w-100" alt="UI UX Design" style="height: 220px; object-fit: cover;">
                    <div class="position-absolute top-0 start-0 m-3">
                        <span class="badge bg-info px-3 py-2 rounded-pill">UI/UX</span>
                    </div>
                </div>
                <div class="p-4">
                    <div class="d-flex align-items-center gap-2 mb-3 text-muted small">
                        <span><i class="far fa-calendar-alt text-primary me-1"></i> March 15, 2026</span>
                        <span>•</span>
                        <span><i class="far fa-user text-primary me-1"></i> Admin</span>
                    </div>
                    <h4 class="fw-bold mb-3 text-white">User Experience: The Heart of Every App</h4>
                    <p class="text-muted small mb-4">Understanding why UI/UX design is the most critical factor in the adoption and success of any mobile application.</p>
                    <a href="#" class="btn btn-outline-primary btn-sm rounded-pill px-4">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination Placeholder -->
    <div class="row pt-5" data-aos="fade-up">
        <div class="col-12">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link glass-card border-0 text-muted" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link glass-card border-0 bg-primary" href="#">1</a></li>
                    <li class="page-item"><a class="page-link glass-card border-0 text-white" href="#">2</a></li>
                    <li class="page-item"><a class="page-link glass-card border-0 text-white" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link glass-card border-0 text-white" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<section class="py-5 bg-dark bg-opacity-25 mt-5">
    <div class="container py-5 text-center">
        <h2 class="display-6 fw-bold mb-4" data-aos="fade-up">Have a project in mind?</h2>
        <p class="text-muted mb-5" data-aos="fade-up" data-aos-delay="100">Let's work together to build something amazing.</p>
        <a href="{{ route('contact') }}" class="btn btn-premium btn-lg px-5 shadow-lg" data-aos="zoom-in" data-aos-delay="200">Start Your Project</a>
    </div>
</section>
@endsection
