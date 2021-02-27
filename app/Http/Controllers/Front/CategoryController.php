<?php

namespace App\Http\Controllers\Front;

use App\Product;
use App\Setting;
use App\Category;
use App\Filter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function show(Request $request, $id)
    {
        // $category = Category::where('id', $id)->where('parent_id', null)->firstOrFail();
        $thiscategory    =  Category::find($id);
        $categories     = Category::all();
        // $subCategories    = Category::where('parent_id', '>', 0)->get();
        $setting = Setting::find('1');
        $filters = Filter::where('category_id', $thiscategory->id)->where('show_in_filter', 'yes')->get();

        $query = Product::where('status', 1)->where('category_id', $id);

        if($request->has('search'))
            $query->where('name', 'LIKE', '%'.$request->search.'%');
        if($request->priceRange){
            preg_match_all('!\d+!', $request->priceRange, $range);
            $query->whereBetween('price', [$range[0][0],$range[0][1]]);
        }if($request->has('brand'))
            $query->wherein('brand', $request->brand);
        if($request->has('model'))
            $query->wherein('name', $request->model);
        if($request->has('screenSize'))
            $query->wherein('screenSize', $request->screenSize);
        if($request->has('memory'))
            $query->wherein('memory', $request->memory);
        if($request->has('storage'))
            $query->wherein('storage', $request->storage);
        if($request->has('generation'))
            $query->wherein('generation', $request->generation);
        if($request->has('transmissionType'))
            $query->wherein('transmissionType', $request->transmissionType);
        if($request->has('wheelType'))
            $query->wherein('wheelType', $request->wheelType);
        if($request->has('fuelType'))
            $query->wherein('fuelType', $request->fuelType);
        // if($request->minmanufactureYear && $request->maxmanufactureYear)
        //     $query->whereBetween('manufactureYear', [$request->minmanufactureYear, $request->maxmanufactureYear]);
        if($request->has('processor'))
            $query->wherein('processor', $request->processor);
        if($request->has('coolingType'))
            $query->wherein('coolingType', $request->coolingType);
        if($request->has('coolingPower'))
            $query->wherein('coolingPower', $request->coolingPower);
        if($request->has('capacitance'))
            $query->wherein('capacitance', $request->capacitance);
        if($request->has('megapixel'))
            $query->wherein('megapixel', $request->megapixel);
        if($request->has('screenType'))
            $query->wherein('screenType', $request->screenType);
        if($request->has('product'))
            $query->wherein('product', $request->product);
        if($request->has('length'))
            $query->wherein('length', $request->length);
        if($request->has('machinesPlace'))
            $query->wherein('machinesPlace', $request->machinesPlace);
        if($request->has('capleType'))
            $query->wherein('capleType', $request->capleType);
        if($request->has('city'))
            $query->wherein('city', $request->city);

        $products = $query->latest()->paginate(50);

        return view('front.category', compact('products', 'categories', 'thiscategory', 'setting', 'filters'));

    }

}
