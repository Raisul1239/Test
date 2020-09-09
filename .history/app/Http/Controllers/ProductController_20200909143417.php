<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('product.add_product');
    }
    public function addProduct(Request $request, User $id)
    {
        $request->validate([
            'name' => 'required|name|unique:users,name,' . $id,
        ]);
        if ($request->isMethod('post')) {
            $data = $request->all();
            $ = new Category;
            $category->name = $data['product_name'];
            $category->qty = $data['product_qty'];
            $category->price = $data['product_price'];
            $category->save();
            return redirect('view-categories')->with('flash_message_success', 'Category added Successfully');
        }
    }
}
