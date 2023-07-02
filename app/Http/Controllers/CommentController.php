<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\PostComment;
use Auth;

class CommentController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::latest()->paginate(5);
        
        return view('comments.index',compact('comments'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comments.create');
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
            
            'comment' => 'required',
        ]);
        
        $comment = new Comment;
        $comment->comment=$request->all()['comment'];
        //$comment->user_id =Auth::user()->id? Auth::user()->id:0;
        $comment->user_id= array_key_exists('user_id',$request->all())? $request->all()['user_id']:Auth::user()->id;
        //$comment->user_id =Auth::user()->id;
        $comment->isUpdated= $request->all()['is_updated'];
        $comment->hide= array_key_exists('hide',$request->all())? $request->all()['hide']:0;
        $comment->save();
     

        $post_comment=new PostComment;
        $post_comment->post_id= $request->all()['post_id'];
        $post_comment->comment_id=$comment->id;
        $post_comment->save();
        return redirect()->route('news.show', 27)
                        ->with('success','Comment created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        return view('comments.show',compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        return view('comments.edit',compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'comment' => 'required',
        ]);
    
        $comment->update($request->all());
    
        return redirect()->route('comments.index')
                        ->with('success','Comment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
    
        return redirect()->route('comments.index')
                        ->with('success','Comment deleted successfully');
    }
}
