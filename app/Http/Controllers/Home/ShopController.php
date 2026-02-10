<?php

namespace App\Http\Controllers\Home;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categories;

class ShopController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        $products = Product::latest()->paginate(12)->withQueryString();
        return view('home.shope', compact('products', 'categories'));
    }

    public function show(Product $product)
    {
        $product = Product::findOrFail($product->id);
        return view('home.shop-detail', compact('product'));
    }

    
    public function order(Product $product) {
        $product = Product::findOrFail($product->id);

        return view('home.chekout', compact('product'));
    }

    public function orderStore(Request $request)
    {

        
    }

}
