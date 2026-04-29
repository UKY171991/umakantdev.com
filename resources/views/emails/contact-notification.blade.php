<!DOCTYPE html>
<html>
<head>
    <title>New Contact Inquiry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 0 0 8px 8px;
        }
        .field {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
        }
        .value {
            background: white;
            padding: 10px;
            border-left: 4px solid #667eea;
            border-radius: 4px;
        }
        .message {
            background: white;
            padding: 15px;
            border-left: 4px solid #764ba2;
            border-radius: 4px;
            white-space: pre-wrap;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #666;
            font-size: 12px;
        }
    </style>
</head>
<body>
    @php
        $siteName = \App\Models\Setting::get('site_name', 'ThinkBiz');
    @endphp
    <div class="header">
        <h1>📧 New Inquiry for {{ $siteName }}</h1>
        <p>You have received a new message from your website contact form.</p>
    </div>
    
    <div class="content">
        <div class="field">
            <div class="label">Name:</div>
            <div class="value">{{ $contact->first_name }} {{ $contact->last_name }}</div>
        </div>
        
        <div class="field">
            <div class="label">Email:</div>
            <div class="value">{{ $contact->email }}</div>
        </div>
        
        <div class="field">
            <div class="label">Project Type:</div>
            <div class="value">{{ $contact->project_type }}</div>
        </div>
        
        <div class="field">
            <div class="label">Message:</div>
            <div class="message">{{ $contact->message }}</div>
        </div>
        
        <div class="field">
            <div class="label">Date:</div>
            <div class="value">{{ $contact->created_at->format('F j, Y \a\t g:i A') }}</div>
        </div>
    </div>
    
    <div class="footer">
        <p>This is an automated notification sent from the <strong>{{ $siteName }}</strong> dashboard.</p>
        <p>© {{ date('Y') }} {{ $siteName }}. All rights reserved.</p>
    </div>
</body>
</html>
