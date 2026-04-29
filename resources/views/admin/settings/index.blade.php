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
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="row">
        <div class="col-md-3">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center mb-3">
                        <label>Current Logo</label>
                        <div class="mt-2 p-2 border rounded bg-light mb-2" style="min-height: 100px; display: flex; align-items: center; justify-content: center;">
                            @if($settings['logo'])
                                <img id="logo-preview" src="{{ asset('storage/' . $settings['logo']) }}" class="img-fluid" style="max-height: 80px;" alt="Logo">
                            @else
                                <img id="logo-preview" src="https://via.placeholder.com/200x80?text=No+Logo" class="img-fluid" style="max-height: 80px;" alt="No Logo">
                            @endif
                        </div>
                        <div class="input-group input-group-sm">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="logo" name="logo" onchange="previewImage(this, 'logo-preview')">
                                <label class="custom-file-label" for="logo">Upload Logo</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center mb-4">
                        <label>Current Favicon</label>
                        <div class="mt-2 p-2 border rounded bg-light mb-2" style="height: 60px; width: 60px; margin: 0 auto; display: flex; align-items: center; justify-content: center;">
                            @if($settings['favicon'])
                                <img id="favicon-preview" src="{{ asset('storage/' . $settings['favicon']) }}" class="img-fluid" style="max-height: 32px;" alt="Favicon">
                            @else
                                <img id="favicon-preview" src="https://via.placeholder.com/32?text=F" class="img-fluid" style="max-height: 32px;" alt="No Favicon">
                            @endif
                        </div>
                        <div class="input-group input-group-sm">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="favicon" name="favicon" onchange="previewImage(this, 'favicon-preview')">
                                <label class="custom-file-label" for="favicon">Upload Favicon</label>
                            </div>
                        </div>
                    </div>

                    <h3 class="profile-username text-center">{{ $settings['site_name'] }}</h3>
                    <p class="text-muted text-center mb-4">{{ $settings['site_email'] }}</p>

                    <button type="submit" class="btn btn-primary btn-block"><b><i class="fas fa-save mr-1"></i> Save All Settings</b></button>
                </div>
            </div>

            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">App Mode</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="app_env">Environment</label>
                        <select name="app_env" id="app_env" class="form-control">
                            <option value="local" {{ $settings['app_env'] == 'local' ? 'selected' : '' }}>Local (Development)</option>
                            <option value="production" {{ $settings['app_env'] == 'production' ? 'selected' : '' }}>Production (Live)</option>
                            <option value="testing" {{ $settings['app_env'] == 'testing' ? 'selected' : '' }}>Testing</option>
                        </select>
                        <small class="text-muted">Change application environment.</small>
                    </div>

                    <div class="form-group custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="app_debug" name="app_debug" value="1" {{ $settings['app_debug'] == '1' ? 'checked' : '' }}>
                        <label class="custom-control-label" for="app_debug">Debug Mode</label>
                        <br><small class="text-muted">Show detailed error messages.</small>
                    </div>

                    <div class="form-group custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="maintenance_mode" name="maintenance_mode" value="1" {{ $settings['maintenance_mode'] == '1' ? 'checked' : '' }}>
                        <label class="custom-control-label" for="maintenance_mode">Maintenance Mode</label>
                        <br><small class="text-muted">Disable public access to the site.</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#general" data-toggle="tab"><i class="fas fa-info-circle mr-1"></i> General</a></li>
                        <li class="nav-item"><a class="nav-link" href="#social" data-toggle="tab"><i class="fab fa-share-alt mr-1"></i> Social Links</a></li>
                        <li class="nav-item"><a class="nav-link" href="#seo" data-toggle="tab"><i class="fas fa-search mr-1"></i> SEO Settings</a></li>
                        <li class="nav-item"><a class="nav-link" href="#mail" data-toggle="tab"><i class="fas fa-envelope mr-1"></i> Mail Setup</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="general">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="site_name">Site Name</label>
                                        <input type="text" class="form-control" id="site_name" name="site_name" value="{{ $settings['site_name'] }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="site_email">Admin Email</label>
                                        <input type="email" class="form-control" id="site_email" name="site_email" value="{{ $settings['site_email'] }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contact_email">Contact Email</label>
                                        <input type="email" class="form-control" id="contact_email" name="contact_email" value="{{ $settings['contact_email'] }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contact_phone">Contact Phone</label>
                                        <input type="text" class="form-control" id="contact_phone" name="contact_phone" value="{{ $settings['contact_phone'] ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="contact_address">Office Address / Location</label>
                                        <textarea class="form-control" id="contact_address" name="contact_address" rows="2">{{ $settings['contact_address'] ?? '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <hr>
                            
                            <div class="form-group custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="email_notifications" name="email_notifications" value="1" {{ $settings['email_notifications'] == '1' ? 'checked' : '' }}>
                                <label class="custom-control-label" for="email_notifications">Enable Email Notifications</label>
                                <p><small class="text-muted">Receive email alerts for new inquiries.</small></p>
                            </div>
                        </div>

                        <div class="tab-pane" id="social">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="social_facebook"><i class="fab fa-facebook text-primary mr-1"></i> Facebook URL</label>
                                        <input type="url" class="form-control" id="social_facebook" name="social_facebook" value="{{ $settings['social_facebook'] ?? '' }}" placeholder="https://facebook.com/yourpage">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="social_twitter"><i class="fab fa-twitter text-info mr-1"></i> Twitter / X URL</label>
                                        <input type="url" class="form-control" id="social_twitter" name="social_twitter" value="{{ $settings['social_twitter'] ?? '' }}" placeholder="https://twitter.com/yourhandle">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="social_instagram"><i class="fab fa-instagram text-danger mr-1"></i> Instagram URL</label>
                                        <input type="url" class="form-control" id="social_instagram" name="social_instagram" value="{{ $settings['social_instagram'] ?? '' }}" placeholder="https://instagram.com/yourprofile">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="social_linkedin"><i class="fab fa-linkedin text-primary mr-1"></i> LinkedIn URL</label>
                                        <input type="url" class="form-control" id="social_linkedin" name="social_linkedin" value="{{ $settings['social_linkedin'] ?? '' }}" placeholder="https://linkedin.com/in/yourprofile">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="seo">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="meta_title">Meta Title</label>
                                        <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ $settings['meta_title'] ?? '' }}" placeholder="Enter default meta title">
                                        <small class="text-muted">Used as the title tag for the home page and as a fallback.</small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="meta_description">Meta Description</label>
                                        <textarea class="form-control" id="meta_description" name="meta_description" rows="3" placeholder="Enter default meta description">{{ $settings['meta_description'] ?? '' }}</textarea>
                                        <small class="text-muted">A brief summary of your site for search engines.</small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="meta_keywords">Meta Keywords</label>
                                        <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="{{ $settings['meta_keywords'] ?? '' }}" placeholder="e.g. web development, seo, app development">
                                        <small class="text-muted">Comma separated keywords.</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="mail">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label for="mail_mailer">Mail Driver</label>
                                        <select name="mail_mailer" id="mail_mailer" class="form-control" onchange="toggleMailFields(this.value)">
                                            <option value="smtp" {{ $settings['mail_mailer'] == 'smtp' ? 'selected' : '' }}>SMTP (Recommended)</option>
                                            <option value="sendmail" {{ $settings['mail_mailer'] == 'sendmail' ? 'selected' : '' }}>Sendmail</option>
                                            <option value="log" {{ $settings['mail_mailer'] == 'log' ? 'selected' : '' }}>Log (For Testing)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div id="smtp-fields" style="{{ $settings['mail_mailer'] == 'smtp' ? '' : 'display:none;' }}">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="mail_host">SMTP Host</label>
                                            <input type="text" class="form-control" id="mail_host" name="mail_host" value="{{ $settings['mail_host'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="mail_port">SMTP Port</label>
                                            <input type="text" class="form-control" id="mail_port" name="mail_port" value="{{ $settings['mail_port'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mail_username">SMTP Username</label>
                                            <input type="text" class="form-control" id="mail_username" name="mail_username" value="{{ $settings['mail_username'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mail_password">SMTP Password</label>
                                            <input type="password" class="form-control" id="mail_password" name="mail_password" value="{{ $settings['mail_password'] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mail_encryption">Encryption</label>
                                            <select name="mail_encryption" id="mail_encryption" class="form-control">
                                                <option value="" {{ $settings['mail_encryption'] == '' ? 'selected' : '' }}>None</option>
                                                <option value="tls" {{ $settings['mail_encryption'] == 'tls' ? 'selected' : '' }}>TLS</option>
                                                <option value="ssl" {{ $settings['mail_encryption'] == 'ssl' ? 'selected' : '' }}>SSL</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mail_from_address">From Email Address</label>
                                        <input type="email" class="form-control" id="mail_from_address" name="mail_from_address" value="{{ $settings['mail_from_address'] }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mail_from_name">From Name</label>
                                        <input type="text" class="form-control" id="mail_from_name" name="mail_from_name" value="{{ $settings['mail_from_name'] }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    function previewImage(input, previewId) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#' + previewId).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
            $(input).next('.custom-file-label').html(input.files[0].name);
        }
    }

    function toggleMailFields(mailer) {
        if (mailer === 'smtp') {
            $('#smtp-fields').show();
        } else {
            $('#smtp-fields').hide();
        }
    }
</script>
@endsection
