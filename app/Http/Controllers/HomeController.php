<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('front.index');
    }

    public function about()
    {
        return view('front.about');
    }

    public function products()
    {
        return view('front.products');
    }

    public function pouch()
    {
        return view('front.pouch');
    }

    public function container()
    {
        return view('front.container');
    }

    public function box()
    {
        return view('front.box');
    }

    public function distributorship()
    {
        return view('front.distributorship');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function blog()
    {
        return view('front.blog');
    }
}
