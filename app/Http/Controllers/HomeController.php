<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function menu()
    {
        return view('menu');
    }

    public function cart()
    {
        return view('cart');
    }

    public function payment()
    {
        return view('payment');
    }

    public function status()
    {
        return view('status');
    }

}
