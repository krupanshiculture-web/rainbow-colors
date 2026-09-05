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

    public function productDetails()
    {
        return view('frontend.home.shop-single');
    }

     public function contact()
    {
        return view('frontend.layouts.contact');
    }

    public function gallery()
    {
        return view('frontend.home.gallery');
    }

    public function error()
    {
        return view('frontend.home.error');
    }
}
