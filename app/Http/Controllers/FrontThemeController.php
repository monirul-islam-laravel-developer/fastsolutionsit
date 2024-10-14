<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Theme;
use Illuminate\Http\Request;

class FrontThemeController extends Controller
{
    public $theme;
    public $themeId;
    public function index($categorySlug,$postSlug)
    {
        $this->theme=Theme::where('slug',$postSlug)->first();
//        dd($this->theme);
//        dd($this->theme->sub_category->slug);
        return view('front.theme.index', ['theme' =>$this->theme]);
    }
}
