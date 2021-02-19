<?php

namespace App\Http\Controllers\Front;

use App\Product;
use App\Setting;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function show(Request $request, $id)
    {
        $category = Category::where('id', $id)->where('parent_id', null)->firstOrFail();

        $categories     = Category::where('parent_id', null)->get();
        $subCategories    = Category::where('parent_id', '>', 0)->get();
        $setting = Setting::find('1');



        $query = Product::where('status', 1)->where('category_id', $id);

        if($request->has('search'))
            $query->where('name', 'LIKE', '%'.$request->search.'%');
        if($request->pricerange){
            preg_match_all('!\d+!', $request->pricerange, $range);
            $query->whereBetween('price', [$range[0][0],$range[0][1]]);
        }if($request->has('subcategory'))
            $query->whereIn('subCategory_id', $request->subcategory);
        if($request->has('screensize'))
            $query->whereIn('screensize', $request->screensize);
        if($request->has('memory'))
            $query->whereIn('memory', $request->memory);
        if($request->has('storage'))
            $query->whereIn('storage', $request->storage);
        if($request->has('generation'))
            $query->whereIn('generation', $request->generation);
        if($request->has('transmissionType'))
            $query->whereIn('transmissionType', $request->transmissionType);
        if($request->has('wheelType'))
            $query->whereIn('wheelType', $request->wheelType);
        if($request->has('fuelType'))
            $query->whereIn('fuelType', $request->fuelType);
        if($request->minmanufactureYear && $request->maxmanufactureYear)
            $query->whereBetween('manufactureYear', [$request->minmanufactureYear, $request->maxmanufactureYear]);
        if($request->has('processor'))
            $query->whereIn('processor', $request->processor);
        if($request->has('coolingType'))
            $query->whereIn('coolingType', $request->coolingType);
        if($request->has('capacitance'))
            $query->where('capacitance', 'LIKE', '%'.$request->capacitance.'%');
        if($request->has('megapixel'))
            $query->where('megapixel', 'LIKE', '%'.$request->megapixel.'%');
        if($request->has('screenType'))
            $query->whereIn('screenType', $request->screenType);
        if($request->has('product'))
            $query->whereIn('product', $request->product);
        if($request->has('length'))
            $query->where('length', 'LIKE', '%'.$request->length.'%');
        if($request->has('machinesPlace'))
            $query->whereIn('length', $request->machinesPlace);
        if($request->has('capleType'))
            $query->whereIn('length', $request->capleType);


        $products = $query->get();


        return view('front.category', compact('products', 'categories', 'category', 'subCategories', 'setting'));

    }
}
