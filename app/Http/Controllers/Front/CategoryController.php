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
        $thiscategory    =  Category::find($id);
        $categories     = Category::all();
        $setting = Setting::find('1');
        $filters = Filter::where('category_id', $thiscategory->id)->where('show_in_filter', 'yes')->get();

        $query = Product::where('status', 1)->where('category_id', $id);

        if($request->has('search'))
            $query->where('model', 'LIKE', '%'.$request->search.'%');
        if($request->pricerange){
            preg_match_all('!\d+!', $request->pricerange, $range);
            $query->whereBetween('price', [$range[0][0],$range[0][1]]);
        }if($request->has('brand'))
            $query->wherein('brand_name', $request->brand);
        if($request->has('model'))
            $query->wherein('model', $request->model);
        if($request->has('screen_size'))
            $query->wherein('screen size', $request->screen_size);
        if($request->has('memory'))
            $query->wherein('memory', $request->memory);
        if($request->has('storage'))
            $query->wherein('storage', $request->storage);
        if($request->has('generation'))
            $query->wherein('generation', $request->generation);
        if($request->has('transmission_type'))
            $query->wherein('transmission type', $request->transmission_type);
        if($request->has('wheel_type'))
            $query->wherein('wheel type', $request->wheel_type);
        if($request->has('fuel_type'))
            $query->wherein('fuel type', $request->fuel);
        if($request->minmanufacture_year && $request->maxmanufacture_year)
            $query->whereBetween('manufacture year', [$request->minmanufacture_year, $request->maxmanufacture_year]);
        if($request->minkilometers && $request->maxkilometers)
            $query->whereBetween('manufacture year', [$request->minkilometers, $request->maxkilometers]);
        if($request->minengine_capacity && $request->maxengine_capacity)
            $query->whereBetween('manufacture year', [$request->minengine_capacity, $request->maxengine_capacity]);
        if($request->has('processor'))
            $query->wherein('processor', $request->processor);
        if($request->has('cooling_type'))
            $query->wherein('cooling type', $request->cooling_type);
        if($request->has('cooling_power'))
            $query->wherein('cooling power', $request->cooling_power);
        if($request->has('capacitance'))
            $query->wherein('capacitance', $request->capacitance);
        if($request->has('megapixel'))
            $query->wherein('megapixel', $request->megapixel);
        if($request->has('screen_type'))
            $query->wherein('screen type', $request->screen_type);
        if($request->has('product'))
            $query->wherein('product', $request->product);
        if($request->has('length'))
            $query->wherein('length', $request->length);
        if($request->has('machines_place'))
            $query->wherein('machines place', $request->machines_place);
        if($request->has('caple_type'))
            $query->wherein('caple type', $request->caple_type);
        if($request->has('city'))
            $query->wherein('city', $request->city);

        $products = $query->latest()->paginate(50);



        return view('front.category', compact('products', 'categories', 'thiscategory', 'setting', 'filters'));

    }

    public function filterBrand(Request $request)
    {
        $query = Product::where('status', 1)->where('category_id', $request->category_id);

        if($request->has('brand'))
            $query->whereIn('brand_name', $request->brand[0]);
        if($request->has('model'))
            $query->wherein('model', $request->model[0]);
        if($request->has('screen_size'))
            $query->wherein('screen size', $request->screen_size[0]);
        if($request->has('memory'))
            $query->wherein('memory', $request->memory[0]);
        if($request->has('storage'))
            $query->wherein('storage', $request->storage[0]);
        if($request->has('generation'))
            $query->wherein('generation', $request->generation[0]);
        if($request->has('transmission_type'))
            $query->wherein('transmission type', $request->transmission_type[0]);
        if($request->has('wheel_type'))
            $query->wherein('wheel type', $request->wheel_type[0]);
        if($request->has('fuel_type'))
            $query->wherein('fuel type', $request->fuel_type[0]);
        if($request->has('processor'))
            $query->wherein('processor', $request->processor[0]);
        if($request->has('cooling_type'))
            $query->wherein('cooling type', $request->cooling_type[0]);
        if($request->has('cooling_power'))
            $query->wherein('cooling power', $request->cooling_power[0]);
        if($request->has('capacitance'))
            $query->wherein('capacitance', $request->capacitance[0]);
        if($request->has('megapixel'))
            $query->wherein('megapixel', $request->megapixel[0]);
        if($request->has('screen_type'))
            $query->wherein('screen type', $request->screen_type[0]);
        if($request->has('product'))
            $query->wherein('product', $request->product[0]);
        if($request->has('length'))
            $query->wherein('length', $request->length[0]);
        if($request->has('machines_place'))
            $query->wherein('machines place', $request->machines_place[0]);
        if($request->has('caple_type'))
            $query->wherein('caple type', $request->caple_type[0]);
        if($request->has('city'))
            $query->wherein('city', $request->city[0]);

        $products = $query->latest()->paginate(50)->load('first_image');


        return response()->json([
            'status'    => true,
            'data'      => $products
        ]);

    }

}
