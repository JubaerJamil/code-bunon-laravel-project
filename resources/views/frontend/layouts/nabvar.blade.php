<div class="navbar-area">

    <div class="mobile-nav">
        <a href="{{ url('/') }}" class="logo">
            <img src="{{ asset('frontend-asset/images/logos/Code_Bunon_logo.png')}}" class="logo-one" alt="Logo">
            <img src="{{ asset('frontend-asset/images/logos/Code_Bunon_logo.png')}}" class="logo-two" alt="Logo">
        </a>
    </div>

    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('frontend-asset/images/logos/Code_Bunon_logo.png')}}" class="logo-one" alt="Logo">
                    <img src="{{ asset('frontend-asset/images/logos/Code_Bunon_logo.png')}}" class="logo-two" alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link {{ Request::route()->named('home_page') ? 'active' : '' }}">
                                Home
                            </a>
                            
                        </li>

                        <li class="nav-item">
                            <a href="{{ Route('service-page')}}" class="nav-link 
                            {{ Request::route()->named('service-page') ? 'active' : '' }}
                             {{ Request::route()->named('service_content') ? 'active' : '' }}
                             ">
                                Services
                                <i class="bx bx-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu">

                                @foreach ($allService as $item)
                                <li class="nav-item">
                                    <a href="{{ Route('service-page')}}" class="nav-link">
                                        {{$item->title}}
                                    </a>
                                </li>
                                @endforeach

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/about') }}" class="nav-link {{ Request::route()->named('about_page') ? 'active' : '' }}">
                                About
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/our-team') }}" class="nav-link {{ Request::route()->named('team_page') ? 'active' : '' }}">
                                Our Team
                            </a>
                            {{-- <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog-1.html" class="nav-link">
                                        Blog Style One
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-2.html" class="nav-link">
                                        Blog Style Two
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-details.html" class="nav-link">
                                        Blog Details
                                    </a>
                                </li>
                            </ul> --}}
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/blog') }}" class="nav-link {{ Request::route()->named('blog_page') ? 'active' : '' }}">
                                Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/contact') }}" class="nav-link {{ Request::route()->named('contact_page') ? 'active' : '' }}">
                                Contact
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#demo" class="nav-link">
                                Demo
                            </a>
                        </li>
                    </ul>
                    <div class="nav-side d-display">
                        <div class="nav-side-item">
                            <div class="search-box">
                                <i class="bx bx-search"></i>
                            </div>
                        </div>
                        <div class="nav-side-item">
                            <div class="get-btn">
                                <a href="{{ url('/contact') }}" class="default-btn btn-bg-two border-radius-50">Get A Quote
                                    <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>

                        {{-- <div class="nav-side-item">
                            <div class="cart-containerr">
                                <a href="#" class="cart-icon" style="font-size: 37px;">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </a>
                                <span class="cart-countt">3</span>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="side-nav-responsive">
        <div class="container-max">
            <div class="dot-menu">
                <div class="circle-inner">
                    <div class="in-circle circle-one"></div>
                    <div class="in-circle circle-two"></div>
                    <div class="in-circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="side-nav-inner">
                    <div class="side-nav justify-content-center align-items-center">
                        <div class="side-nav-item nav-side">
                            <div class="search-box">
                                <i class="bx bx-search"></i>
                            </div>
                            <div class="get-btn">
                                <a href="contact.html" class="default-btn btn-bg-two border-radius-50">Get A Quote
                                    <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
