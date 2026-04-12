@extends('layouts.app')

@section('title', 'Admin Dashboard | Umakant Dev')

@section('content')
<div class="breadcrumb-section py-5 bg-dark bg-opacity-25 mb-4">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-5 fw-bold text-white mb-0">Admin <span class="gradient-text">Dashboard</span></h1>
                <p class="text-muted mb-0">Welcome back, Administrator.</p>
            </div>
            <div class="col-md-6 text-md-end mt-3 mt-md-0">
                <a href="/" class="btn btn-outline-light rounded-pill px-4"><i class="fas fa-external-link-alt me-2"></i>View Site</a>
                <a href="#" class="btn btn-premium px-4 ms-2"><i class="fas fa-plus me-2"></i>New Post</a>
            </div>
        </div>
    </div>
</div>

<div class="container pb-5">
    <div class="row g-4">
        <!-- Sidebar / Stats Sidebar -->
        <div class="col-lg-3">
            <div class="glass-card p-4 mb-4">
                <h6 class="fw-bold text-white text-uppercase small mb-4">Management</h6>
                <ul class="nav flex-column gap-2">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white bg-primary bg-opacity-20 rounded-3 px-3 py-2"><i class="fas fa-tachometer-alt me-3"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-muted hover-text-white px-3 py-2"><i class="fas fa-newspaper me-3"></i>Manage Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-muted hover-text-white px-3 py-2"><i class="fas fa-briefcase me-3"></i>Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-muted hover-text-white px-3 py-2"><i class="fas fa-users me-3"></i>Users</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-muted hover-text-white px-3 py-2"><i class="fas fa-cog me-3"></i>Settings</a>
                    </li>
                </ul>
            </div>

            <div class="glass-card p-4 border-bottom-primary border-4">
                <h6 class="fw-bold text-white text-uppercase small mb-3">System Info</h6>
                <div class="mb-2 d-flex justify-content-between">
                    <span class="text-muted small">PHP Version:</span>
                    <span class="text-white small fw-bold">{{ PHP_VERSION }}</span>
                </div>
                <div class="mb-0 d-flex justify-content-between">
                    <span class="text-muted small">Laravel:</span>
                    <span class="text-white small fw-bold">12.x</span>
                </div>
            </div>
        </div>

        <!-- Main Stats & Content -->
        <div class="col-lg-9">
            <div class="row g-4 mb-4">
                <div class="col-md-4">
                    <div class="glass-card p-4 text-center">
                        <div class="bg-primary bg-opacity-10 p-3 rounded-circle d-inline-block mb-3">
                            <i class="fas fa-file-alt text-primary fs-3"></i>
                        </div>
                        <h3 class="fw-bold text-white mb-0">12</h3>
                        <p class="text-muted small mb-0">Total Blog Posts</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="glass-card p-4 text-center">
                        <div class="bg-secondary bg-opacity-10 p-3 rounded-circle d-inline-block mb-3">
                            <i class="fas fa-chart-line text-secondary fs-3"></i>
                        </div>
                        <h3 class="fw-bold text-white mb-0">1,240</h3>
                        <p class="text-muted small mb-0">Monthly Visitors</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="glass-card p-4 text-center">
                        <div class="bg-info bg-opacity-10 p-3 rounded-circle d-inline-block mb-3">
                            <i class="fas fa-envelope text-info fs-3"></i>
                        </div>
                        <h3 class="fw-bold text-white mb-0">45</h3>
                        <p class="text-muted small mb-0">New Enquiries</p>
                    </div>
                </div>
            </div>

            <!-- Recent Activity Table -->
            <div class="glass-card overflow-hidden">
                <div class="p-4 border-bottom border-white border-opacity-10 d-flex justify-content-between align-items-center">
                    <h5 class="fw-bold text-white mb-0">Recent Blog Posts</h5>
                    <button class="btn btn-sm btn-outline-light rounded-pill px-3">View All</button>
                </div>
                <div class="table-responsive">
                    <table class="table table-dark table-hover mb-0">
                        <thead class="bg-white bg-opacity-5">
                            <tr>
                                <th class="border-0 text-muted small ps-4">Title</th>
                                <th class="border-0 text-muted small">Category</th>
                                <th class="border-0 text-muted small">Date</th>
                                <th class="border-0 text-muted small">Status</th>
                                <th class="border-0 text-muted small pe-4 text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4 py-3">Top 10 Web Development Trends</td>
                                <td><span class="badge bg-primary bg-opacity-20 text-primary">Tech</span></td>
                                <td>April 12, 2026</td>
                                <td><span class="text-success small"><i class="fas fa-circle me-1" style="font-size: 8px;"></i> Published</span></td>
                                <td class="pe-4 text-end">
                                    <button class="btn btn-sm btn-link text-muted"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-link text-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4 py-3">Maximizing ROI with SEO</td>
                                <td><span class="badge bg-secondary bg-opacity-20 text-secondary">Marketing</span></td>
                                <td>April 10, 2026</td>
                                <td><span class="text-success small"><i class="fas fa-circle me-1" style="font-size: 8px;"></i> Published</span></td>
                                <td class="pe-4 text-end">
                                    <button class="btn btn-sm btn-link text-muted"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-link text-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-text-white:hover { color: white !important; }
    .table-dark { --bs-table-bg: transparent; }
    .table-hover tbody tr:hover { background-color: rgba(255,255,255,0.03); }
</style>
@endsection
