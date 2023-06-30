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
                    <a href="{{ route('news.show', $posts[0]->id) }}" class="article featured-article featured-article-2">
                        <img src="./assets/images/featured/featured-2.jpg" alt="" class="article-image">
                        <span class="article-category">Twitch</span>

                        <div class="article-data-container">

                            <div class="article-data">
                                <span>24th of September</span>
                                <span class="article-data-spacer"></span>
                                <span>placeholdertext</span>
                            </div>
                         <h3 class="title article-title">The future of the channel</h3>
                        </div>
                    </a>
                    <a href="{{ route('news.show', $posts[0]->id) }}" class="article featured-article featured-article-3">
                        <img src="./assets/images/featured/featured-3.jpg" alt="" class="article-image">
                        <span class="article-category">Twitch</span>

                        <div class="article-data-container">

                            <div class="article-data">
                                <span>24th of September</span>
                                <span class="article-data-spacer"></span>
                                <span>placeholdertext</span>
                         </div>
                         <h3 class="title article-title">The future of the channel</h3>
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
                        <a href="#" class="article swiper-slide">
                            <img src="./assets/images/quick_read/quick_read_1.jpg" alt="" class="article-image">

                            <div class="article-data-container">

                                <div class="article-data">
                                    <span>24th of September</span>
                                    <span class="article-data-spacer"></span>
                                    <span>placeholdertext</span>
                                </div>
                                <h3 class="title article-title">The future of the channel</h3>
                            </div>
                        </a>

                        <a href="#" class="article swiper-slide">
                            <img src="./assets/images/quick_read/quick_read_2.jpg" alt="" class="article-image">

                            <div class="article-data-container">

                                <div class="article-data">
                                    <span>24th of September</span>
                                    <span class="article-data-spacer"></span>
                                    <span>placeholdertext</span>
                                </div>
                                <h3 class="title article-title">The future of the channel</h3>
                            </div>
                        </a>

                        <a href="#" class="article swiper-slide">
                            <img src="./assets/images/quick_read/quick_read_3.jpg" alt="" class="article-image">

                            <div class="article-data-container">

                                <div class="article-data">
                                    <span>24th of September</span>
                                    <span class="article-data-spacer"></span>
                                    <span>placeholdertext</span>
                                </div>
                                <h3 class="title article-title">The future of the channel</h3>
                            </div>
                        </a>

                        <a href="#" class="article swiper-slide">
                            <img src="./assets/images/quick_read/quick_read_4.jpg" alt="" class="article-image">

                            <div class="article-data-container">

                                <div class="article-data">
                                    <span>24th of September</span>
                                    <span class="article-data-spacer"></span>
                                    <span>placeholdertext</span>
                                </div>
                                <h3 class="title article-title">The future of the channel</h3>
                            </div>
                        </a>

                        <a href="#" class="article swiper-slide">
                            <img src="./assets/images/quick_read/quick_read_5.jpg" alt="" class="article-image">

                            <div class="article-data-container">

                                <div class="article-data">
                                    <span>24th of September</span>
                                    <span class="article-data-spacer"></span>
                                    <span>placeholdertext</span>
                                </div>
                                <h3 class="title article-title">The future of the channel</h3>
                            </div>
                        </a>

                        <a href="#" class="article swiper-slide">
                            <img src="./assets/images/quick_read/quick_read_6.jpg" alt="" class="article-image">

                            <div class="article-data-container">

                                <div class="article-data">
                                    <span>24th of September</span>
                                    <span class="article-data-spacer"></span>
                                    <span>placeholdertext</span>
                                </div>
                                <h3 class="title article-title">The future of the channel</h3>
                            </div>
                        </a>
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
                    <a href="#" class="article d-grid">
                        <div class="older-posts-article-image-wrapper">
                            <img src="./assets/images/older_posts/older_posts_1.jpg" alt="" class="article-image">
                        </div>
                        <div class="article-data-container">
                            <div class="article-data">
                                <span>24th of September</span>
                                <span class="article-data-spacer"></span>
                                <span>placeholdertext</span>
                            </div>
                            <h3 class="title article-title">The future of the channel</h3>
                            <p class="article-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus optio vero omnis repudiandae iste est perferendis tenetur temporibus perspiciatis repellat nesciunt</p>
                        </div>
                    </a>
                    
                    <a href="#" class="article d-grid">
                        <div class="older-posts-article-image-wrapper">
                            <img src="./assets/images/older_posts/older_posts_2.jpg" alt="" class="article-image">
                        </div>
                        <div class="article-data-container">

                            <div class="article-data">
                                <span>24th of September</span>
                                <span class="article-data-spacer"></span>
                                <span>placeholdertext</span>
                            </div>
                            <h3 class="title article-title">The future of the channel</h3>
                            <p class="article-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus optio vero omnis repudiandae iste est perferendis tenetur temporibus perspiciatis repellat nesciunt</p>
                        </div>
                    </a>
                    
                    <a href="#" class="article d-grid">
                        <div class="older-posts-article-image-wrapper">
                            <img src="./assets/images/older_posts/older_posts_3.jpg" alt="" class="article-image">
                        </div>
                        <div class="article-data-container">

                            <div class="article-data">
                                <span>24th of September</span>
                                <span class="article-data-spacer"></span>
                                <span>placeholdertext</span>
                            </div>
                            <h3 class="title article-title">The future of the channel</h3>
                            <p class="article-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus optio vero omnis repudiandae iste est perferendis tenetur temporibus perspiciatis repellat nesciunt</p>
                        </div>
                    </a>
                    
                    <a href="#" class="article d-grid">
                        <div class="older-posts-article-image-wrapper">
                            <img src="./assets/images/older_posts/older_posts_4.jpg" alt="" class="article-image">
                        </div>
                        <div class="article-data-container">

                            <div class="article-data">
                                <span>24th of September</span>
                                <span class="article-data-spacer"></span>
                                <span>placeholdertext</span>
                            </div>
                            <h3 class="title article-title">The future of the channel</h3>
                            <p class="article-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus optio vero omnis repudiandae iste est perferendis tenetur temporibus perspiciatis repellat nesciunt</p>
                        </div>
                    </a>
                    
                    <a href="#" class="article d-grid">
                        <div class="older-posts-article-image-wrapper">
                            <img src="./assets/images/older_posts/older_posts_5.jpg" alt="" class="article-image">
                        </div>
                        <div class="article-data-container">

                            <div class="article-data">
                                <span>24th of September</span>
                                <span class="article-data-spacer"></span>
                                <span>placeholdertext</span>
                            </div>
                            <h3 class="title article-title">The future of the channel</h3>
                            <p class="article-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus optio vero omnis repudiandae iste est perferendis tenetur temporibus perspiciatis repellat nesciunt</p>
                        </div>
                    </a>
                    
                    <a href="#" class="article d-grid">
                        <div class="older-posts-article-image-wrapper">
                            <img src="./assets/images/older_posts/older_posts_6.jpg" alt="" class="article-image">
                        </div>
                        <div class="article-data-container">

                            <div class="article-data">
                                <span>24th of September</span>
                                <span class="article-data-spacer"></span>
                                <span>placeholdertext</span>
                            </div>
                            <h3 class="title article-title">The future of the channel</h3>
                            <p class="article-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus optio vero omnis repudiandae iste est perferendis tenetur temporibus perspiciatis repellat nesciunt</p>
                        </div>
                    </a>
                </div>
                <div class="see-more-container">
                    <a href="#" class="btn see-more-btn place-items-center">
                        See more <i class="ri-arrow-right-s-line"></i>
                    </a>
                </div>
            </div>
        </section>

        <!--Popular tags-->
        <section class="popular-tags section">
            <div class="container">
                <h2 class="title section-title" data-name="Popular tags">Popular tags</h2>
                <div class="popular-tags-container d-grid">
                
                    <a href="#" class="article">
                        <span class="tag-name">#travel</span>
                        <img src="./assets/images/tags/travel-tag.jpg" alt="" class="article-image">
                    </a>

                    <a href="#" class="article">
                        <span class="tag-name">#food</span>
                        <img src="./assets/images/tags/food-tag.jpg" alt="" class="article-image">
                    </a>
                    
                    <a href="#" class="article">
                        <span class="tag-name">#technology</span>
                        <img src="./assets/images/tags/technology-tag.jpg" alt="" class="article-image">
                    </a>
                    
                    <a href="#" class="article">
                        <span class="tag-name">#health</span>
                        <img src="./assets/images/tags/health-tag.jpg" alt="" class="article-image">
                    </a>
                    
                    <a href="#" class="article">
                        <span class="tag-name">#nature</span>
                        <img src="./assets/images/tags/nature-tag.jpg" alt="" class="article-image">
                    </a>
                    
                    <a href="#" class="article">
                        <span class="tag-name">#fitness</span>
                        <img src="./assets/images/tags/fitness-tag.jpg" alt="" class="article-image">
                    </a>
                </div>
            </div>
        </section>
@endsection