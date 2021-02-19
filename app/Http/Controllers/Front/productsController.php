<?php

namespace App\Http\Controllers\Front;

use App\Image;
use App\Review;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class productsController extends Controller
{

    public function index(Request $request)
    {
        $categories = Category::where('parent_id', null)->get();
        $setting = Setting::find('1');
        $query = Product::where('status', 1);
        if($request->has('search')){
            $query->where('name', 'LIKE', '%'.$request->search.'%');
        }if($request->pricerange){
            preg_match_all('!\d+!', $request->pricerange, $range);
            $query->whereBetween('price', [$range[0][0],$range[0][1]]);
        }if($request->has('sortby')){
            if($request->sortby == 'asc'){
                $query->orderBy('price','asc');
            }elseif($request->sortby == 'desc'){
                $query->orderBy('price','desc');
            }else{
                $query->orderBy('created_at');
            }
        }

        $products = $query->get();


        return view('front.index', compact('categories','products', 'setting'));
    }

    public function show($id)
    {
        $setting = Setting::find('1');
        $categories     = Category::where('parent_id', null)->get();
        $subCategory    = Category::where('parent_id', '>', 0)->get();

        $product = Product::find($id);
        $images = Image::where('product_id', $id)->get();
        $subCategory = Category::where('id', $product->subCategory_id)->first();

        return view('front.product', compact('product', 'categories', 'images', 'subCategory', 'setting'));
    }









}
