@extends('layouts.app')

@section('title', 'Contact Us | Start Your Project Today')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5 mt-5">
        <h6 class="text-primary fw-bold text-uppercase mb-3">Get In Touch</h6>
        <h1 class="display-4 fw-bold mb-4">Let's Talk <span class="gradient-text">Business</span></h1>
        <p class="text-muted mx-auto" style="max-width: 600px;">Ready to elevate your brand? Fill out the form below and we'll get back to you within 24 hours.</p>
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
                        <p class="text-muted small">hello@umakantdev.com</p>
                    </div>
                </div>
                <div class="d-flex gap-3 mb-4">
                    <div class="bg-secondary bg-opacity-10 p-3 rounded-circle" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-phone text-secondary"></i>
                    </div>
                    <div>
                        <p class="mb-0 fw-bold">Call Us</p>
                        <p class="text-muted small">+1 (555) 123-4567</p>
                    </div>
                </div>
                <div class="d-flex gap-3">
                    <div class="bg-info bg-opacity-10 p-3 rounded-circle" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-map-marker-alt text-info"></i>
                    </div>
                    <div>
                        <p class="mb-0 fw-bold">Location</p>
                        <p class="text-muted small">San Francisco, CA (Remote Global)</p>
                    </div>
                </div>
            </div>

            <div class="glass-card p-5">
                <h4 class="fw-bold mb-3">Follow Us</h4>
                <div class="d-flex gap-3">
                    <a href="#" class="btn btn-outline-light rounded-circle" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-outline-light rounded-circle" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-outline-light rounded-circle" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="glass-card p-5">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label text-muted small">First Name</label>
                            <input type="text" class="form-control bg-dark text-white border-0 p-3" style="background: rgba(255,255,255,0.05) !important;">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-muted small">Last Name</label>
                            <input type="text" class="form-control bg-dark text-white border-0 p-3" style="background: rgba(255,255,255,0.05) !important;">
                        </div>
                        <div class="col-12">
                            <label class="form-label text-muted small">Email Address</label>
                            <input type="email" class="form-control bg-dark text-white border-0 p-3" style="background: rgba(255,255,255,0.05) !important;">
                        </div>
                        <div class="col-12">
                            <label class="form-label text-muted small">Project Type</label>
                            <select class="form-select bg-dark text-white border-0 p-3" style="background: rgba(255,255,255,0.05) !important;">
                                <option selected>Web Development</option>
                                <option value="1">UI/UX Design</option>
                                <option value="2">SEO Audit</option>
                                <option value="3">Full Package</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-muted small">Message</label>
                            <textarea class="form-control bg-dark text-white border-0 p-3" rows="5" style="background: rgba(255,255,255,0.05) !important;"></textarea>
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
