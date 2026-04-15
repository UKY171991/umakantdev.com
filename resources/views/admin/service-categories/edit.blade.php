@extends('admin.layout')

@section('title', 'Edit Service Category | Admin')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Edit Service Category</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.service-categories.index') }}">Service Categories</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Category Information</h3>
            </div>
            <form action="{{ route('admin.service-categories.update', $serviceCategory) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Category Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                               id="name" name="name" value="{{ old('name', $serviceCategory->name) }}" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                        <small class="form-text text-muted">Current slug: {{ $serviceCategory->slug }}</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                  id="description" name="description" rows="4">{{ old('description', $serviceCategory->description) }}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="icon">Icon Class</label>
                        <input type="text" class="form-control @error('icon') is-invalid @enderror" 
                               id="icon" name="icon" value="{{ old('icon', $serviceCategory->icon) }}" 
                               placeholder="fas fa-code">
                        @error('icon')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                        <small class="form-text text-muted">Font Awesome icon class (e.g., fas fa-code)</small>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sort_order">Sort Order</label>
                                <input type="number" class="form-control @error('sort_order') is-invalid @enderror" 
                                       id="sort_order" name="sort_order" value="{{ old('sort_order', $serviceCategory->sort_order) }}" min="0">
                                @error('sort_order')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                                <small class="form-text text-muted">Lower numbers appear first</small>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $serviceCategory->is_active) ? 'checked' : '' }}>
                                    <label for="is_active">Active</label>
                                </div>
                                <small class="form-text text-muted">Inactive categories won't be shown on the website</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Category
                    </button>
                    <a href="{{ route('admin.service-categories.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Category Stats</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label><strong>Total Services:</strong></label>
                    <p>{{ $serviceCategory->services()->count() }}</p>
                </div>
                
                <div class="form-group">
                    <label><strong>Created:</strong></label>
                    <p>{{ $serviceCategory->created_at->format('M j, Y g:i A') }}</p>
                </div>
                
                <div class="form-group">
                    <label><strong>Last Updated:</strong></label>
                    <p>{{ $serviceCategory->updated_at->format('M j, Y g:i A') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
