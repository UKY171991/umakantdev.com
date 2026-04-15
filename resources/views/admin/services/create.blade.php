@extends('admin.layout')

@section('title', 'Create Service | Admin')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Create Service</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.services.index') }}">Services</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Service Information</h3>
            </div>
            <form action="{{ route('admin.services.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Service Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" 
                               id="title" name="title" value="{{ old('title') }}" required>
                        @error('title')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                        <small class="form-text text-muted">The title will be automatically converted to a URL-friendly slug.</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="service_category_id">Category <span class="text-danger">*</span></label>
                        <select class="form-control @error('service_category_id') is-invalid @enderror" 
                                id="service_category_id" name="service_category_id" required>
                            <option value="">Select a category</option>
                            @foreach($categories as $id => $name)
                                <option value="{{ $id }}" {{ old('service_category_id') == $id ? 'selected' : '' }}>
                                    {{ $name }}
                                </option>
                            @endforeach
                        </select>
                        @error('service_category_id')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Short Description <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                  id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                        <small class="form-text text-muted">Brief description for listings and previews</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="content">Full Content</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" 
                                  id="content" name="content" rows="8">{{ old('content') }}</textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                        <small class="form-text text-muted">Detailed description of the service</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="image">Image URL</label>
                        <input type="text" class="form-control @error('image') is-invalid @enderror" 
                               id="image" name="image" value="{{ old('image') }}" 
                               placeholder="https://example.com/image.jpg">
                        @error('image')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                        <small class="form-text text-muted">URL to the service image</small>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror" 
                                       id="price" name="price" value="{{ old('price') }}" step="0.01" min="0">
                                @error('price')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                                <small class="form-text text-muted">Leave empty for "Contact for pricing"</small>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="price_type">Price Type <span class="text-danger">*</span></label>
                                <select class="form-control @error('price_type') is-invalid @enderror" 
                                        id="price_type" name="price_type" required>
                                    <option value="fixed" {{ old('price_type') == 'fixed' ? 'selected' : '' }}>Fixed Price</option>
                                    <option value="hourly" {{ old('price_type') == 'hourly' ? 'selected' : '' }}>Hourly Rate</option>
                                    <option value="project" {{ old('price_type') == 'project' ? 'selected' : '' }}>Project Based</option>
                                </select>
                                @error('price_type')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="sort_order">Sort Order</label>
                                <input type="number" class="form-control @error('sort_order') is-invalid @enderror" 
                                       id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}" min="0">
                                @error('sort_order')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                                <small class="form-text text-muted">Lower numbers appear first</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="icheck-warning">
                                    <input type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }}>
                                    <label for="is_featured">Featured Service</label>
                                </div>
                                <small class="form-text text-muted">Featured services will be highlighted on the website</small>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active') ? 'checked' : '' }}>
                                    <label for="is_active">Active</label>
                                </div>
                                <small class="form-text text-muted">Inactive services won't be shown on the website</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Create Service
                    </button>
                    <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Help</h3>
            </div>
            <div class="card-body">
                <h6>Service Title</h6>
                <p class="text-muted">The name of your service that will be displayed to visitors.</p>
                
                <h6>Category</h6>
                <p class="text-muted">Group related services together for better organization.</p>
                
                <h6>Descriptions</h6>
                <p class="text-muted">Short description appears in listings, full content on the service details page.</p>
                
                <h6>Pricing</h6>
                <p class="text-muted">Set your pricing structure. Leave price empty if you want customers to contact you for quotes.</p>
                
                <h6>Featured</h6>
                <p class="text-muted">Featured services get special highlighting on your website.</p>
            </div>
        </div>
    </div>
</div>
@endsection
