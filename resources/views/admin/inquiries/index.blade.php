@extends('admin.layout')

@section('title', 'Contact Inquiries | Admin')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Contact Inquiries</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
            <li class="breadcrumb-item active">Inquiries</li>
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
        <h3 class="card-title">All Contact Inquiries</h3>
        <div class="card-tools">
            <span class="badge badge-primary">{{ $inquiries->total() }} Total</span>
        </div>
    </div>
    <div class="card-body p-0">
        @if($inquiries->count() > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Project Type</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inquiries as $inquiry)
                        <tr>
                            <td>{{ $inquiry->first_name }} {{ $inquiry->last_name }}</td>
                            <td>{{ $inquiry->email }}</td>
                            <td><span class="badge badge-info">{{ $inquiry->project_type }}</span></td>
                            <td>{{ $inquiry->created_at->format('M j, Y g:i A') }}</td>
                            <td>
                                <a href="{{ route('admin.inquiries.show', $inquiry) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i> View
                                </a>
                                <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST" style="display: inline;">
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
                <i class="fas fa-envelope fa-3x text-muted mb-3"></i>
                <h4 class="text-muted">No inquiries found</h4>
                <p class="text-muted">Contact form submissions will appear here.</p>
            </div>
        @endif
    </div>
    @if($inquiries->hasPages())
        <div class="card-footer">
            {{ $inquiries->links() }}
        </div>
    @endif
</div>
@endsection
