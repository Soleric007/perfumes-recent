<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $user = Auth::user();
        return view('admin.pages.dashboard', compact('user'));
    }
    public function createproduct()
    {
        $user = Auth::user();
        return view('admin.pages.createproduct', compact('user'));
    }
    public function showproducts()
    {
        $user = Auth::user();
        return view('admin.pages.products', compact('user'));
    }
    public function showproductdetails()
    {
        $user = Auth::user();
        return view('admin.pages.productdetails', compact('user'));
    }
    public function showorderdetails()
    {
        $user = Auth::user();
        return view('admin.pages.orderdetails', compact('user'));
    }
    public function showorder()
    {
        $user = Auth::user();
        return view('admin.pages.orders', compact('user'));
    }
    public function showcustomers()
    {
        $user = Auth::user();
        return view('admin.pages.customers', compact('user'));
    }
}
