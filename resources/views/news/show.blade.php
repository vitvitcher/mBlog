@extends('layouts.main')

@section('content')
    <!-- Blog post -->
    <section class="blog-post section-header-offset">
        <div class="blog-post-container container">

            <div class="blog-post-data">
                <h3 class="title blog-post-title">{{ $post->title }}</h3>
            <div class="container">
               {{$post->description}}
            </div>
        </div>
    </section>

    <!--Comments-->
    <section class="comments-section section">
        <div class="container comments-container">
            <div class="make-comment">
                <form action="{{ route('comments.store') }}" method="POST" class="form make-comment-form">
                <img src="./assets/images/Duck.png" alt="" class="make-comment-image">
                <textarea style="width: 50em; height: 5em;" class="form-control" rows="3" name="comment" placeholder="Your original comment"></textarea>
                    <button class="btn form-btn" type="submit">
                        <i class="ri-mail-send-line"></i>
                    </button>
                </form>
            </div>
            <h3 class="comments-title">Comments</h3>
            
            <div class="comments d-grid">
                <div class="comments-box d-grid">
                    <img src="./assets/images/Duck.png" alt="" class="comment-image">
                    <div class="comment-body">
                        <h5 class="comment-nickname">Duck</h5>
                        <p class="comment"><!--comment--></p>
                    </div>
                </div>
                <div class="comments-box d-grid">
                    <img src="./assets/images/Duck.png" alt="" class="comment-image">
                    <div class="comment-body">
                        <h5 class="comment-nickname">Duck</h5>
                        <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, officia nemo? Ullam libero deleniti dolore, laudantium non dolorem, vitae fugit facere, illum nobis ab blanditiis repellat voluptatem saepe perferendis cumque.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection