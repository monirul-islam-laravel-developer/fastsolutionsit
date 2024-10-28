<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\Theme;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    public $subcategories;
    public $templetes8;
    public $templete4;
    public $news_templets1;
    public function index()
    {
        $this->news_templets1= Theme::where('category_id',10)->where('sub_category_id', '7')->latest()->take(4)->get();
        $this->templetes8=Theme::where('status',1)->latest()->take(6)->get();
        $this->templete4=Theme::where('category_id',10)->where('sub_category_id',6)->latest()->take(4)->get();


        $this->subcategories=SubCategory::all();
        return view('front.home.home',
            ['subcategories'=>$this->subcategories,
              'news_templets1'=>$this->news_templets1,
                'templetes8'=>$this->templetes8,
                'templetes4'=>$this->templete4,
            ]);
    }

}
