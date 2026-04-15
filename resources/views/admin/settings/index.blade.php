@extends('admin.layout')

@section('title', 'Settings | Admin')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Settings</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
            <li class="breadcrumb-item active">Settings</li>
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

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">General Settings</h3>
            </div>
            <form action="{{ route('admin.settings.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="site_name">Site Name</label>
                        <input type="text" class="form-control" id="site_name" name="site_name" value="{{ $settings['site_name'] }}" required>
                        <small class="form-text text-muted">This is the name of your website.</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="site_email">Admin Email</label>
                        <input type="email" class="form-control" id="site_email" name="site_email" value="{{ $settings['site_email'] }}" required>
                        <small class="form-text text-muted">Administrative email address.</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="contact_email">Contact Email</label>
                        <input type="email" class="form-control" id="contact_email" name="contact_email" value="{{ $settings['contact_email'] }}" required>
                        <small class="form-text text-muted">Email displayed on contact page.</small>
                    </div>
                    
                    <hr>
                    
                    <div class="form-group">
                        <div class="icheck-primary">
                            <input type="checkbox" id="email_notifications" name="email_notifications" value="1" {{ $settings['email_notifications'] ? 'checked' : '' }}>
                            <label for="email_notifications">Enable Email Notifications</label>
                        </div>
                        <small class="form-text text-muted">Receive email notifications for new contact inquiries.</small>
                    </div>
                    
                    <div class="form-group">
                        <div class="icheck-danger">
                            <input type="checkbox" id="maintenance_mode" name="maintenance_mode" value="1" {{ $settings['maintenance_mode'] ? 'checked' : '' }}>
                            <label for="maintenance_mode">Maintenance Mode</label>
                        </div>
                        <small class="form-text text-muted">Put the site in maintenance mode (users will see a maintenance page).</small>
                    </div>
                </div>
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Save Settings
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">System Information</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label><strong>Laravel Version:</strong></label>
                    <p>{{ app()->version() }}</p>
                </div>
                
                <div class="form-group">
                    <label><strong>PHP Version:</strong></label>
                    <p>{{ PHP_VERSION }}</p>
                </div>
                
                <div class="form-group">
                    <label><strong>Environment:</strong></label>
                    <p><span class="badge badge-warning">{{ config('app.env') }}</span></p>
                </div>
                
                <div class="form-group">
                    <label><strong>Debug Mode:</strong></label>
                    <p>{{ config('app.debug') ? '<span class="badge badge-danger">ON</span>' : '<span class="badge badge-success">OFF</span>' }}</p>
                </div>
                
                <div class="form-group">
                    <label><strong>Timezone:</strong></label>
                    <p>{{ config('app.timezone') }}</p>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Quick Stats</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label><strong>Total Inquiries:</strong></label>
                    <p>{{ \App\Models\Contact::count() }}</p>
                </div>
                
                <div class="form-group">
                    <label><strong>Total Users:</strong></label>
                    <p>{{ \App\Models\User::count() }}</p>
                </div>
                
                <div class="form-group">
                    <label><strong>Last Backup:</strong></label>
                    <p class="text-muted">Not configured</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
