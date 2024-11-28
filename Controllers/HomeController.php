<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //kembali ke home
    public function index()
    {
        return view('home');
    }
}
