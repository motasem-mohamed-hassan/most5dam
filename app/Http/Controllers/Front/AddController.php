<?php

namespace App\Http\Controllers\Front;

use App\Image;
use App\Product;
use App\Setting;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\AddRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AddController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', null)->get();
        $setting = Setting::find('1');


        return view('front.add', compact('categories', 'setting'));
    }

    public function choseSub(Request $request)
    {

        $subCategories = Category::where('parent_id', $request->id)->get();

        return response()->json([
            'status'    => true,
            'data'      => $subCategories
        ]);
    }

    public function category(Request $request)
    {
        $setting = Setting::find('1');

        $categories = Category::where('parent_id', null)->get();
        $category = Category::where('id', $request->category_id)->first();
        $category_id = $request->category_id;
        $subCategory_id = $request->subCategory_id;
        return view('front.add_product', compact('categories', 'category','subCategory_id', 'setting'));
    }

    public function store( AddRequest $request)
    {
        $product = new Product();
        $product->user_id           =    Auth::id();
        $product->category_id       =    $request->category_id;
        $product->subCategory_id	=    $request->subCategory_id;

        $product->name              =    $request->name;

        $product->manufactureYear   =    $request->manufactureYear ;
        $product->wheelType         =    $request->wheelType ;
        $product->product           =    $request->product ;
        $product->machinesPlace     =    $request->machinesPlace ;
        $product->machinesType      =    $request->machinesType ;
        $product->machinesPower     =    $request->machinesPower ;
        $product->machinesAge       =    $request->machinesAge ;
        $product->capleType         =    $request->capleType ;
        $product->age               =    $request->age ;
        $product->transmissionType  =    $request->transmissionType ;
        $product->kilometers        =    $request->kilometers ;
        $product->engineCapacity    =    $request->engineCapacity ;
        $product->screensize        =    $request->screensize ;
        $product->memory            =    $request->memory ;
        $product->storage           =    $request->storage ;
        $product->generation        =    $request->generation ;
        $product->color             =    $request->color ;
        $product->accessories       =    $request->accessories ;
        $product->processor         =    $request->processor ;
        $product->coolingPower      =    $request->coolingPower ;
        $product->coolingType       =    $request->coolingType ;
        $product->capacitance       =    $request->capacitance ;
        $product->megapixel         =    $request->megapixel ;
        $product->screenType        =    $request->screenType ;
        $product->length            =    $request->length ;
        $product->machinesNumber    =    $request->machinesNumber ;
        $product->size              =    $request->size ;
        $product->manufactureType   =    $request->manufactureType ;
        $product->fuelType          =    $request->fuelType ;
        $product->energy            =    $request->energy ;


        $product->description       =   $request->description;
        $product->price             =   $request->price;
        $product->status            =   0;
        $product->save();

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
        $categories = Category::where('parent_id', null)->get();
        $product = Product::find($id);
        $category = Category::where('id', $product->category_id)->first();
        $subCategory_id = Category::where('id', $product->subCategory_id)->first();

        return view('front.edit_product', compact('product', 'category', 'subCategory_id', 'categories', 'setting'));
    }

    public function update(Request $request, $id)
    {

        $product = Product::find($id);
        $product->user_id           =    Auth::id();
        $product->category_id       =    $request->category_id;
        $product->subCategory_id	=    $request->subCategory_id;

        $product->name              =    $request->name;

        $product->manufactureYear   =    $request->manufactureYear ;
        $product->wheelType         =    $request->wheelType ;
        $product->product           =    $request->product ;
        $product->machinesPlace     =    $request->machinesPlace ;
        $product->machinesType      =    $request->machinesType ;
        $product->machinesPower     =    $request->machinesPower ;
        $product->machinesAge       =    $request->machinesAge ;
        $product->capleType         =    $request->capleType ;
        $product->age               =    $request->age ;
        $product->transmissionType  =    $request->transmissionType ;
        $product->kilometers        =    $request->kilometers ;
        $product->engineCapacity    =    $request->engineCapacity ;
        $product->screensize        =    $request->screensize ;
        $product->memory            =    $request->memory ;
        $product->storage           =    $request->storage ;
        $product->generation        =    $request->generation ;
        $product->color             =    $request->color ;
        $product->accessories       =    $request->accessories ;
        $product->processor         =    $request->processor ;
        $product->coolingPower      =    $request->coolingPower ;
        $product->coolingType       =    $request->coolingType ;
        $product->capacitance       =    $request->capacitance ;
        $product->megapixel         =    $request->megapixel ;
        $product->screenType        =    $request->screenType ;
        $product->length            =    $request->length ;
        $product->machinesNumber    =    $request->machinesNumber ;
        $product->size              =    $request->size ;
        $product->manufactureType   =    $request->manufactureType ;
        $product->fuelType          =    $request->fuelType ;
        $product->energy            =    $request->energy ;


        $product->description       =   $request->description;
        $product->price             =   $request->price;
        $product->status            =   0;
        $product->update();

        if($request->hasFile('image')){
            $oldimages = Image::where('product_id', $id)->get();
            foreach($oldimages as $oldimage)
            {
                Storage::disk('local')->delete('public/products/'.$oldimage->url);
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
                $imag->update();
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
