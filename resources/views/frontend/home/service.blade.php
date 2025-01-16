<section id="services-area" class="services-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color1">Our Services</span>
            <h2>We Provide a Wide Variety of Web Services</h2>
            <p class="margin-auto">
                Welcome to Code Bunon, where we are committed to delivering exceptional solutions carefully crafted to
                meet your unique needs.
                Our wide range of services guarantees that we can meet all your requirements, regardless of the scale or
                complexity of
                your project.
            </p>
        </div>
        <div class="row pt-45">

            @foreach ($allService as $service)
                <div class="col-lg-3 col-sm-6">
                    <div class="services-card">
                        <i class='{{$service->icon}}'></i>
                        <h3><a href="{{ Route('service_content',$service->slug)}}">{{$service->title}}</a></h3>
                        {{ \Illuminate\Support\Str::limit(strip_tags($service->content), 80) }}... <br>
                        <a href="{{ Route('service_content',$service->slug)}}" class="learn-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="service-shape">
        <img src="frontend-asset/images/shape/service-shape1.png" alt="Images">
    </div>
</section>
