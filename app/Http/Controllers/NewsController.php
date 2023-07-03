<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->get();
        $categories = Category::get();
        return view('news.index',['posts'=>$posts,'categories'=>$categories]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post=Post::where('id',$id)
                    ->first();
        return view('news.show',compact('post'));
    }

}
