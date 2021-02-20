<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Filter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FiltersController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $user = Auth::user();

        return view('dashboard.create.filters', compact('categories', 'user'));
    }

    public function store(Request $request)
    {
        $filter = new Filter();
        $filter->category_id    = $request->category_id;
        $filter->name           = $request->name;
        $filter->الاسم           = $request->الاسم;
        $filter->save();

        toastr()->success('تم اضافة الفلتر بنجاح');
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $filter = Filter::find($request->id);

        return response()->json([
            'status' => true,
            'data'     => $filter
        ]);
    }

    public function update(Request $request)
    {
        $filter = Filter::find($request->id);
        $filter->name           = $request->name;
        $filter->الاسم           = $request->الاسم;
        $filter->save();

        return response()->json([
            'status' => true,
            'msg'    => 'تم تعديل الفلتر بنجاح',
            'data'     => $filter,
        ]);
    }

    public function destroy(Request $request)
    {
        $filter = Filter::find($request->id);
        $filter->delete();

        return response()->json([
            'status' => true,
            'msg'    => 'تم حذف الفيلتر بنجاح',
            'id'     => $request->id
        ]);

    }


}
