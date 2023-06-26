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
        <div class="content-wrapper">
                @yield('content')
        </div>
        

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
        <script src="{{URL::asset('js/swiper-bundle.min.js')}}"></script>
        <script src="{{URL::asset('js/main.js')}}></script>
    </body>
    <footer>
        
    </footer>
</html>