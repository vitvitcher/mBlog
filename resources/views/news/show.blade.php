@extends('layouts.main')

@section('content')
    <!-- Blog post -->
    <section class="blog-post section-header-offset">
        <div class="blog-post-container container">

            <div class="blog-post-data">
                <h3 class="title blog-post-title">{{ $post->title }}</h3>
                <div class="article-data">
                    <span>Do you remember</span>
                    <span class="article-data-spacer"></span>
                    <span>21st of September</span>
                </div>
                <img src="./assets/images/featured/featured-1.jpg" alt="">
            </div>

            <div class="container">
                <p>Dummy</p>
                <p>Dummy 2</p>

                <blockquote class="quote">
                    <p>
                        <span> <i class="ri-double-quotes-l"></i></span>
                        amgus
                        <span> <i class="ri-double-quotes-r"></i></span>
                    </p>
                </blockquote>
                <p>Dummy 3</p>
                <div class="author d-grid">
                    <div class="author-image-box">
                        <img src="./assets/images/author.jpg" alt="" class="article-image">
                    </div>

                    <div class="author-about">
                        <h3 class="author-name">Some Guy</h3>
                        <p>Incert tex here</p>
                        <ul class="list social-media">
                            <li class="list-item">
                                <a href="#" class="list-link"><i class="ri-instagram-line"></i></a>
                            </li>
                            <li class="list-item">
                                <a href="#" class="list-link"><i class="ri-facebook-circle-line"></i></a>
                            </li>
                            <li class="list-item">
                                <a href="#" class="list-link"><i class="ri-twitter-line"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Comments-->
    <section class="comments-section section">
        <div class="container comments-container">
            <div class="make-comment">
                <img src="./assets/images/Duck.png" alt="" class="make-comment-image">
                <form action="" class="form make-comment-form">
                    <input type="text" class="form-input" placeholder="Enter your comment here">
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
                        <p class="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, officia nemo? Ullam libero deleniti dolore, laudantium non dolorem, vitae fugit facere, illum nobis ab blanditiis repellat voluptatem saepe perferendis cumque.</p>
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