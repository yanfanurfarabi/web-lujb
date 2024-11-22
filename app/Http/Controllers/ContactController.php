<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $email = Contact::all();
        return view('cms.email', compact('email'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Simpan ke database
        Contact::create($request->all());
        
        // Kirim email
        Contact::send('emails.contact', $request->all(), function ($mail) use ($request) {
            $mail->to('mail.test@lujb.co.id')
                ->subject('New Contact Message: ' . $request->subject);
        });

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
