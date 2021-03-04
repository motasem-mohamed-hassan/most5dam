<?php

namespace App\Http\Controllers\Dashboard;

use App\City;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CitiesController extends Controller
{
    public function index()
    {
        $cities = City::all();
        $user   = Auth::user();
        return view('dashboard.create.cities', compact('cities', 'user'));
    }

    public function store(Request $request)
    {
        $city = New City();
        $city->name     =   $request->name;
        $city->city_id  =   $request->city_id;
        $city->save();

        return redirect()->back();
    }

    public function update(Request $request)
    {
        $city = City::find($request->id);
        $city->name     =   $request->name;
        $city->save();

        return response()->json([
            'status' => true,
            'msg'    => 'تم التعديل بنجاح',
        ]);

    }


    public function distroy(Request $request)
    {
        $city = City::find($request->id);
        $city->delete();

        return response()->json([
            'status' => true,
            'msg'    => 'تم الحذف بنجاح',
        ]);

    }
}
