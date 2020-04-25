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
            'email' => 'required|email,|max:255',
        ]);

        //do some database operations with $data

        return redirect()->back()->with('message', 'Your email was added successfully');
    }

    public function showSendEmailForm()
    {
        return view('add-email');
    }

    public function sendEmail()
    {
        $data = request()->validate([
            'subject' => 'required|string|max:255',
            'body' => 'required',
        ]);

        //do some database operations with $data

        return redirect()->back()->with('message', 'Your bulk email was sent successfully');
    }
}
