@extends('layouts.app')

@section('title', 'About Us | The Team Behind the Tech')

@section('content')
<div class="breadcrumb-section py-5 bg-dark bg-opacity-25 mb-5">
    <div class="container text-center py-4">
        <h1 class="display-4 fw-bold text-white mb-2">About <span class="gradient-text">ThinkBiz</span></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/" class="text-primary text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-muted" aria-current="page">About Us</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container py-5">
    <div class="row align-items-center mb-5 pb-5" data-aos="fade-up">
        <div class="col-lg-6 mb-5 mb-lg-0 text-center">
            <div class="glass-card p-2 d-inline-block">
                <img src="{{ asset('images/about-hero.png') }}" class="img-fluid rounded-4 shadow-lg" alt="About Us" onerror="this.src='https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80'">
            </div>
        </div>
        <div class="col-lg-6 ps-lg-5">
            <h6 class="text-primary fw-bold text-uppercase mb-3">Who We Are</h6>
            <h2 class="display-5 fw-bold mb-4 text-white">We Solve Professional <br><span class="gradient-text">Digital Challenges</span></h2>
            <p class="lead text-muted mb-4">ThinkBiz is a full-service digital marketing agency dedicated to helping businesses grow online. We specialize in custom web development, SEO, and social media marketing.</p>
            <p class="text-muted mb-5">Our mission is to help our clients achieve their marketing goals by providing them with innovative and effective digital marketing solutions. We believe that every business is unique, and we tailor our services to meet the specific needs of each client.</p>
            
            <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-primary bg-opacity-20 p-3 rounded-circle">
                            <i class="fas fa-bullseye text-primary fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Our Mission</h5>
                            <p class="text-muted small mb-0">Empowering brands with cutting-edge tech.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-secondary bg-opacity-20 p-3 rounded-circle">
                            <i class="fas fa-eye text-secondary fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Our Vision</h5>
                            <p class="text-muted small mb-0">Global leadership in digital innovation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Impact Section -->
    <div class="row g-4 mb-5 pb-5" data-aos="fade-up">
        <div class="col-lg-3 col-md-6">
            <div class="glass-card p-4 text-center h-100 border-bottom-primary border-4">
                <h2 class="display-5 fw-bold gradient-text mb-2">500+</h2>
                <h6 class="text-white mb-0">Projects Delivered</h6>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="glass-card p-4 text-center h-100 border-bottom-secondary border-4">
                <h2 class="display-5 fw-bold gradient-text mb-2">200+</h2>
                <h6 class="text-white mb-0">Global Clients</h6>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="glass-card p-4 text-center h-100 border-bottom-accent border-4">
                <h2 class="display-5 fw-bold gradient-text mb-2">15+</h2>
                <h6 class="text-white mb-0">Years Experience</h6>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="glass-card p-4 text-center h-100 border-bottom-primary border-4">
                <h2 class="display-5 fw-bold gradient-text mb-2">99%</h2>
                <h6 class="text-white mb-0">Client Retention</h6>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="py-5" data-aos="fade-up">
        <div class="text-center mb-5">
            <h6 class="text-primary fw-bold text-uppercase mb-3">Questions?</h6>
            <h2 class="display-5 fw-bold mb-3 text-white">Frequently Asked <span class="gradient-text">Questions</span></h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion accordion-flush" id="faqAccordion">
                    <div class="accordion-item glass-card mb-3 border-0 rounded-4 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-transparent text-white fw-bold py-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                What services do you offer?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted py-4">
                                We offer a wide range of services including Web Design, App Development, SEO, SMO, Branding, and Digital Marketing strategies tailored to your business needs.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item glass-card mb-3 border-0 rounded-4 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-transparent text-white fw-bold py-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                How much do your services cost?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted py-4">
                                Pricing varies depending on the scope of the project. We offer fixed packages for SEO and Web Design, as well as custom quotes for more complex application development.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item glass-card mb-3 border-0 rounded-4 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed bg-transparent text-white fw-bold py-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Do you provide maintenance after launch?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted py-4">
                                Yes, we provide ongoing maintenance, staff training, and technical support to ensure your website or app performs flawlessly after it goes live.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
