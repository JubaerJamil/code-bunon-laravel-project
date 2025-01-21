@extends('frontend.layouts.app')
@section('forntend_content')
    <div class="inner-banner">
        <div class="container">
            <div class="inner-title text-center">
                <h3>{{ $serviceContent->title }}</h3>
                <ul>
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <i class="bx bx-chevrons-right"></i>
                    </li>
                    <li>Service Details</li>
                </ul>
            </div>
        </div>
        <div class="inner-shape">
            <img src="frontend-asset/images/shape/inner-shape.png" alt="Images">
        </div>
    </div>
    <div class="service-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-article">
                        <div class="service-article-img">
                            <img src="{{ asset($serviceContent->title_image) }}" alt="{{ $serviceContent->title }}">
                        </div>
                        <div class="service-article-content">
                          
                            {!! $serviceContent->content !!}
                           
                        </div>
                        <div class="service-article-img">
                            @if ($serviceContent->image)
                            <img src="{{ asset($serviceContent->image) }}" alt="{{ $serviceContent->title }}">
                        @endif
                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="side-bar-area">
                        <div class="side-bar-widget">
                            <h3 class="title">Our Services</h3>
                            <div class="side-bar-categories">
                                <ul>
                                    @foreach ($allService as $service)
                                    <li class="d-flex justify-content-end">
                                        <i class='fs-5 bx bxs-right-arrow-circle' style="color: rgb(0,113,220); margin-top: 6px;"></i>
                                        <a href="{{ Route('service_content',$service->slug)}}" style="margin-left: -18px;">{{$service->title}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="side-bar-widget">
                            <h3 class="title">Languages And Frameworks</h3>
                            <ul class="side-bar-widget-tag">
                                <li><a href="#">PHP</a></li>
                                <li><a href="#">Laravel</a></li>
                                <li><a href="#">WordPress</a></li>
                                <li><a href="#">Shopify</a></li>
                                <li><a href="#">Vue Js</a></li>
                                <li><a href="#">Rect Js</a></li>
                                <li><a href="#">Note Js</a></li>
                                <li><a href="#">Javascript</a></li>
                                <li><a href="#">MySql</a></li>
                                <li><a href="#">Bootstrap</a></li>
                                <li><a href="#">jQuery</a></li>
                                <li><a href="#">Ajax</a></li>
                                <li><a href="#">Axios</a></li>
                                <li><a href="#">Css</a></li>
                            </ul>
                        </div>
                        <div class="side-bar-widget">
                            <h3 class="title">Gallery</h3>
                            <ul class="blog-gallery">
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('frontend-asset/images/blog/blog-small-img1.jpg')}}" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('frontend-asset/images/blog/blog-small-img2.jpg')}}" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('frontend-asset/images/blog/blog-small-img3.jpg')}}" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('frontend-asset/images/blog/blog-small-img4.jpg')}}" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('frontend-asset/images/blog/blog-small-img5.jpg')}}" alt="image">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('frontend-asset/images/blog/blog-small-img6.jpg')}}" alt="image">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="side-bar-widget">
                            <h3 class="title">Archive</h3>
                            <div class="side-bar-categories">
                                <ul>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="#" >Design<span>[70]</span></a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="#" >Business<span>[24]</span></a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="#" >Development<span>[08]</span></a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="#" >Technology <span>[17]</span></a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="#" >Startup <span>[20]</span></a>
                                    </li>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="#" >Marketing Growth
                                            <span>[13]</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
