<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoeController extends Controller
{
    public function index()
    {
        return view('shoes');
    }

    public function clothes()
    {
        return view('clothes');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }

   
}

