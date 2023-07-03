@extends('layouts.main')

@section('content')
    <!-- Blog post -->
    <section class="blog-post section-header-offset">
        <div class="blog-post-container container">

            <div class="blog-post-data">
                <h3 class="title blog-post-title">{{ $post->title }}</h3>
            <div class="container">
               {!! $post->description !!}
            </div>
        </div>
    </section>

    <!--Comments-->
    <section class="comments-section section">
        <div class="container comments-container">
            <div class="make-comment">
                <form action="{{ route('comments.store') }}" method="POST" class="form make-comment-form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <img src="{{asset('storage/user_images/default.png')}}" alt="" class="make-comment-image">
                    <textarea class="form-control comment-box" rows="3" name="comment" placeholder="Your original comment"></textarea>
                        <button class="btn form-btn" type="submit">
                            <i class="ri-mail-send-line"></i>
                        </button>
                </form>
            </div>
            <h3 class="comments-title">Comments</h3>
            <div class="comments d-grid">
            @foreach ($post->comments as $comment)
                <div class="comments-box d-grid">
                    <img src="{{asset('storage/user_images/default.png')}}" alt="" class="comment-image">
                    <div class="comment-body">
                        <h5 class="comment-nickname">{{$comment->user->name}}</h5>
                        <p class="comment">{{$comment->comment}}</p></br>
                        <p class="comment-edited" {{ $comment->isUpdated?'':'hidden' }}> edited</p>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
@endsection