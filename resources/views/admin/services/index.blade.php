@extends('admin.layout')

@section('title', 'Services | Admin')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Services</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
            <li class="breadcrumb-item active">Services</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
@if(session('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ session('success') }}
    </div>
@endif

<div class="card">
    <div class="card-header">
        <h3 class="card-title">All Services</h3>
        <div class="card-tools">
            <a href="{{ route('admin.services.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Add Service
            </a>
        </div>
    </div>
    <div class="card-body p-0">
        @if($services->count() > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Featured</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                        <tr>
                            <td>
                                <strong>{{ $service->title }}</strong>
                                <br>
                                <small class="text-muted">{{ $service->slug }}</small>
                            </td>
                            <td>
                                @if($service->category)
                                    <span class="badge badge-info">{{ $service->category->name }}</span>
                                @else
                                    <span class="badge badge-warning">No Category</span>
                                @endif
                            </td>
                            <td>
                                @if($service->price)
                                    <span class="badge badge-success">{{ $service->formatted_price }}</span>
                                    <br>
                                    <small class="text-muted">{{ $service->price_type }}</small>
                                @else
                                    <span class="text-muted">Contact</span>
                                @endif
                            </td>
                            <td>
                                @if($service->is_featured)
                                    <i class="fas fa-star text-warning"></i>
                                @else
                                    <i class="fas fa-star text-muted"></i>
                                @endif
                            </td>
                            <td>
                                @if($service->is_active)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-secondary">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.services.destroy', $service) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="text-center py-5">
                <i class="fas fa-cogs fa-3x text-muted mb-3"></i>
                <h4 class="text-muted">No services found</h4>
                <p class="text-muted">Create your first service to get started.</p>
                <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Create Service
                </a>
            </div>
        @endif
    </div>
    @if($services->hasPages())
        <div class="card-footer">
            {{ $services->links() }}
        </div>
    @endif
</div>
@endsection
