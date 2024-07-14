<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home.home');
    }
    public function detail()
    {
        return view('front.product.detail');
    }
}
