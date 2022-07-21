<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $data = [
            'email' => 'thuranaingrocm77@gmail',
            'title' => 'Mail from Testing',
            'body' => 'This is for testing email using smtp.'
        ];

        Mail::to('thuranaingrocm77@gmail.com')->send(new DemoMail($data));

        return "Email is sent successfully";
    }

}
