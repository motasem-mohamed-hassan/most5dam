<?php

namespace App\Http\Controllers\Front;

use App\Setting;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    public function index()
    {
        $setting = Setting::find('1');
        $categories = Category::all();
        $about = Page::find(1);
        return view('front.about', compact('categories', 'setting', 'about'));
    }
}
