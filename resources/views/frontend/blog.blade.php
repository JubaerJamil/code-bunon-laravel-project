@extends('frontend.layouts.app')
@section('forntend_content')

<div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Blogs</h3>
            <ul>
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <i class="bx bx-chevrons-right"></i>
                </li>
                <li>Blog</li>
            </ul>
        </div>
    </div>
    <div class="inner-shape">
        <img src="frontend-asset/images/shape/inner-shape.png" alt="Images">
    </div>
</div>
<div class="blog-style-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-style-card">
                            <div class="blog-style-img">
                                <a href="{{ url('/article-How-a-Website-Can-Transform-Your-Business') }}">
                                    <img src="frontend-asset/images/blog/code_bunon_blog_1_details.jpg" alt="Images">
                                </a>
                                <div class="blog-style-tag">
                                    <h3>01</h3>
                                    <span>Sep 24</span>
                                </div>
                            </div>
                            <div class="content">
                                <ul>
                                    <li><i class="bx bxs-user"></i> By Admin</li>
                                    <li><i class="bx bx-show-alt"></i>30 View</li>
                                    <li><i class="bx bx-purchase-tag-alt"></i>Business</li>
                                </ul>
                                <h3><a href="{{ url('/article-How-a-Website-Can-Transform-Your-Business') }}">How a Website Can Transform Your Business</a></h3>
                                <p>In today's digital age, having a strong online presence is no longer optional for businesses; it is essential.
                                    A website is the foundation of this presence, and for many companies, it is the first point of contact between
                                    them and their potential customers. A well-designed, functional website can do more than just act as a digital
                                    brochure; it has the power to completely transform your business in numerous ways. Let’s explore how a website
                                    can change your business for the better.</p>
                                <a href="{{ url('/article-How-a-Website-Can-Transform-Your-Business') }}" class="default-btn btn-bg-two border-radius-50">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="blog-style-card">
                            <div class="blog-style-img">
                                <a href="{{ url('/article-Transforming-the-Present-and-Shaping-the-Future-of-Technology') }}">
                                    <img src="frontend-asset/images/blog/code_bunon_blog_content_3_img_3.jpg" alt="Images">
                                </a>
                                <div class="blog-style-tag">
                                    <h3>15</h3>
                                    <span>Sep 24</span>
                                </div>
                            </div>
                            <div class="content">
                                <ul>
                                    <li><i class="bx bxs-user"></i> By Admin</li>
                                    <li><i class="bx bx-show-alt"></i>05 View</li>
                                    <li><i class="bx bx-purchase-tag-alt"></i>Technology</li>
                                </ul>
                                <h3><a href="{{ url('/article-Transforming-the-Present-and-Shaping-the-Future-of-Technology') }}">AI: Transforming the Present and Shaping the Future of Technology</a></h3>
                                <p>Artificial Intelligence (AI) is no longer a concept of the future—it's an integral part of our daily lives and continues to redefine industries, businesses, and personal experiences. From self-driving cars to intelligent personal assistants, AI has transformed the present landscape and is on the verge of shaping the future in unprecedented ways.</p>
                                <a href="{{ url('/article-Transforming-the-Present-and-Shaping-the-Future-of-Technology') }}" class="default-btn btn-bg-two border-radius-50">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="blog-style-card">
                            <div class="blog-style-img">
                                <a href="{{ url('/article-How-POS-Software-Can-Streamline-Your-Business-Operations') }}">
                                    <img src="frontend-asset/images/blog/code_bunon_blog_2_details.png" alt="Images">
                                </a>
                                <div class="blog-style-tag">
                                    <h3>05</h3>
                                    <span>Sep 24</span>
                                </div>
                            </div>
                            <div class="content">
                                <ul>
                                    <li><i class="bx bxs-user"></i> By Admin</li>
                                    <li><i class="bx bx-show-alt"></i>35 View</li>
                                    <li><i class="bx bx-purchase-tag-alt"></i>Business</li>
                                </ul>
                                <h3><a href="{{ url('/article-How-POS-Software-Can-Streamline-Your-Business-Operations') }}">How POS Software Can Make Your Business Easier</a></h3>
                                <p>One of the main advantages of POS software is that it speeds up the checkout process. With traditional cash registers, sales transactions can be slow and prone to mistakes. But POS software automates the process. By scanning barcodes or selecting items from the system, your staff can quickly ring up sales. It also supports multiple payment methods, like credit cards, mobile payments, and cash, so customers can pay the way they prefer. </p>
                                <a href="{{ url('/article-How-POS-Software-Can-Streamline-Your-Business-Operations') }}" class="default-btn btn-bg-two border-radius-50">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="side-bar-area">
                    <div class="search-widget">
                        <form class="search-form">
                            <input type="search" class="form-control" placeholder="Search...">
                            <button type="submit">
                            <i class="bx bx-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="side-bar-widget">
                        <h3 class="title">Blog Categories</h3>
                        <div class="side-bar-categories">
                            <ul>
                                <li>
                                    <div class="line-circle"></div>
                                    <a href="#">IT Services<span>[00]</span></a>
                                </li>
                                <li>
                                    <div class="line-circle"></div>
                                    <a href="#">Business<span>[02]</span></a>
                                </li>
                                <li>
                                    <div class="line-circle"></div>
                                    <a href="#">Creative Invention<span>[00]</span></a>
                                </li>
                                <li>
                                    <div class="line-circle"></div>
                                    <a href="#">Technology <span>[01]</span></a>
                                </li>
                                <li>
                                    <div class="line-circle"></div>
                                    <a href="#">IT Consulting <span>[00]</span></a>
                                </li>
                                <li>
                                    <div class="line-circle"></div>
                                    <a href="#">Marketing Growth <span>[00]</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="side-bar-widget">
                        <h3 class="title">Latest Blog</h3>
                        <div class="widget-popular-post">
                            <article class="item">
                                <a href="{{ url('/article-How-a-Website-Can-Transform-Your-Business') }}" class="thumb">
                                    <span class="full-image cover bg1" role="img"></span>
                                </a>
                                <div class="info">
                                    <h4 class="title-text">
                                    <a href="{{ url('/article-How-a-Website-Can-Transform-Your-Business') }}">
                                        How a Website Can Transform Your Business
                                    </a>
                                    </h4>
                                    <p>Sep 01, 2024</p>
                                </div>
                            </article>
                            <article class="item">
                                <a href="{{ url('/article-How-POS-Software-Can-Streamline-Your-Business-Operations') }}" class="thumb">
                                    <span class="full-image cover bg2" role="img"></span>
                                </a>
                                <div class="info">
                                    <h4 class="title-text">
                                    <a href="{{ url('/article-How-POS-Software-Can-Streamline-Your-Business-Operations') }}">
                                        How POS Software Can Make Your Business Easier
                                    </a>
                                    </h4>
                                    <p>05 September, 2024</p>
                                </div>
                            </article>
                            <article class="item">
                                <a href="{{ url('/article-Transforming-the-Present-and-Shaping-the-Future-of-Technology') }}" class="thumb">
                                    <span class="full-image cover bg3" role="img"></span>
                                </a>
                                <div class="info">
                                    <h4 class="title-text">
                                    <a href="{{ url('/article-Transforming-the-Present-and-Shaping-the-Future-of-Technology') }}">
                                        AI: Transforming the Present and the Future of Technology
                                    </a>
                                    </h4>
                                    <p>15 September, 2024</p>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="side-bar-widget">
                        <h3 class="title">Tag Cloud</h3>
                        <ul class="side-bar-widget-tag">
                            <li><a href="#">Android</a></li>
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">App</a></li>
                            <li><a href="#">IOS</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Consulting</a></li>
                        </ul>
                    </div>
                    <div class="side-bar-widget">
                        <h3 class="title">Gallery</h3>
                        <ul class="blog-gallery">
                            <li>
                                <a href="#">
                                    <img src="frontend-asset/images/blog/blog-small-img1.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="frontend-asset/images/blog/blog-small-img2.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="frontend-asset/images/blog/blog-small-img3.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="frontend-asset/images/blog/blog-small-img4.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="frontend-asset/images/blog/blog-small-img5.jpg" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="frontend-asset/images/blog/blog-small-img6.jpg" alt="image">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
