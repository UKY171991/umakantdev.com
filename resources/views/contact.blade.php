@extends('layouts.app')

@section('title', 'Contact Us | Start Your Project Today')

@section('content')
<div class="breadcrumb-section py-5 bg-dark bg-opacity-25 mb-5">
    <div class="container text-center py-4">
        <h1 class="display-4 fw-bold text-white mb-2">Contact <span class="gradient-text">Us</span></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/" class="text-primary text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-muted" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container py-5">
    <div class="text-center mb-5" data-aos="fade-down">
        <h6 class="text-primary fw-bold text-uppercase mb-3">Get In Touch</h6>
        <h2 class="display-5 fw-bold mb-4 text-white">Let's Talk <span class="gradient-text">Business</span></h2>
        <p class="text-muted mx-auto" style="max-width: 700px;">Ready to elevate your brand? Fill out the form below and we'll get back to you within 24 hours.</p>
    </div>

    <div class="row g-5">
        <div class="col-lg-5">
            <div class="glass-card p-5 mb-4">
                <h4 class="fw-bold mb-4">Contact Information</h4>
                <div class="d-flex gap-3 mb-4">
                    <div class="bg-primary bg-opacity-10 p-3 rounded-circle" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-envelope text-primary"></i>
                    </div>
                    <div>
                        <p class="mb-0 fw-bold">Email Us</p>
                        <p class="text-muted small">{{ $siteSettings['contact_email'] ?? 'hello@umakantdev.com' }}</p>
                    </div>
                </div>
                <div class="d-flex gap-3 mb-4">
                    <div class="bg-secondary bg-opacity-10 p-3 rounded-circle" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-phone text-secondary"></i>
                    </div>
                    <div>
                        <p class="mb-0 fw-bold">Call Us</p>
                        <p class="text-muted small">{{ $siteSettings['contact_phone'] ?? '+91 981 051 8321' }}</p>
                    </div>
                </div>
                <div class="d-flex gap-3">
                    <div class="bg-info bg-opacity-10 p-3 rounded-circle" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-map-marker-alt text-info"></i>
                    </div>
                    <div>
                        <p class="mb-0 fw-bold">Location</p>
                        <p class="text-muted small">{{ $siteSettings['contact_address'] ?? 'San Francisco, CA (Remote Global)' }}</p>
                    </div>
                </div>
            </div>

            @if(isset($siteSettings['social_facebook']) || isset($siteSettings['social_twitter']) || isset($siteSettings['social_instagram']) || isset($siteSettings['social_linkedin']))
            <div class="glass-card p-5">
                <h4 class="fw-bold mb-3">Follow Us</h4>
                <div class="d-flex gap-3">
                    @if(isset($siteSettings['social_facebook']))
                        <a href="{{ $siteSettings['social_facebook'] }}" target="_blank" class="btn btn-outline-light rounded-circle" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;"><i class="fab fa-facebook-f"></i></a>
                    @endif
                    @if(isset($siteSettings['social_twitter']))
                        <a href="{{ $siteSettings['social_twitter'] }}" target="_blank" class="btn btn-outline-light rounded-circle" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;"><i class="fab fa-twitter"></i></a>
                    @endif
                    @if(isset($siteSettings['social_instagram']))
                        <a href="{{ $siteSettings['social_instagram'] }}" target="_blank" class="btn btn-outline-light rounded-circle" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;"><i class="fab fa-instagram"></i></a>
                    @endif
                    @if(isset($siteSettings['social_linkedin']))
                        <a href="{{ $siteSettings['social_linkedin'] }}" target="_blank" class="btn btn-outline-light rounded-circle" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;"><i class="fab fa-linkedin-in"></i></a>
                    @endif
                </div>
            </div>
            @endif
        </div>

        <div class="col-lg-7">
            <div class="glass-card p-5">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Oops!</strong> There were some problems with your input.<br><br>
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label text-muted small">First Name</label>
                            <input type="text" name="first_name" class="form-control p-3 @error('first_name') is-invalid @enderror" placeholder="John" value="{{ old('first_name') }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-muted small">Last Name</label>
                            <input type="text" name="last_name" class="form-control p-3 @error('last_name') is-invalid @enderror" placeholder="Doe" value="{{ old('last_name') }}" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-muted small">Email Address</label>
                            <input type="email" name="email" class="form-control p-3 @error('email') is-invalid @enderror" placeholder="john@example.com" value="{{ old('email') }}" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-muted small">Project Type</label>
                            <select name="project_type" class="form-select p-3 @error('project_type') is-invalid @enderror" required>
                                <option value="" disabled {{ old('project_type') == '' ? 'selected' : '' }}>Select a project type</option>
                                <option value="Web Development" {{ old('project_type') == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                                <option value="UI/UX Design" {{ old('project_type') == 'UI/UX Design' ? 'selected' : '' }}>UI/UX Design</option>
                                <option value="SEO Strategy" {{ old('project_type') == 'SEO Strategy' ? 'selected' : '' }}>SEO Strategy</option>
                                <option value="Full Package" {{ old('project_type') == 'Full Package' ? 'selected' : '' }}>Full Package</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-muted small">Message</label>
                            <textarea name="message" class="form-control p-3 @error('message') is-invalid @enderror" rows="5" placeholder="Tell us about your project..." required>{{ old('message') }}</textarea>
                        </div>
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-premium w-100 py-3">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
