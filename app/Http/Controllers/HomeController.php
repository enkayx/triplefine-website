<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function admin()
    {
        return view('admin.index');
    }
    
    public function home()
    {

        return view('home.home');
    }

    public function why()
    {
        return view('home.why');
    }

    public function products()
    {
        return view('home.products');
    }

    public function testimonial()
    {
        return view('home.testimonial');
    }

    public function contact()
    {
        return view('home.contact');
    }
}
