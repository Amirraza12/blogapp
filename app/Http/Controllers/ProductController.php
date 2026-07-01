<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('add-product');
    }


    public function index()
    {
        $products = Product::all();
        return view('productlist', compact('products'));
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

    public function edit($id)
    {
        $product = Product::find($id);
        return view('editProduct', compact('product'));
    }

    public function update(Request $request, $id)
        {
        $request->validate([
        'name' => 'required|min:3|max:50',
        'price' => 'required|numeric',
        'qty' => 'required|numeric'
        ]);

        $product = Product::find($id);

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'qty' => $request->qty
        ]);

        return redirect('/products')
                ->with('success', 'Product Updated Successfully');

        }

    public function destroy($id)
{
$product = Product::find($id);
$product->delete();

return redirect('/products')
        ->with('success', 'Product Deleted Successfully');
}


}
