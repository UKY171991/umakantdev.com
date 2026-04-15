<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\View\View;

class ContactInquiryController extends Controller
{
    public function index(): View
    {
        $inquiries = Contact::latest()->paginate(10);
        return view('admin.inquiries.index', compact('inquiries'));
    }

    public function show(Contact $inquiry): View
    {
        return view('admin.inquiries.show', compact('inquiry'));
    }

    public function destroy(Contact $inquiry)
    {
        $inquiry->delete();
        return redirect()->route('admin.inquiries.index')
            ->with('success', 'Inquiry deleted successfully.');
    }
}
