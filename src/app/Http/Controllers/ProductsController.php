<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Request\ProductRequest;


class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::paginate(6);

        return view('products', compact('products'));

    }

    public function search(Request $request)
    {
        $query = Product::query();

        if (!empty($request->keyword)) {
            $query->where('name', 'like', '%' . $request->keyword . '%');
        }

        if (!empty($request->sort)) {
            $query->orderBy('price', $request->sort);
        }

        $products = $query->paginate(6)->withQueryString();

        return view('products', compact('products'));

    }


    public function show (Product $product)
    {
        return view('detail', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'description' => 'required',
        ]);

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return redirect('/products');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/products');
    }
}