<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    private $blogs, $blog, $categories, $category;
    public function index()
    {
        return view('admin.category.index');
    }
    public function manage()
    {
        $this->categories = Category::all();
        return view('admin.category.manage', ['categories' => $this->categories]);
    }
    public function store(Request $request)
    {
        Category::newCategory($request);
        return back()->with('message', 'Category Created Successfully!');

    }

    public function edit($id)
    {
        $this->category = Category::find($id);
        return view('admin.category.edit', ['category' => $this->category]);
    }

    public function update(Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/category/manage')->with('message', 'Category info updated Successfully!');
    }
    public function delete($id)
    {
        Category::deleteCategory($id);
        return back()->with('message', 'Category Deleted Successfully!');
    }
}
