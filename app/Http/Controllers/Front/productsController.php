<?php

namespace App\Http\Controllers\Front;

use App\City;
use App\Image;
use App\Review;
use App\Product;
use App\Setting;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class productsController extends Controller
{

    public function index(Request $request)
    {
        $cities     = City::all();
        $categories = Category::all();
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

        $products = $query->latest()->Paginate(50);


        return view('front.index', compact('categories','products', 'setting', 'cities'));
    }

    public function show($id)
    {
        $setting = Setting::find('1');
        $cities     = City::all();
        $categories = Category::all();
        $product = Product::find($id);
        $images = Image::where('product_id', $id)->get();

        return view('front.product', compact('product', 'categories', 'images', 'setting', 'cities'));
    }









}
