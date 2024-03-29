<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function carSearch()
    {
        return view('car-search');
    }

    public function howItWorks()
    {
        return view('how-it-works');
    }

    public function contact()
    {
        return view('contact');
    }



}
