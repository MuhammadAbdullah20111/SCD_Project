<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function products()
    {
        return view('products');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }


public function data()
{
    // Fetch all records from the products table
    $products = DB::table('products')->get();

    // Pass the data to the Blade view
    return view('products', compact('products'));
}

}
