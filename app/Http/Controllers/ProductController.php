<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return view('add-product');
    }

        public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'qty' => $request->qty,
        ]);

        return "Product Added Successfully";
    }
}
