<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    //
    public function index(){
        return view('home.pages.index');
    }
    public function redirect(){
        return view('home.pages.index');
    }
    public function showAboutUs(){
        return view('home.pages.about');
    }
    public function showShop(){
        return view('home.pages.shop');
    }
    public function showFaq(){
        return view('home.pages.faq');
    }
    public function showContact(){
        return view('home.pages.contact');
    }
    public function showWishlist(){
        return view('home.pages.wishlist');
    }
    public function showOrders(){
        $user = Auth::user();
        return view('home.pages.orders',compact('user'));
    }
    public function showAddress(){
        $user = Auth::user();
        return view('home.pages.address',compact('user'));
    }
    public function showAccountdetails(){
        $user = Auth::user();
        return view('home.pages.accountdetails',compact('user'));
    }

    public function showUserAccount(){
        $user = Auth::user();
        return view('home.pages.useraccount', compact('user'));
    }


}
