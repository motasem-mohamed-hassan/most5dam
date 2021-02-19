<?php

namespace App\Http\Controllers\Dashboard;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $about = Page::first();
        return view('dashboard.about_us.index', compact('about', 'user'));
    }

    public function update($id, Request $request)
    {
        $about = Page::find($id);
        $about->header              = $request->header;
        $about->description         = $request->description;
        $about->section2               = $request->section2;
        $about->description2   = $request->description2;
        $about->section3               = $request->section3;
        $about->description3   = $request->description3;

        $about->save();

        return redirect()->back();
    }
}
