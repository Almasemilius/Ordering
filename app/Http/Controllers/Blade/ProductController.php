<?php

namespace App\Http\Controllers\Blade;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(10);
        // return response()->json($products);
        return view('index',compact('products'));
    }

    public function adminProducts()
    {
        $products = Product::paginate(10);
        return view('admin-products',compact('products'));
    }

    public function addProduct(Request $request)
    {
        return view('product-management');
    }

    public function editProduct($id)
    {
        $product = Product::findOrFail($id);
        if ($product) {
            return view('edit-product', compact('product'));
        }
    }

    public function updateProduct(Request $request,$id)
    {
        $product = Product::findOrfail($id);
        $product->update($request->all());
        // return redirect()->route('home');
        // dd("Here");

    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
    }
    public function postProduct(Request $request)
    {
        // dd($request->all());
        $product = Product::create($request->all());
        if ($product) {
            return back();
        }
    }
}
