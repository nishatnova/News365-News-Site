<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class WebsiteController extends Controller
{
    private $blogs, $blog, $blogss, $categories, $category, $categoriess, $comments;
    public function index()
    {
        //$this->blogss = Blog::where(['category_id'=> $id, 'status'=>1])->orderBy('id','desc')->get();
        $this->categories = Category::all();
        $this->blogs = Blog::orderBy('id', 'desc')->get();

        return view('website.home.index', ['categories' => $this->categories,'blogs' => $this->blogs])->with(['last_post'=> Blog::orderBy('created_at', 'desc')->first(), 'sec_last_post'=>Blog::orderBy('created_at', 'desc')->skip(1)->first()]);
    }
    public function category($id)
    {

        $this->blogs = Blog::where(['category_id'=> $id, 'status'=>1])->orderBy('id','desc')->get();
        return view('website.category.index', ['blogs' => $this->blogs])->with('blog', Blog::find($id));
    }
    public function detail($id)
    {

        $this->categories = Category::all();
        $this->blog = Blog::find($id);

        $this->comments = Comment::where('blog_id', $id)->where('status', 1)->get();
        return view('website.detail.index',['blog' => $this->blog, 'categories' => $this->categories, 'comments' => $this->comments]);
    }


}
