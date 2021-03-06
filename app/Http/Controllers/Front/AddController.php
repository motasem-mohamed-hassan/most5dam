<?php

namespace App\Http\Controllers\Front;

use App\Image;
use App\Value;
use App\Filter;
use App\Product;
use App\Setting;
use App\Category;
use App\City;
use Illuminate\Http\Request;
use App\Http\Requests\AddRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AddController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $setting = Setting::find('1');
        $cities     = City::all();


        return view('front.add', compact('categories', 'setting', 'cities'));
    }

    public function choseSub(Request $request)
    {

        $brands = Value::where('category_id', $request->id)
                ->where('brand', 1)
                ->get();

        return response()->json([
            'status'    => true,
            'data'      => $brands
        ]);
    }

    public function category(Request $request)
    {
        $setting = Setting::find('1');
        $cities     = City::all();


        $categories = Category::all();
        $category = Category::where('id', $request->category_id)->first();
        $filters  = Filter::where('category_id', $request->category_id)
            ->where('brand', 0)
            ->get();
        $brand_id = $request->brand_id;
        $brand_name = Value::where('id', $brand_id)->first()->الاسم;
        return view('front.add_product', compact('categories', 'category', 'brand_id', 'filters', 'setting', 'brand_name', 'cities'));
    }

    public function store( Request $request)
    {
        #->except(['_token', 'user_id', 'category_id', 'brand_id', 'status', 'image'])

        $inputs = collect($request->except([' token', 'user_id', 'category_id', 'brand_id', 'brand_name', 'status', 'image']))
        ->mapWithKeys(function($item, $key) {
            return [str_replace("_", " ", $key) => $item];
        })->toArray();


        $product = Product::create($inputs + [
            'user_id'   => Auth::id(),
            'category_id'   => $request->category_id,
            'brand_id'      => $request->brand_id,
            'brand_name'    => $request->brand_name,
            'status'        => 0
        ]);

        $images = $request->file('image');
        foreach($images as $key =>$image)
        {
            if($request->image[$key]->getClientOriginalName()) {
                $ext    = $image->getClientOriginalExtension();
                $file   = date('YmdHis').rand(1,99999).'.'.$ext;
                $image->storeAs('public/products', $file);
            }

            $imag = new Image();
            $imag->product_id   = $product->id;
            $imag->url          = $file;
            $imag->save();
        }


        toastr()->success('المنتج في انتظار الموافقة');
        return redirect()->route('home');
    }

    public function show($id)
    {
        $setting = Setting::find('1');
        $categories = Category::all();
        $product = Product::find($id);
        $category = Category::where('id', $product->category_id)->first();
        $brand_id = $product->brand_id;
        $filters  = Filter::where('category_id', $category->id)
            ->where('brand', 0)
            ->get();
        return view('front.edit_product', compact('product', 'category', 'categories', 'setting', 'brand_id', 'filters'));
    }

    public function update(Request $request, $id)
    {

        $inputs = collect($request->except([' token', 'user_id', 'category_id', 'brand_id', 'brand_name', 'status', 'image']))
        ->mapWithKeys(function($item, $key) {
            return [str_replace("_", " ", $key) => $item];
        })->toArray();


        $product = Product::find($id)->update($inputs + [
            'user_id'   => Auth::id(),
            'category_id'   => $request->category_id,
            'brand_id'      => $request->brand_id,
            'brand_name'    => $request->brand_name,
            'status'        => 0
        ]);

        if($request->hasFile('image')){
            $oldimages = Image::where('product_id', $id)->get();
            foreach($oldimages as $oldimage)
            {
                Storage::disk('public')->delete('products/'.$oldimage->url);
                $oldimage->delete();
            }
            $images = $request->file('image');
            foreach($images as $key =>$image)
            {
                if($request->image[$key]->getClientOriginalName()) {
                    $ext    = $image->getClientOriginalExtension();
                    $file   = date('YmdHis').rand(1,99999).'.'.$ext;
                    $image->storeAs('public/products', $file);
                }

                $imag = new Image();
                $product = Product::find($id);
                $imag->product_id   = $product->id;
                $imag->url          = $file;
                $imag->save();
            }
        }
        toastr()->success('المنتج في انتظار الموافقة');
        return redirect()->route('home');
    }

    public function sold(Request $request, $id)
    {
        $product = Product::find($id);
        $product->sold = 1;
        $product->status = 0;

        $image = $request->file('image');
        if($request->file('image')->getClientOriginalName()) {
            $ext    = $image->getClientOriginalExtension();
            $file   = date('YmdHis').rand(1,99999).'.'.$ext;
            $image->storeAs('public/products', $file);
        }
        $product->check_image   = $file;
        $product->save();

        toastr()->success('شكرا لتعاملك معنا');
        return redirect()->route('home');
    }


    public function delete($id)
    {
        $product = Product::find($id);
        $oldimages = Image::where('product_id', $id)->get();

        foreach($oldimages as $oldimage)
        {
            Storage::disk('local')->delete('public/products/'.$oldimage->url);
        }


        $product->delete();

        toastr()->info('تم مسح المنتج بنجاح');
        return redirect()->route('home');
    }
}
