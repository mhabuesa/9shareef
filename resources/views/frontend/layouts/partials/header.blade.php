    <header class="header fixed-top navbar-expand-xl mb-5">
        <div class="container-fluid">
            <div class="header__main">
                <!-- logo -->
                <div class="logo">
                    <a class="logo__link logo--dark" href="{{ route('index') }}">
                        <img src="{{ asset('frontend') }}/assets/img/logo/logo-dark.png" alt="" class="logo__img">
                    </a>
                    <a class="logo__link logo--light" href="{{ route('index') }}">
                        <img src="{{ asset('frontend') }}/assets/img/logo/logo-white.png" alt=""
                            class="logo__img">
                    </a>
                </div><!--/-->

                <div class="header__navbar">
                    <nav class="navbar">
                        <!--navbar-collapse-->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ">
                                <!--Homes -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}"
                                        href="{{ route('index') }}">Home</a>
                                </li>

                                <!--Posts features -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ request()->routeIs('category.*') ? 'active' : '' }}" href="javascript:void(0)" id="navbarDropdown2"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                                    <ul class="dropdown-menu ">
                                        @foreach ($categories as $category)
                                            <li>
                                                <a class="dropdown-item " href="{{ route('category', $category->slug) }}">{{ $category->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <!--Blogs-->
                                <li class="nav-item dropdown">
                                    <a class="nav-link  dropdown-toggle" href="javascript:void(0)" id="navbarDropdown3"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false"> blogs </a>
                                    <ul class="dropdown-menu ">
                                        <li><a class="dropdown-item " href="blog-grid.html">Blog grid</a></li>
                                        <li><a class="dropdown-item" href="blog-masonry.html">Blog masonry</a></li>
                                        <li><a class="dropdown-item" href="blog-list.html">Blog list</a></li>
                                        <li><a class="dropdown-item" href="blog-classic.html">Blog classic</a></li>
                                    </ul>
                                </li>

                                <!--Pages-->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown4"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false"> pages </a>
                                    <ul class="dropdown-menu ">
                                        <li><a class="dropdown-item" href="author.html">author </a></li>
                                        <li><a class="dropdown-item" href="about.html">about us </a> </li>
                                        <li><a class="dropdown-item" href="contact.html">contact us</a></li>
                                        <li><a class="dropdown-item" href="login.html">login</a></li>
                                        <li><a class="dropdown-item" href="signup.html">Sign up</a></li>
                                        <li><a class="dropdown-item" href="page404.html">404 page</a></li>
                                    </ul>
                                </li>

                                <!--Countdown-->
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('countdown') ? 'active' : '' }}" href="{{ route('countdown') }}"> Countdown </a>
                                </li>
                                <!--contact -->
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}"> contact </a>
                                </li>
                            </ul>
                        </div>
                        <!--/-->
                    </nav>
                </div>

                <!-- header actions -->
                <div class="header__action-items">
                    <!--header-social-->
                    <ul class="list-inline social-media social-media--layout-one">
                        <li class="social-media__item">
                            <a href="#" class="social-media__link">
                                <i class="bi bi-facebook"></i>
                            </a>
                        </li>

                        <li class="social-media__item">
                            <a href="#" class="social-media__link">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </li>
                        <li class="social-media__item">
                            <a href="#" class="social-media__link"><i class="bi bi-twitter-x"></i></a>
                        </li>
                        <li class="social-media__item">
                            <a href="#" class="social-media__link"><i class="bi bi-youtube"></i></a>
                        </li>
                    </ul>

                    <!--theme-switch-->
                    <div class="theme-switch">
                        <label class="theme-switch__label" for="checkbox">
                            <input type="checkbox" id="checkbox" class="theme-switch__checkbox">
                            <span class="theme-switch__slider round ">
                                <i class="bi bi-sun icon-light theme-switch__icon theme-switch__icon--light"></i>
                                <i class="bi bi-moon icon-dark theme-switch__icon theme-switch__icon--dark"></i>
                            </span>
                        </label>
                    </div>

                    <!--search-icon-->
                    <div class="search-icon">
                        <a href="#search" class="search-icon__link">
                            <i class="bi bi-search search-icon__icon"></i>
                        </a>
                    </div>

                    <!--navbar-toggler-->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler__icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </header>
