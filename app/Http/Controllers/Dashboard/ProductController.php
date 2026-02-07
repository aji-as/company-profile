<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;
use LDAP\Result;

class ProductController extends Controller
{
    public function index() {
    $categories = Categories::all();
    $allproduct= Product::all()->count();
    $products = Product::filter(request(['search', 'category_id']))->latest()->paginate(10);
  

        return view('dashboard.products', compact('products', 'categories','allproduct'));
    }


    public function addProduct(){
        $categories = Categories::all();
        return view('dashboard.add-product', compact('categories'));

    }

    public function storeProduct(Request $request){

    $validated = $request->validate([
        'category_id'=>'required|integer|exists:categories,id',
        'name' => 'required|string|max:255 ',
        'description' => 'nullable|string',
        'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'price' => 'required|numeric|min:0',
        'is_available'=>'required|bool'  ]);

        

    if ($request->hasFile('image_url')) {
            $imagePath = $request->file('image_url')->store('produk', 'public');
            $validated['image_url'] = $imagePath;
    }

    $result = Product::create($validated);

    if(!$result){
        return redirect()->back()->with('gagal','produk gagal di tambahkan');
    }
        
    return redirect()->route('products')
            ->with('success', 'Produk berhasil ditambahkan!');


    }





    public function editProduct() {
        
    }
}
