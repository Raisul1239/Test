<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('add_category');
    }
    public function addCategory(Request $request)
    {
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
    public function viewCategories()
    {
        $categories = Category::get();
        return view('view-categories')->with(compact('categories'));
    }
    public function editCategory(Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            Category::where(['id' => $id])->update(['name' => $data['category_name'], 'description' => $data['description'], 'url' => $data['url']]);
            return redirect('/admin/view-categories')->with('flash_message_success', 'Category Updated successfully');
        }

        $categoryDetails = Category::where(['id' => $id])->first();
        return view('admin.categories.edit_category')->with(compact('categoryDetails'));
    }
}
