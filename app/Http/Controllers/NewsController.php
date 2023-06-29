<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(5);

        return view('news.index',compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
