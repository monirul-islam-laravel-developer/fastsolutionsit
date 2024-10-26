<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    public $subcategories;
    public function index()
    {
        $this->subcategories=SubCategory::all();
        return view('front.home.home',['subcategories'=>$this->subcategories]);
    }

}
