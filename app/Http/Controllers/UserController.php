<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.beranda');
    }

    public function menu()
    {
        return view('user.menu');
    }

    public function about()
    {
        return view('user.tentangkami');
    }

    public function cart()
    {
        return view('user.keranjang');
    }
}
