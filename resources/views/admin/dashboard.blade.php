@extends('admin.layout')

@section('title', 'Admin Dashboard | Umakant Dev')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">Admin</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>12</h3>
                <p>Total Blog Posts</p>
            </div>
            <div class="icon"><i class="fas fa-newspaper"></i></div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>1,240</h3>
                <p>Monthly Visitors</p>
            </div>
            <div class="icon"><i class="fas fa-chart-line"></i></div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>45</h3>
                <p>New Enquiries</p>
            </div>
            <div class="icon"><i class="fas fa-envelope"></i></div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ PHP_VERSION }}</h3>
                <p>PHP Version</p>
            </div>
            <div class="icon"><i class="fas fa-server"></i></div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Recent Blog Posts</h3>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped mb-0">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Top 10 Web Development Trends</td>
                    <td><span class="badge bg-primary">Tech</span></td>
                    <td>April 12, 2026</td>
                    <td><span class="badge bg-success">Published</span></td>
                </tr>
                <tr>
                    <td>Maximizing ROI with SEO</td>
                    <td><span class="badge bg-secondary">Marketing</span></td>
                    <td>April 10, 2026</td>
                    <td><span class="badge bg-success">Published</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
