<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use App\Mail\TestMail;

class TestController extends Controller
{
    public function mail() {
        return view('welcome');
    }

    public function send(Request $request) {
        $email = $request->email;

        $mail = [
            'title' => 'Hello!',
            'url' => 'https://btu.edu.ge/'
        ];

        Mail::to($email)->send(new TestMail($mail));

        return redirect('/');
    }
}
