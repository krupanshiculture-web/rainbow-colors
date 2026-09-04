<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }

    public function about()
    {
        return view('frontend.home.about');
    }

    public function products()
    {
        return view('frontend.home.products');
    }

    public function error()
    {
        return view('frontend.home.error');
    }
}
