<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('product.add_product');
    }
    public function addProduct(Request $request)
    {
        //dd($request->product_price);
        // $request->validate([
        //     'name' => 'required|name|unique:product,name,' . $id,
        // ]);
        if ($request->isMethod('post')) {
            $data = $request->all();
            $product = new Product;
            $product->name = $data['product_name'];
            $product->qty = $data['product_qty'];
            $product->price = $data['product_price'];
            $product->orderdate = $data['orderdate'];

            $product->save();
            return redirect('product.view-product')->with('flash_message_success', 'Category added Successfully');
        }
    }
    public function viewProducts()
    {
        $products = Products::get();
        return view('product.view-p')->with(compact('categories'));
    }
}
