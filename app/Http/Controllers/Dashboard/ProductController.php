<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class ProductController extends Controller
{
    public function index() {
    $categories = Categories::all();
    $allproduct= Product::all()->count();
    $products = Product::filter(request(['search', 'category_id']))->latest()->paginate(10)->whithQueryString();
  

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





    public function editProduct($id) {
        $product = Product::findOrFail($id);
        $categories = Categories::all();
        return view('dashboard.edit-product', compact('product', 'categories'));

        
    }



    public function updateProduct(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $validated = $request->validate([
        'category_id'   => 'required|integer|exists:categories,id',
        'name'          => 'required|string|max:255',
        'description'   => 'nullable|string',
        'image_url'     => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'price'         => 'required|numeric|min:0',
        'is_available'  => 'required|boolean',
    ]);

    // Jika ada gambar baru
    if ($request->hasFile('image_url')) {

        // hapus gambar lama (opsional tapi best practice)
        if ($product->image_url && Storage::disk('public')->exists($product->image_url)) {
            Storage::disk('public')->delete($product->image_url);
        }

        $imagePath = $request->file('image_url')->store('produk', 'public');
        $validated['image_url'] = $imagePath;
    }

    $product->update($validated);

    return redirect()->route('products')
        ->with('success', 'Produk berhasil diupdate!');
}


public function deleteProduct($id) {
    $product = Product::findOrFail($id);
    // Hapus gambar dari storage jika ada
    if ($product->image_url && Storage::disk('public')->exists($product->image_url)) {
        Storage::disk('public')->delete($product->image_url);
    }
    $product->delete();

    return redirect()->route('products')
        ->with('success', 'Produk berhasil dihapus!');
        
    }

}
        