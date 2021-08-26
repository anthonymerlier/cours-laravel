<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\InsertedPhoneMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function onInsertPhone(){

        $user = [ "name" => "John Doe", "email" => "john@example.com" ];

        Mail::to($user['email'])->send(new InsertedPhoneMail($user));
        return redirect()->route('homepage');

    }
}
