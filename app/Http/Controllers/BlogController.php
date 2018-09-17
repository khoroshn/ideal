<?php

namespace App\Http\Controllers;

use App\Post;
use App\Blog;
use View;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function showPosts(){
        $posts = Post::paginate(5);
        if (request()->ajax()) {
            return Response::json(View::make('theme.blog.posts', array('posts' => $posts))->render());
        }
        return View::make('theme.blog.blog', array('posts' => $posts));
    }


    public function index(){
        $blogs = Blog::all();
        return response()->json($blogs);
    }
}
