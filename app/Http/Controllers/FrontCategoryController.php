<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Theme;
use Illuminate\Http\Request;

class FrontCategoryController extends Controller
{
    public $themes;
    public $category;
    public $subcategoryId;
    public function index($slug)
    {
        $this->subcategoryId=SubCategory::where('slug',$slug)->first();
        $this->themess = Theme::where('sub_category_id',$this->subcategoryId->id)->orderBy('id','desc')->get();
        return view('front.category.index',['themess'=>$this->themess]);
    }
}
