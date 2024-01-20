<?php

namespace App\Http\Controllers;

use App\Models\Homemodel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homes = Homemodel::all();
        return view('home', compact('homes'));
        // return dd($homes);
    }
    // public function product()
    // {
    //     return view('product');
    // }
    // public function category()
    // {
    //     return view('category');
    // }
}
