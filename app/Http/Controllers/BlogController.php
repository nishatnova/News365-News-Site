<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;

class BlogController extends Controller
{
    private $blogs, $blog, $categories, $category;
    public function index()
    {
        $this->categories = Category::all();
        return view('admin.blog.index',['categories' => $this->categories]);
    }
    public function manage()
    {
        $this->blogs = Blog::all();
        return view('admin.blog.manage', ['blogs' => $this->blogs]);
    }
    public function store(Request $request)
    {
        Blog::newBlog($request);
        return back()->with('message', 'Blog Created Successfully!');

    }
    public function edit($id)
    {
        $this->categories = Category::all();
        $this->blog = Blog::find($id);
        return view('admin.blog.edit', ['blog' => $this->blog, 'categories' => $this->categories]);
    }

    public function update(Request $request, $id)
    {
        Blog::updateBlog($request, $id);
        return redirect('/blog/manage')->with('message', 'Blog info updated Successfully!');
    }
    public function delete($id)
    {
        Blog::deleteBlog($id);
        return back()->with('message', 'Blog Deleted Successfully!');
    }
}
