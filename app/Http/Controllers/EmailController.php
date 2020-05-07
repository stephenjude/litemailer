<?php

namespace App\Http\Controllers;

use App\EmailList;
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
            'email' => 'required|email:rfc|max:255|unique:email_lists,email',
        ]);

        EmailList::create($data);

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

        

        return redirect()->back()->with('message', 'Your bulk email was sent successfully');
    }
}
