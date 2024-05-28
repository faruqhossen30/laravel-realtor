<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('homepage');
    }
    public function send(Request $request)
    {
        $data = [
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message
        ];
        Mail::to('admin@gmail.com')->send(new ContactUs($data));
        return redirect()->back();
    }
}
