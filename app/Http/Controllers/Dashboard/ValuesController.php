<?php

namespace App\Http\Controllers\Dashboard;

use App\Filter;
use App\Http\Controllers\Controller;
use App\Value;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ValuesController extends Controller
{
    public function index($id)
    {
        $filter = Filter::find($id);
        $user   = Auth::user();
        return view('dashboard.create.values', compact('filter', 'user'));
    }

    public function store(Request $request)
    {
        $value = New Value();
        $value->category_id     = $request->category_id;
        $value->filter_id       = $request->filter_id;
        $value->name            = $request->name;
        $value->الاسم           = $request->الاسم;

        $value->save();
        return response()->json([
            'status' => true,
            'msg'    => 'تم اضافة القيمة بنجاح',
            'data'     => $value
        ]);
    }

    public function update(Request $request)
    {
        $value = Value::find($request->id);
        $value->name           = $request->name;
        $value->الاسم           = $request->الاسم;
        $value->save();

        return response()->json([
            'status' => true,
            'msg'    => 'تم تعديل القيمة بنجاح',
            'data'     => $value,
        ]);
    }

    public function destroy(Request $request)
    {
        $value = Value::find($request->id);
        $value->delete();

        return response()->json([
            'status' => true,
            'msg'    => 'تم حذف الفيلتر بنجاح',
            'id'     => $request->id
        ]);

    }

}
