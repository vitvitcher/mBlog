<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Photo;
use App\Models\PostCategory;
use App\Models\PostPhoto;
use Auth;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        
        return view('posts.index',compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('posts.create',[
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'file' => 'required',
        ]);

        $post = new Post;
        $post->title = $request->all()['title'];
        $post->description = $request->all()['description'];
        $post->user_id = Auth::user()->id;
        $post->show= array_key_exists('show',$request->all())? $request->all()['show']:0;
        $post->save();

        foreach($request->all()['category'] as $category){
            $post_category=new PostCategory;
            $post_category->post_id= $post->id;
            $post_category->category_id=1*$category;
            $post_category->save();
        }


        $path = $request->file('file')->store('public/images');
        $image=new Photo;
        $image->title=$request->file('file')->getFilename();
        $image->src=str_replace('public','',$path);
        $image->main=1;
        $image->save();


        $post_image=new PostPhoto;
        $post_image->post_id= $post->id;
        $post_image->photo_id=$image->id;
        $post_image->save();
        

        
        return redirect()->route('posts.index')
                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
    

        $post->title = $request->all()['title'];
        $post->description = $request->all()['description'];
        $post->show= array_key_exists('show',$request->all())? $request->all()['show']:0;
        $post->save();
    
        return redirect()->route('posts.index')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
    
        return redirect()->route('posts.index')
                        ->with('success','Post deleted successfully');
    }
}