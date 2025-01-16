@extends('frontend.layouts.app')
@section('forntend_content')

<div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <h3>About Us</h3>
            <ul>
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <i class="bx bx-chevrons-right"></i>
                </li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
    <div class="inner-shape">
        <img src="frontend-asset/images/shape/inner-shape.png" alt="Images">
    </div>
</div>
<div class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-play">
                    <img src="frontend-asset/images/about/about-img1.jpg" alt="About Images">
                    {{-- <div class="about-play-content">
                        <span>Watch Our Story</span>
                        <h1>Your Trusted Web Partner!</h1>
                        <div class="play-on-area">
                            <a href="#" class="play-on popup-btn"><i class="bx bx-play"></i></a>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content ml-25">
                    <div class="section-title">
                        <span class="sp-color2">Experienced Professionals</span>
                        <h2>Leading the Way in Web Solutions</h2>
                        <p class="peragraph">
                            Our team offers tailored solutions for all your digital needs, ensuring innovative and effective results. We pride ourselves on delivering excellence.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <ul class="about-list text-start">
                                <li><i class="bx bxs-check-circle"></i>Customized Web Development</li>
                                <li><i class="bx bxs-check-circle"></i>Innovative Tech Solutions</li>
                                <li><i class="bx bxs-check-circle"></i>Scalable Project Management</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <ul class="about-list about-list-2 text-start">
                                <li><i class="bx bxs-check-circle"></i>Client-Focused Approach</li>
                                <li><i class="bx bxs-check-circle"></i>Streamlined Processes</li>
                                <li><i class="bx bxs-check-circle"></i>Quality Services Guaranteed</li>
                            </ul>
                        </div>
                    </div>
                    <p class="about-content-text peragraph">We aim to empower businesses by providing cutting-edge solutions that foster growth. With a focus on user experience and technology, we deliver exceptional results.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="choose-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="choose-content mr-20">
                    <div class="section-title">
                        <span class="sp-color1">Highly Experience Team</span>
                        <h2>Right Partner for Web Innovation</h2>
                        <p>
                            "Our team of experienced professionals is dedicated to delivering innovative web solutions that drive results. With a focus on creativity, precision, and technical expertise, we ensure your web projects are not only functional but also future-proof and aligned with your business goals."
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-6">
                            <div class="choose-content-card">
                                <div class="content">
                                    <i class="flaticon-practice"></i>
                                    <h3>Experience</h3>
                                </div>
                                {{-- <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet</p> --}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-6">
                            <div class="choose-content-card">
                                <div class="content">
                                    <i class="flaticon-help"></i>
                                    <h3>Quick Support</h3>
                                </div>
                                {{-- <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="choose-img">
                    <img src="frontend-asset/images/choose-img.jpg" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="about-area py-5">
    <div class="container">
        <div class="row align-items-start">
            <!-- Mission Section -->
            <div class="col-lg-6 mb-4">
                <div class="mission p-4 shadow-sm border rounded">
                    <h2 class="text-primary mb-4 border-bottom pb-2">Our Mission</h2>
                    <p class="mb-3">At Code Bunon, our mission is to lead the digital transformation of businesses by delivering state-of-the-art software solutions that are not only functional but also scalable and adaptable to the evolving needs of our clients. We are committed to empowering businesses with the tools they need to enhance productivity, streamline operations, and achieve sustainable growth.</p>
                    <p class="mb-3">We believe that technology should not be a barrier but a bridge to success, and we strive to create user-friendly, efficient, and customizable software that simplifies complex business challenges. Through a customer-centric approach, we tailor our services to align with the unique goals and visions of each client, providing them with a competitive edge in the marketplace.</p>
                    <p>Our core values of integrity, innovation, and excellence guide every project we undertake. By continually pushing the boundaries of technology, we aim to foster an environment where creativity flourishes and businesses can realize their full potential.</p>
                </div>
            </div>
            <!-- Vision Section -->
            <div class="col-lg-6 mb-4">
                <div class="vision p-4 shadow-sm border rounded">
                    <h2 class="text-success mb-4 border-bottom pb-2">Our Vision</h2>
                    <p class="mb-3">Our vision is to become a global leader in the software industry, recognized for our innovation, quality, and customer satisfaction. We envision a future where businesses of all sizes and industries are empowered by technology to drive efficiency, creativity, and success. As we continue to grow and evolve, we remain focused on creating cutting-edge solutions that address the ever-changing demands of the business world.</p>
                    <p class="mb-3">At Code Bunon, we aspire to not only meet the expectations of today but to anticipate the challenges of tomorrow. We are committed to fostering a culture of continuous learning and improvement, ensuring that we remain at the forefront of technological advancements.</p>
                    <p>Our vision extends beyond mere business success; we aim to contribute positively to the global community by driving technological innovation that benefits society as a whole. By collaborating with our clients, partners, and stakeholders, we will create a more connected, efficient, and prosperous world.</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="brand-area-two ptb-100">
    <div class="container">
        <div class="brand-slider owl-carousel owl-theme">
            <div class="brand-item">
                <img src="frontend-asset/images/brand-logo/brand-style1.png" alt="Images">
            </div>
            <div class="brand-item">
                <img src="frontend-asset/images/brand-logo/brand-style2.png" alt="Images">
            </div>
            <div class="brand-item">
                <img src="frontend-asset/images/brand-logo/brand-style3.png" alt="Images">
            </div>
            <div class="brand-item">
                <img src="frontend-asset/images/brand-logo/brand-style4.png" alt="Images">
            </div>
            <div class="brand-item">
                <img src="frontend-asset/images/brand-logo/brand-style5.png" alt="Images">
            </div>
            <div class="brand-item">
                <img src="frontend-asset/images/brand-logo/brand-style3.png" alt="Images">
            </div>
        </div>
    </div>
</div>
<div class="counter-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color2">Numbers Are Talking</span>
            <h2>Let’s Check Our Business Growth and Success Story</h2>
            <p>
                Our commitment to excellence has allowed us to achieve remarkable milestones. With a wide range of projects delivered successfully, we continue to expand our reach and impact in the industry. Here's a glimpse into our journey so far.
            </p>
        </div>
        <div class="row pt-45">
            <div class="col-lg-3 col-6 col-md-3">
                <div class="counter-another-content">
                    <i class="flaticon-web-development"></i>
                    <h3>23+</h3>
                    <span>Delivered Goods</span>
                </div>
            </div>
            <div class="col-lg-3 col-6 col-md-3">
                <div class="counter-another-content">
                    <i class="flaticon-consulting-1"></i>
                    <h3>40+</h3>
                    <span>Consulting</span>
                </div>
            </div>
            <div class="col-lg-3 col-6 col-md-3">
                <div class="counter-another-content">
                    <i class="flaticon-startup"></i>
                    <h3>25+</h3>
                    <span>Fully Launched</span>
                </div>
            </div>
            <div class="col-lg-3 col-6 col-md-3">
                <div class="counter-another-content">
                    <i class="flaticon-tick"></i>
                    <h3>25+</h3>
                    <span>Project Completed</span>
                </div>
            </div>
        </div>
    </div>
    <div class="counter-shape">
        <div class="shape1">
            <img src="frontend-asset/images/shape/shape1.png" alt="Images">
        </div>
        <div class="shape2">
            <img src="frontend-asset/images/shape/shape2.png" alt="Images">
        </div>
    </div>
</div>

@endsection
