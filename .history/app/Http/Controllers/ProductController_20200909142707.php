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
    public function add(Request $request, User $id)
    {
        $request->validate([
            'name' => 'required|name|unique:users,name,' . $id,
        ]);
        if ($request->isMethod('post')) {
            $data = $request->all();
            $category = new Category;
            $category->name = $data['category_name'];
            $category->description = $data['description'];
            $category->url = $data['url'];
            $category->save();
            return redirect('view-categories')->with('flash_message_success', 'Category added Successfully');
        }
    }
}
