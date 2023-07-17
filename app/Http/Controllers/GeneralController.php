<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GeneralController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function setLang(string $locale)
    {
        return redirect()->back()->withCookie('locale', $locale);
    }

    public function setEmail()
    {
        Mail::to('javiercombita2014@gmail.com')->send(new SendMail);
        return "correo enviado";
    }

    
}
