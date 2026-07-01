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

    // Insert with form validation 
        public function create_product()
    {
        return view('product');
    }

    // FORM STORE
    public function store_product(Request $request)
    {

        $request->validate([
            'name' => 'required|min:3|max:20',
            'price' => 'required|numeric',
            'qty' => 'required|numeric|min:1|max:100'

        ]);

        return "Product Saved Successfully";

    }
}
