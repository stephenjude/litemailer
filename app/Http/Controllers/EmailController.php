<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function showAddEmailForm()
    {
        return view('add-email');
    }

    public function saveEmail()
    {
        $data = request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:rfc|max:255',
        ]);

        //do some database operations with $data

        return redirect()->back()->with('message', 'Your email was added successfully');
    }

    public function showSendEmailForm()
    {
        return view('send-email');
    }

    public function sendEmail()
    {
        $data = request()->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required',
        ]);

        //do some email sending operations with $data

        return redirect()->back()->with('message', 'Your bulk email was sent successfully');
    }
}
