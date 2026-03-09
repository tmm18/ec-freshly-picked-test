<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
public function index()
{
        $products = Product::all();
    return view('products',compact('products'));
}

public function search(Request $request)
{
    $query = Product::query();

    if(!empty($request->keyword)){
        $query->where('name','like','%'.$request->keyword.'%');
    }

    if(!empty($request->sort)){
        $query->orderBy('price',$request->sort);
    }

    $products = $query->get();

    return view('products',compact('products'));
}
$products=$query->paginate(6);

returm view('products',compact('products'));

}
