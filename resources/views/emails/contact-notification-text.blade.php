New Website Inquiry

Name: {{ $contact->first_name }} {{ $contact->last_name }}
Email: {{ $contact->email }}
Project Type: {{ $contact->project_type }}
Message:
{{ $contact->message }}

Date: {{ $contact->created_at->format('F j, Y at g:i A') }}

---
This is an automated notification from your website.
@php echo \App\Models\Setting::get('site_name', 'ThinkBiz'); @endphp
