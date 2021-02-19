<?php

namespace App\Http\Controllers\Dashboard;

use App\User;
use App\Order;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $productsApprovedCount = Product::where('status', 1)->count();
        $productsNotApprovedCount = Product::where('status', 0)->count();
        $allProductsCount = Product::all()->count();
        $usersCount = User::all()->count();
        $user = Auth::user();
        return view('dashboard.dashboard', compact('user','usersCount', 'productsApprovedCount', 'productsNotApprovedCount', 'allProductsCount'));
    }
}
