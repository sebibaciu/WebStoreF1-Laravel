<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class MyAccountController extends Controller
{
    public function orders()
    {
        $viewData = [];
        $viewData["title"] = "My Profile - Online Store";
        $viewData["subtitle"] =  "My Profile";
        $viewData["orders"] = Order::with(['items.product'])->where('user_id', Auth::user()->getId())->orderBy('created_at', 'desc')->get();
        // $viewData["orders"] = Order::where('user_id', Auth::user()->getId())->get();
        $viewData["balance"] = Auth::user()->getBalance();
        $viewData["size"] = Auth::user()->getSize();
        return view('myaccount.orders')->with("viewData", $viewData);

    }




}
