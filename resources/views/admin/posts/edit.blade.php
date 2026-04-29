@extends('admin.layout')

@section('title', 'Edit Post | Admin')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Edit Post</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Posts</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-9">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Post Title</label>
                        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $post->title) }}" required>
                        @error('title') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="slug">URL Slug</label>
                        <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $post->slug) }}" required>
                        <small class="text-muted">The URL is: {{ url('/blog') }}/<span id="slug-text">{{ $post->slug }}</span></small>
                        @error('slug') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="excerpt">Excerpt / Summary</label>
                        <textarea name="excerpt" id="excerpt" rows="2" class="form-control">{{ old('excerpt', $post->excerpt) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="content">Post Content</label>
                        <textarea name="content" id="content" class="form-control summernote" style="min-height: 400px">{{ old('content', $post->content) }}</textarea>
                        @error('content') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Publishing</h3>
                </div>
                <div class="card-body">
                    <div class="form-group custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="is_published" name="is_published" value="1" {{ $post->is_published ? 'checked' : '' }}>
                        <label class="custom-control-label" for="is_published">Published</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Update Post</button>
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-default btn-block">Cancel</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Featured Image</h3>
                </div>
                <div class="card-body">
                    <div class="text-center mb-3">
                        <img id="preview" src="{{ $post->featured_image ? asset('storage/' . $post->featured_image) : 'https://via.placeholder.com/400x250?text=No+Image' }}" class="img-fluid rounded border">
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="featured_image" name="featured_image" onchange="previewFile()">
                            <label class="custom-file-label" for="featured_image">Change image</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@section('scripts')
<script>
    function previewFile() {
        const preview = document.querySelector('#preview');
        const file = document.querySelector('#featured_image').files[0];
        const reader = new FileReader();

        reader.addEventListener("load", function () {
            preview.src = reader.result;
        }, false);

        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection
@endsection
