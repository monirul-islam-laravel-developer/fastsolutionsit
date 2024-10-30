<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Theme;
use Illuminate\Http\Request;

class FrontThemeController extends Controller
{
    public $theme;
    public $all_themes;
    public $themeId;
    public function index($categorySlug,$postSlug)
    {
        $this->theme=Theme::where('slug',$postSlug)->first();
//        dd($this->theme);
//        dd($this->theme->sub_category->slug);
        return view('front.theme.index', ['theme' =>$this->theme]);
    }
    public function allWebsite()
    {
        $this->all_themes=Theme::where('status',1)->orderBy('id','desc')->simplePaginate(12);
        return view('front.theme.allwebsite',['all_themes'=>$this->all_themes]);
    }
}
