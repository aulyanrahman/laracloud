<?php
namespace App\Http\Controllers;

use App\Models\Product_Asset;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        // $product_asset = Product_Asset::all();
        return view('product.index', compact('product'));
    }
    
    public function create()
    {
        $product = Product::all();
        // $product_asset = Product_Asset::all();
        return view('product.create', compact('product'));
    }

    public function store(Request $request)
    {
        Product::create($request->except(['_token', 'submit']));

        return redirect('/product');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $product_asset = Product_Asset::all();
        return view('product.edit', compact(['product', 'product_asset']));
    }

    public function update($id, Request $request)
    {
        $product = Product::find($id);
        $product->update($request->except(['_token', 'submit']));
        return redirect('/product');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/product');
    }
}
