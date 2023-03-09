<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::take(6)->get();
        $products = Product::with('galleries')->take(8)->latest()->get();

        return view('pages.home', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
