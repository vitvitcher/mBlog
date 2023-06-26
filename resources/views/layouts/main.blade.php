<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <title>Duck Pond | Home</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
        <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/Duck.png">
        <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
    </head>
    <body>

        <!--Navbar-->
        <header class="header" id="header">
            <nav class="navbar container">
                <a href="./index.html">
                    <h2 class="logo">Duck Pond</h2>
                </a>
            <div class="menu" id="menu">
                <ul class="list">
                    <li class="list-item">
                        <a href="#" class="listl-link current">Home</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="listl-link">Categories</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="listl-link">Reviews</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="listl-link">News</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="listl-link">Membership</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="listl-link">Links</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="listl-link screen-lg-hidden">Sign in</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="listl-link screen-lg-hidden">Sign up</a>
                    </li>
                </ul>

            </div>

            <div class="list list-right">
                <button class="btn place-items-center" id="theme-toggle-btn">
                    <i class="ri-sun-line sun-icon"></i>
                    <i class="ri-moon-line moon-icon"></i>
                </button>


                <button class="btn place-items-center" id="search-icon">
                    <i class="ri-search-line"></i>
                </button>


                <button class="btn place-items-center screen-lg-hidden menu-toggle-icon" id="menu-toggle-icon">
                    <i class="ri-menu-3-line open-menu-icon"></i>
                    <i class="ri-close-line close-menu-icon"></i>
                </button>
                
                <a href="#" class="list-link screen-sm-hidden">Sign in</a>
                <a href="#" class="list-link screen-sm-hidden btn sign-up-btn fancy-border">
                     <span>Sign up</span>
                </a>

            </div>
            </nav>
        </header>
        <div class="search-form-container container" id="search-form-container">
            
            <div class="form-container-inner">
                <form action="" class="form">
                    <input type="text" class="form-input" placeholder="What are you ducking for?">
                    <button class="btn form-btn" type="submit">
                        <i class="ri-search-line"></i>
                    </button>
                </form>
                <span class="form-note">Or press ESC to close.</span>
            </div>

            <button class="btn form-close-btn place-items-center" id="form-close-btn">
                <i class="ri-close-line"> </i>
            </button>
        </div>

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

                    <a href="./post.html" class="article featured-article featured-article-1">
                        <img src="./assets/images/featured/featured-1.jpg" alt="" class="article-image">
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
                    <a href="./post.html" class="article featured-article featured-article-2">
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
                    <a href="./post.html" class="article featured-article featured-article-3">
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

        <!--Newsletter-->
        <section class="newsletter section">
            <div class="container">
                <h2 class="title section-title" data-name="Newsletter">Newsletter</h2>

                <div class="form-container-inner">

                    <h6 class="title newsletter-title">Follow vitvitcher_the_duck</h6>
                    <p class="newsletter-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                    <form action="" class="form">
                        <input type="text" class="form-input" placeholder="Enter your email adress">
                        <button class="btn form-btn" type="submit">
                            <i class="ri-mail-send-line"></i>
                        </button>
                    </form>

                </div>
            </div>
        </section>

        

        <!--Footer-->
        <footer class="footer section">
            <div class="footer-container container d-grid">

                <div class="company-data">
                    <a href="./index.html">
                        <h2 class="logo">Duck Pond</h2>
                    </a>
                    <p class="company-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                    <ul class="list social-media">
                        <li class="list-item">
                            <a href="#" class="list-link">
                                <i class="ri-twitch-line"></i>
                            </a>
                            <a href="#" class="list-link">
                                <i class="ri-youtube-line"></i>
                            </a>
                            <a href="#" class="list-link">
                                <i class="ri-discord-line"></i>
                            </a>
                        </li>
                    </ul>

                    <span class="copyright-notice">&copy; 2023 vitvitcher_the_duck. All rights reserved.</span>
                </div>

                <div>
                    <h6 class="title footer-title">Categories</h6>

                    <ul class="list footer-list">
                        <li class="list-item">
                            <a href="#" class="list-link">Sample item</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Sample item</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Sample item</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Sample item</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Sample item</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Sample item</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Sample item</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h6 class="title footer-title">Useful links</h6>

                    <ul class="list footer-list">
                        <li class="list-item">
                            <a href="#" class="list-link">Sample item</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Sample item</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Sample item</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Sample item</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Sample item</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Sample item</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Sample item</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h6 class="title footer-title">Social</h6>

                    <ul class="list footer-list">
                        <li class="list-item">
                            <a href="#" class="list-link">Sample item</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Sample item</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Sample item</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Sample item</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Sample item</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Sample item</a>
                        </li>
                        <li class="list-item">
                            <a href="#" class="list-link">Sample item</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <script src="./assets/js/swiper-bundle.min.js"></script>
        <script src="./assets/js/main.js"></script>
    </body>
    <footer>
        
    </footer>
</html>