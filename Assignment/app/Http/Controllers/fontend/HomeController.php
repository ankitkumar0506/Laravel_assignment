<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index1()
    {
        return view('home');
    }

    public function index2()
    {
        return view('aboutus');
    }

    public function index3()
    {
        return view('contactus');
    }

    public function index4()
    {
        return view('gallery');
    }

    public function index5()
    {
        return view('login');
    }

    public function index6()
    {
        return view('registration');
    }

    // <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<Q1 complate hear>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>






}
