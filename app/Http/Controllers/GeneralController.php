<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    
}
