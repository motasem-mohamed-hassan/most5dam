<?php

namespace App\Http\Controllers\Front;

use App\Image;
use App\Value;
use App\Filter;
use App\Product;
use App\Setting;
use App\Category;
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


        return view('front.add', compact('categories', 'setting'));
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

        $categories = Category::all();
        $category = Category::where('id', $request->category_id)->first();
        $filters  = Filter::where('category_id', $request->category_id)
            ->where('brand', 0)
            ->get();
        $brand_id = $request->brand_id;
        return view('front.add_product', compact('categories', 'category', 'brand_id', 'filters', 'setting'));
    }

    public function store( Request $request)
    {
        #->except(['_token', 'user_id', 'category_id', 'brand_id', 'status', 'image'])
        
        $inputs = collect($request->all())
        ->mapWithKeys(function($item, $key) {
            return [str_replace("_", " ", $key) => $item];
        })->except([' token', 'user_id', 'category_id', 'brand_id', 'status', 'image'])->toArray();

        $product = Product::create($inputs + [
            'user_id'   => Auth::id(),
            'category_id'   => $request->category_id,
            'brand_id'      => $request->brand_id,
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

        $product = Product::find($id);
        $product->user_id           =    Auth::id();
        $product->category_id       =    $request->category_id;
        $product->brand_id	        =    $request->brand_id;

        $product->model              =   $request->model;

        $product->manufactureYear   =    $request->manufactureYear;
        $product->wheelType         =    $request->wheelType;
        $product->product           =    $request->product;
        $product->machinesPlace     =    $request->machinesPlace;
        $product->machinesType      =    $request->machinesType;
        $product->machinesPower     =    $request->machinesPower;
        $product->machinesAge       =    $request->machinesAge;
        $product->capleType         =    $request->capleType;
        $product->age               =    $request->age;
        $product->transmissionType  =    $request->transmissionType;
        $product->kilometers        =    $request->kilometers;
        $product->engineCapacity    =    $request->engineCapacity;
        $product->screenSize        =    $request->screenSize;
        $product->memory            =    $request->memory;
        $product->storage           =    $request->storage;
        $product->generation        =    $request->generation;
        $product->color             =    $request->color;
        $product->accessories       =    $request->accessories;
        $product->processor         =    $request->processor;
        $product->coolingPower      =    $request->coolingPower;
        $product->coolingType       =    $request->coolingType;
        $product->capacitance       =    $request->capacitance;
        $product->megapixel         =    $request->megapixel;
        $product->screenType        =    $request->screenType;
        $product->length            =    $request->length;
        $product->machinesNumber    =    $request->machinesNumber;
        $product->size              =    $request->size;
        $product->manufactureType   =    $request->manufactureType;
        $product->fuelType          =    $request->fuelType;
        $product->energy            =    $request->energy;
        $product->city              =    $request->city ;
        $product->material          =    $request->material ;


        $product->description       =   $request->description;
        $product->price             =   $request->price;
        $product->status            =   0;
        $product->save();

        if($request->hasFile('image')){
            $oldimages = Image::where('product_id', $id)->get();
            foreach($oldimages as $oldimage)
            {
                // File::delete('public/products/'.$oldimage->url);
                Storage::disk('public')->delete('products/'.$oldimage->url);
                $oldimage->delete();
                // Storage::disk('local')->delete('public/products/'.$oldimage->url);
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
                $imag->product_id   = $product->id;
                $imag->url          = $file;
                $imag->save();
            }
        }
        toastr()->success('المنتج في انتظار الموافقة');
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
