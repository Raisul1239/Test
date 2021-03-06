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
            $category = new Category;
            $category->name = $data['product_name'];
            $category->qty = $data['product_qty'];
            $category->url = $data['product_qty'];
            $category->save();
            return redirect('view-categories')->with('flash_message_success', 'Category added Successfully');
        }
    }
}
