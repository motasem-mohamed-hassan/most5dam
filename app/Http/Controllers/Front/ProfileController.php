<?php

namespace App\Http\Controllers\Front;

use App\User;

use App\Setting;

use App\Category;
use App\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show($id)
    {
        $categories = Category::all();
        $user       = User::findOrFail($id);
        $setting = Setting::find('1');
        $cities     = City::all();

        return view('front.profile', compact('categories', 'user', 'setting', 'cities'));
    }

    public function choseCity(Request $request)
    {
        $child_cities = City::where('city_id', $request->id)->get();


        return response()->json([
            'status'    => true,
            'data'      => $child_cities
        ]);

    }

    public function update(Request $request)
    {
        $user = User::find(Auth::id());
        $user->name  =  $request->name;
        $user->email    = $request->email;
        $user->city     = City::find($request->city)->name;
        $user->neighborhood     = $request->neighborhood;
        $user->phone_number = $request->phone_number;
        $user->save();

        return redirect()->back();
    }

    public function avater(Request $request,$id)
    {
        $avatarurl = $request->file('image');
        $avatarurl->getClientOriginalName();
        $ext    = $avatarurl->getClientOriginalExtension();
        $file   = date('YmdHis').rand(1,99999).'.'.$ext;
        $avatarurl->storeAs('public/avatars', $file);
        $user = User::find($id);

        Storage::disk('local')->delete('public/avatars/'.$user->image);
        $user->image = $file;
        $user->save();

        toastr()->success('تم اضافة الصورة بنجاح');
        return redirect()->back();
    }


    public function personalProduct($id)
    {
        $user = User::find($id);
        $cities     = City::all();
        $setting = Setting::find('1');
        $categories = Category::all();
        $products = Product::where('user_id', $id)->get();


        return view('front/personal_products', compact('user', 'setting', 'categories', 'products', 'cities'));
    }
}
