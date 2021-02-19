<?php

namespace App\Http\Controllers\Front;

use App\Setting;
use App\Category;
use App\Mail\ContactFormMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{

    public function index()
    {
        $setting = Setting::find('1');
        $categories = Category::all();


        return view('front.contact', compact('categories', 'setting'));
    }


    public function store()
    {
        $data = request()->validate([
            'name'      => 'required',
            'subject'   => 'required',
            'email'     => 'required|email',
            'message'   => 'required',
        ]);

        Mail::to('test@test.com')->send(new ContactFormMail($data));

        return redirect()->route('home')->with('success', 'Your email has been sent successfully!');


    }

}
