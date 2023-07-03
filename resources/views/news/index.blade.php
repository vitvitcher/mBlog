@extends('layouts.main')

@section('content')

        

        <!--Featured articles-->
        <section class="featured-articles section-header-offset">

            <div class="featured-articles-container container d-grid">
                
                <div class="featured-content d-grid">

                    <div class="headline-banner">
                        <h3 class="headline fancy-border">
                            <span class="place-item-center">ATTENTION</span>
                        </h3>
                        <span class="headline-description">vitvitcher_the_duck got a new follower</span>
                    </div>

                    <a href="{{ route('news.show',$posts[0]->id) }}" class="article featured-article featured-article-1">
                        <img src="{{asset('storage/'.$posts[0]->photos[0]->src)}}" alt="" class="article-image">
                        <span class="article-category">Twitch</span>
                        
                        <div class="article-data-container">
                           
                            <div class="article-data">
                                <span>{{$posts[0]->updated_at}}</span>
                            </div>
                            <h3 class="title article-title">{{$posts[0]->title}}</h3>

                        </div>
                    </a>
                    <a href="{{ route('news.show', $posts[1]->id) }}" class="article featured-article featured-article-2">
                        <img src="{{asset('storage/'.$posts[1]->photos[0]->src)}}" alt="" class="article-image">
                        <span class="article-category">Twitch</span>

                        <div class="article-data-container">

                            <div class="article-data">
                                <span>{{$posts[1]->updated_at}}</span>
                            </div>
                         <h3 class="title article-title">{{$posts[1]->title}}</h3>
                        </div>
                    </a>
                    <a href="{{ route('news.show', $posts[2]->id) }}" class="article featured-article featured-article-3">
                        <img src="{{asset('storage/'.$posts[2]->photos[0]->src)}}" alt="" class="article-image">
                        <span class="article-category">Twitch</span>

                        <div class="article-data-container">

                        <div class="article-data">
                                <span>{{$posts[2]->updated_at}}</span>
                            </div>
                            <h3 class="title article-title">{{$posts[2]->title}}</h3>
                        </div>
                    </a>
                </div>

                <!--Sidebar-->
                <div class="sidebar d-grid">

                    <h3 class="title featured-content-title">Trending News</h3>
                    <a href="#" class="trending-news-box">
                        <div class="trending-news-image-box">
                            <span class="trending-number place-items-center">01</span>
                                <img src="./assets/images/trending/trending_1.jpg" alt="" class="article-image">

                        </div>
                        <div class="trending-news-data">
                            <div class="article-data">
                                <span>24th of September</span>
                                <span class="article-data-spacer"></span>
                                <span>placeholdertext</span>
                            </div>
                            <h3 class="title article-title">Sample article title</h3>
                        </div>
                    </a>
                    <a href="#" class="trending-news-box">
                        <div class="trending-news-image-box">
                            <span class="trending-number place-items-center">01</span>
                                <img src="./assets/images/trending/trending_2.jpg" alt="" class="article-image">

                        </div>
                        <div class="trending-news-data">
                            <div class="article-data">
                                <span>24th of September</span>
                                <span class="article-data-spacer"></span>
                                <span>placeholdertext</span>
                            </div>
                            <h3 class="title article-title">Sample article title</h3>
                        </div>
                    </a><a href="#" class="trending-news-box">
                        <div class="trending-news-image-box">
                            <span class="trending-number place-items-center">01</span>
                                <img src="./assets/images/trending/trending_3.jpg" alt="" class="article-image">

                        </div>
                        <div class="trending-news-data">
                            <div class="article-data">
                                <span>24th of September</span>
                                <span class="article-data-spacer"></span>
                                <span>placeholdertext</span>
                            </div>
                            <h3 class="title article-title">Sample article title</h3>
                        </div>
                    </a><a href="#" class="trending-news-box">
                        <div class="trending-news-image-box">
                            <span class="trending-number place-items-center">01</span>
                                <img src="./assets/images/trending/trending_4.jpg" alt="" class="article-image">

                        </div>
                        <div class="trending-news-data">
                            <div class="article-data">
                                <span>24th of September</span>
                                <span class="article-data-spacer"></span>
                                <span>placeholdertext</span>
                            </div>
                            <h3 class="title article-title">Sample article title</h3>
                        </div>
                    </a><a href="#" class="trending-news-box">
                        <div class="trending-news-image-box">
                            <span class="trending-number place-items-center">01</span>
                                <img src="./assets/images/trending/trending_5.jpg" alt="" class="article-image">

                        </div>
                        <div class="trending-news-data">
                            <div class="article-data">
                                <span>24th of September</span>
                                <span class="article-data-spacer"></span>
                                <span>placeholdertext</span>
                            </div>
                            <h3 class="title article-title">Sample article title</h3>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!--Quick Read-->
        <section class="quick-read section">

            <div class="container">

                <h2 class="title section-title" data-name="Quick read">Quick Read</h2>

                <div class="swiper">
                    <div class="swiper-wrapper">
                    @for($i=3;$i< 9 ;$i++)
                        <a href="#" class="article swiper-slide">
                            <img src="{{asset('storage/'.$posts[2]->photos[0]->src)}}" alt="" class="article-image">

                            <div class="article-data-container">

                                <div class="article-data">
                                    <span>{{$posts[$i]->updated_at}}</span>
                                </div>
                                <h3 class="title article-title">{{$posts[$i]->title}}</h3>
                            </div>
                        </a>
                        @endfor
                    </div>

                    <div class="swiper-button-prev swiper-controls"></div>
                    <div class="swiper-button-next swiper-controls"></div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!--Older Posts-->
        <section class="older-posts section">

            <div class="container">

                <h2 class="title section-title" data-name="Older posts">Older posts</h2>
                <div class="older-posts-grid-wrapper d-grid">
                @for($i=9;$i < 15;$i++)
                    <a href="#" class="article d-grid">
                        <div class="older-posts-article-image-wrapper">
                            <img src="" alt="" class="article-image">
                        </div>
                        <div class="article-data-container">
                            <div class="article-data">
                                <span>{{$posts[$i]->updated_at}}</span>
                            </div>
                            <h3 class="title article-title">{{$posts[$i]->title}}</h3>
                            <p class="article-description">{{\Str::limit($posts[$i]->description, 50)}}</p>
                        </div>
                    </a>
                    @endfor
                </div>
            </div>
        </section>

        <!--Popular tags-->
        <section class="popular-tags section">
            <div class="container">
                <h2 class="title section-title" data-name="Popular tags">Popular tags</h2>
                <div class="popular-tags-container d-grid">
                @for($i=0;$i < 3;$i++)
                    <a href="#" class="article">
                        <span class="tag-name">#{{$categories[$i]->name}}</span>
                    </a>
                @endfor
                </div>
            </div>
        </section>
@endsection