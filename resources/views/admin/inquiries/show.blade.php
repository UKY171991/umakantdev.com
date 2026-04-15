@extends('admin.layout')

@section('title', 'Inquiry Details | Admin')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Inquiry Details</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.inquiries.index') }}">Inquiries</a></li>
            <li class="breadcrumb-item active">Details</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Inquiry Information</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label><strong>First Name:</strong></label>
                            <p>{{ $inquiry->first_name }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label><strong>Last Name:</strong></label>
                            <p>{{ $inquiry->last_name }}</p>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label><strong>Email Address:</strong></label>
                    <p><a href="mailto:{{ $inquiry->email }}">{{ $inquiry->email }}</a></p>
                </div>
                
                <div class="form-group">
                    <label><strong>Project Type:</strong></label>
                    <p><span class="badge badge-info">{{ $inquiry->project_type }}</span></p>
                </div>
                
                <div class="form-group">
                    <label><strong>Message:</strong></label>
                    <div class="bg-light p-3 rounded" style="white-space: pre-wrap;">{{ $inquiry->message }}</div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label><strong>Submitted:</strong></label>
                            <p>{{ $inquiry->created_at->format('F j, Y \a\t g:i A') }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label><strong>Last Updated:</strong></label>
                            <p>{{ $inquiry->updated_at->format('F j, Y \a\t g:i A') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Quick Actions</h3>
            </div>
            <div class="card-body">
                <a href="mailto:{{ $inquiry->email }}" class="btn btn-primary btn-block mb-2">
                    <i class="fas fa-reply"></i> Reply via Email
                </a>
                
                <a href="{{ route('admin.inquiries.index') }}" class="btn btn-secondary btn-block mb-2">
                    <i class="fas fa-list"></i> Back to Inquiries
                </a>
                
                <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-block" onclick="return confirm('Are you sure you want to delete this inquiry?')">
                        <i class="fas fa-trash"></i> Delete Inquiry
                    </button>
                </form>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Contact Info</h3>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <i class="fas fa-user fa-3x text-muted mb-3"></i>
                    <h5>{{ $inquiry->first_name }} {{ $inquiry->last_name }}</h5>
                    <p class="text-muted">{{ $inquiry->project_type }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
