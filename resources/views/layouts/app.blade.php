<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Premium Website Development Services | Umakant Dev')</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Professional website development services. Custom web applications, UI/UX design, and SEO optimized solutions for your business.">
    <meta name="keywords" content="web developer, website development, custom software, UI/UX design, SEO services, Laravel developer">
    <meta name="author" content="Umakant Dev">

    <!-- Styles & Scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="scroll-progress"></div>
    
    <!-- Top Info Bar -->
    <div class="top-bar py-2 d-none d-lg-block">
        <div class="container-fluid px-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex gap-4">
                        <span class="small text-muted"><i class="fas fa-envelope text-primary me-2"></i>hello@umakantdev.com</span>
                        <span class="small text-muted"><i class="fas fa-phone text-primary me-2"></i>+91 981 051 8321</span>
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    <div class="social-links d-flex justify-content-end gap-3">
                        <a href="#" class="text-muted small"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-muted small"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-muted small"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-muted small"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg sticky-top glass-card mx-3 mt-2 px-4" data-aos="fade-down">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="/">
                <span class="gradient-text">UMAKANT</span>.DEV
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link px-3 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Services</a>
                        <ul class="dropdown-menu glass-card">
                            <li><a class="dropdown-item" href="{{ route('services') }}">All Services</a></li>
                            <li><hr class="dropdown-divider border-white border-opacity-10"></li>
                            <li><a class="dropdown-item" href="#">Web Designing</a></li>
                            <li><a class="dropdown-item" href="#">App Development</a></li>
                            <li><a class="dropdown-item" href="#">SEO Services</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link px-3 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Our Work</a>
                        <ul class="dropdown-menu glass-card">
                            <li><a class="dropdown-item" href="{{ route('portfolio') }}">Portfolio</a></li>
                            <li><a class="dropdown-item" href="#">Case Studies</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link px-3 dropdown-toggle {{ request()->routeIs('packages') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown">Packages</a>
                        <ul class="dropdown-menu glass-card">
                            <li><a class="dropdown-item" href="{{ route('packages') }}">SEO Packages</a></li>
                            <li><a class="dropdown-item" href="{{ route('packages') }}">Website Packages</a></li>
                            <li><a class="dropdown-item" href="{{ route('packages') }}">Social Media</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ request()->routeIs('blog') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center ms-lg-3">
                    <a href="tel:+919810518321" class="text-white text-decoration-none d-none d-xl-block me-3 fw-bold">
                        <i class="fas fa-phone-volume text-primary me-2"></i>+91 981 051 XXXX
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-premium px-4">Get a Quote</a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="mt-5 py-5 footer-premium mx-3 mb-3 px-3">
        <div class="container">
            <div class="row g-4 align-items-center mb-4">
                <div class="col-lg-12 text-center mb-4">
                    <a class="navbar-brand fw-bold d-inline-block fs-2" href="/">
                        <span class="gradient-text">UMAKANT</span>.DEV
                    </a>
                </div>
            </div>
            <div class="row g-4 mb-5">
                <!-- Services Column -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="fw-bold mb-4 text-white text-uppercase small tracking-widest">Our Services</h5>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="{{ route('services') }}"><i class="fas fa-chevron-right small me-2 opacity-50"></i>Web Designing</a></li>
                        <li class="mb-2"><a href="{{ route('services') }}"><i class="fas fa-chevron-right small me-2 opacity-50"></i>Web Development</a></li>
                        <li class="mb-2"><a href="{{ route('services') }}"><i class="fas fa-chevron-right small me-2 opacity-50"></i>Mobile App Development</a></li>
                        <li class="mb-2"><a href="{{ route('packages') }}"><i class="fas fa-chevron-right small me-2 opacity-50"></i>SEO & SMO Services</a></li>
                        <li class="mb-2"><a href="{{ route('packages') }}"><i class="fas fa-chevron-right small me-2 opacity-50"></i>Digital Marketing</a></li>
                        <li class="mb-2"><a href="#"><i class="fas fa-chevron-right small me-2 opacity-50"></i>Branding & Logo Design</a></li>
                    </ul>
                </div>

                <!-- Useful Links Column -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="fw-bold mb-4 text-white text-uppercase small tracking-widest">Useful Links</h5>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="{{ route('about') }}"><i class="fas fa-chevron-right small me-2 opacity-50"></i>About ThinkBiz</a></li>
                        <li class="mb-2"><a href="{{ route('portfolio') }}"><i class="fas fa-chevron-right small me-2 opacity-50"></i>Our Portfolio</a></li>
                        <li class="mb-2"><a href="{{ route('packages') }}"><i class="fas fa-chevron-right small me-2 opacity-50"></i>SEO Packages</a></li>
                        <li class="mb-2"><a href="#"><i class="fas fa-chevron-right small me-2 opacity-50"></i>Website Maintenance</a></li>
                        <li class="mb-2"><a href="{{ route('contact') }}"><i class="fas fa-chevron-right small me-2 opacity-50"></i>Contact Us</a></li>
                    </ul>
                </div>

                <!-- Other Links Column -->
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                    <h5 class="fw-bold mb-4 text-white text-uppercase small tracking-widest">Support</h5>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="#"><i class="fas fa-chevron-right small me-2 opacity-50"></i>Testimonials</a></li>
                        <li class="mb-2"><a href="{{ route('blog') }}"><i class="fas fa-chevron-right small me-2 opacity-50"></i>SEO Articles</a></li>
                        <li class="mb-2"><a href="#"><i class="fas fa-chevron-right small me-2 opacity-50"></i>Privacy Policy</a></li>
                        <li class="mb-2"><a href="#"><i class="fas fa-chevron-right small me-2 opacity-50"></i>Terms of Service</a></li>
                    </ul>
                </div>

                <!-- Branding & Trust Column -->
                <div class="col-lg-4 col-md-6 text-lg-end">
                    <p class="text-muted small mb-4">
                        We are a full-service digital agency delivering expert SEO, award-winning design, and high-performance development to grow your business online.
                    </p>
                    <div class="d-flex gap-3 justify-content-lg-end mb-4">
                        <a href="#" class="btn btn-outline-light rounded-circle p-0" style="width: 35px; height: 35px; line-height: 33px; text-align: center;"><i class="fab fa-facebook-f small"></i></a>
                        <a href="#" class="btn btn-outline-light rounded-circle p-0" style="width: 35px; height: 35px; line-height: 33px; text-align: center;"><i class="fab fa-twitter small"></i></a>
                        <a href="#" class="btn btn-outline-light rounded-circle p-0" style="width: 35px; height: 35px; line-height: 33px; text-align: center;"><i class="fab fa-linkedin-in small"></i></a>
                        <a href="#" class="btn btn-outline-light rounded-circle p-0" style="width: 35px; height: 35px; line-height: 33px; text-align: center;"><i class="fab fa-google small"></i></a>
                    </div>
                    <div class="d-flex gap-2 justify-content-lg-end">
                        <div class="glass-card px-3 py-2 border-0 bg-white bg-opacity-10 d-flex align-items-center gap-2">
                            <i class="fab fa-google text-warning"></i>
                            <div class="text-start">
                                <p class="mb-0 fw-bold x-small text-white" style="font-size: 10px; line-height: 1;">Google Ads</p>
                                <span class="text-muted" style="font-size: 8px;">CERTIFIED</span>
                            </div>
                        </div>
                        <div class="glass-card px-3 py-2 border-0 bg-white bg-opacity-10 d-flex align-items-center gap-2">
                            <i class="fas fa-shield-alt text-primary"></i>
                            <div class="text-start">
                                <p class="mb-0 fw-bold x-small text-white" style="font-size: 10px; line-height: 1;">Secured By</p>
                                <span class="text-muted" style="font-size: 8px;">SSL ENCRYPTED</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Bar -->
        <div class="container border-top border-white border-opacity-10 pt-4 mt-2">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="text-muted small mb-0">&copy; {{ date('Y') }} ThinkBiz | Umakant Dev. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                    <a href="#" class="text-muted small text-decoration-none mx-2">Privacy Policy</a>
                    <a href="#" class="text-muted small text-decoration-none mx-2">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Floating Audit Sidebar -->
    <div class="audit-sidebar d-none d-md-block" style="position: fixed; right: -280px; top: 50%; transform: translateY(-50%); z-index: 9999; width: 280px; transition: right 0.5s ease;">
        <div class="audit-trigger" style="position: absolute; left: -45px; top: 50%; transform: translateY(-50%); background: linear-gradient(135deg, #6366f1, #ec4899); color: white; padding: 20px 10px; border-radius: 12px 0 0 12px; font-weight: 700; writing-mode: vertical-rl; cursor: pointer; white-space: nowrap;">
            <i class="fas fa-search-dollar mb-2"></i> REQUEST FREE AUDIT
        </div>
        <div class="audit-content">
            <h6 class="fw-bold text-white">Free Website Audit</h6>
            <form>
                <input type="text" class="form-control mb-2" placeholder="Your Website URL" required>
                <input type="email" class="form-control mb-2" placeholder="Email Address" required>
                <button type="submit" class="btn btn-premium w-100 py-3">Send Request</button>
            </form>
        </div>
    </div>

    <script>
        // Simple JS to handle the hover if CSS transition is tricky
        const sidebar = document.querySelector('.audit-sidebar');
        if(sidebar) {
            sidebar.addEventListener('mouseenter', () => sidebar.style.right = '0');
            sidebar.addEventListener('mouseleave', () => sidebar.style.right = '-280px');
        }
    </script>

</body>
</html>
