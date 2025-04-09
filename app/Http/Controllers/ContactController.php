<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Paginate the contacts to show only 15 per page
        $contacts = Contact::latest()->paginate(12);

        // Return the view with the paginated contacts
        return view('showContact', compact('contacts'));
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Store the data in the database
        Contact::create($validated);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'تم إرسال رسالتك بنجاح!');
    }
}
