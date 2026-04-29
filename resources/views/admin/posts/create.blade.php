@extends('admin.layout')

@section('title', 'Add New Post | Admin')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Create Post</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Posts</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-9">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Post Title</label>
                        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
                        @error('title') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="slug">URL Slug</label>
                        <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug') }}" required>
                        <small class="text-muted">The URL will be: {{ url('/blog') }}/<span id="slug-text">{{ old('slug', 'post-slug') }}</span></small>
                        @error('slug') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="excerpt">Excerpt / Summary</label>
                        <textarea name="excerpt" id="excerpt" rows="2" class="form-control">{{ old('excerpt') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="content">Post Content</label>
                        <textarea name="content" id="content" class="form-control summernote" style="min-height: 400px">{{ old('content') }}</textarea>
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
                        <input type="checkbox" class="custom-control-input" id="is_published" name="is_published" value="1" checked>
                        <label class="custom-control-label" for="is_published">Published</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Save Post</button>
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-default btn-block">Cancel</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Featured Image</h3>
                </div>
                <div class="card-body">
                    <div class="text-center mb-3">
                        <img id="preview" src="https://via.placeholder.com/400x250?text=No+Image" class="img-fluid rounded border">
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="featured_image" name="featured_image" onchange="previewFile()">
                            <label class="custom-file-label" for="featured_image">Choose image</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@section('scripts')
<script>
    $(function () {
        // Simple slug generator
        $('#title').on('input', function() {
            let slug = $(this).val().toLowerCase().replace(/[^a-z0-9]/g, '-').replace(/-+/g, '-').replace(/^-|-$/g, '');
            $('#slug').val(slug);
            $('#slug-text').text(slug);
        });

        $('#slug').on('input', function() {
            $('#slug-text').text($(this).val());
        });
    });

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
