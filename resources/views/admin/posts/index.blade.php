@extends('admin.layout')

@section('title', 'Manage Blog Posts | Admin')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Blog Posts</h1>
    </div>
    <div class="col-sm-6 text-right">
        <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
            <i class="fas fa-plus mr-1"></i> Add New Post
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body p-0">
        <table class="table table-hover table-striped mb-0">
            <thead>
                <tr>
                    <th style="width: 80px">Image</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th style="width: 150px" class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                    <tr>
                        <td>
                            @if($post->featured_image)
                                <img src="{{ asset('storage/' . $post->featured_image) }}" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;">
                            @else
                                <div class="bg-light text-center border rounded" style="width: 50px; height: 50px; line-height: 50px;">
                                    <i class="fas fa-image text-muted"></i>
                                </div>
                            @endif
                        </td>
                        <td>
                            <div class="font-weight-bold">{{ $post->title }}</div>
                            <small class="text-muted">{{ Str::limit($post->excerpt, 60) }}</small>
                        </td>
                        <td>
                            @if($post->is_published)
                                <span class="badge badge-success">Published</span>
                            @else
                                <span class="badge badge-warning">Draft</span>
                            @endif
                        </td>
                        <td>{{ $post->created_at->format('M d, Y') }}</td>
                        <td class="text-right">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-info" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-muted">
                            No posts found. <a href="{{ route('admin.posts.create') }}">Create your first post!</a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($posts->hasPages())
        <div class="card-footer clearfix">
            {{ $posts->links() }}
        </div>
    @endif
</div>
@endsection
