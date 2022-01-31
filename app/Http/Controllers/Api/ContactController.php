<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Mail\SendNewMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(){
        
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new SendNewMail());
    }
}
