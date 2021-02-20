<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $user = Auth::user();


        return view('dashboard.create.categories', compact('categories', 'user'));
    }


    public function store(Request $request)
    {


        // Category::create($validatedData);

        // return redirect()->back()->withSuccess('You have successfully created a Category!');
        $category = new Category();
        $category->name = $request->name;
        $category->الاسم    =   $request->الاسم;
        $category->save();


        return response()->json([
            'status' => true,
            'msg'    => 'Category saved successfully',
            'data'     => $category
        ]);
    }

    public function edit(Request $request)
    {
        $category = Category::find($request->id);

        return response()->json([
            'status' => true,
            'data'     => $category
        ]);
    }

    public function update(Request $request)
    {
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->الاسم    = $request->الاسم;
        $category->update();

        return response()->json([
            'status' => true,
            'msg'    => 'Category updated successfully',
            'data'     => $category,
        ]);
    }

    public function destroy(Request $request)
    {
        $category = Category::find($request->id);
        $category->delete();

        return response()->json([
            'status' => true,
            'msg'    => 'تم حذف القسم بنجاح',
            'id'     => $request->id
        ]);

    }
}
