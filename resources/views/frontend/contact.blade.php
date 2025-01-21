@extends('frontend.layouts.app')
@section('forntend_content')


<div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Contact Us</h3>
            <ul>
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <i class="bx bx-chevrons-right"></i>
                </li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
    <div class="inner-shape">
        <img src="frontend-asset/images/shape/inner-shape.png" alt="Images">
    </div>
</div>
<div class="contact-form-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Let's Send Us a Message Below</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4">
                <div class="contact-info mr-20">
                    <span>Contact Info</span>
                    <h2>Let's Connect With Us</h2>
                    <p>We're here to help! Please contact us anytime, and let's work together to bring your ideas to life. Whether you have questions or need assistance, we're just a call or message away.</p>
                    <ul>
                        <li>
                            <div class="content">
                                <i class="bx bx-phone-call"></i>
                                <h3>Phone Number</h3>
                                <a href="tel:88 01710-855-446" class="call-btn">+88 01710-855-446</a>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <i class="bx bxs-map"></i>
                                <h3>Address</h3>
                                <span>Dhaka, Bangladesh</span>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <i class="bx bx-message"></i>
                                <h3>Contact Info</h3>
                                <p href="#">info@codebunon.com</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-form">
                    <form action="{{ route('message_Store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Name <span>*</span></label>
                                    <input type="text" name="name" id="name" class="form-control" required placeholder="Name" value="{{ old('name')}}">
                                    @error('name')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Email <span>*</span></label>
                                    <input type="email" name="email" id="email" class="form-control" required placeholder="Email" value="{{ old('email')}}">
                                    @error('email')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Phone Number <span>*</span></label>
                                    <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Phone Number" value="{{ old('phone_number')}}">
                                    @error('phone_number')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>City <span>*</span></label>
                                    <input type="text" name="city" id="city" class="form-control" required placeholder="City Name" value="{{ old('city')}}">
                                    @error('city')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Conutry <span></span></label>
                                    <input type="text" name="country" id="country" class="form-control" placeholder="Country Name" value="{{ old('country')}}">
                                    @error('country')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>



                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Subject <span>*</span></label>
                                    <input type="text" name="subject" id="subject" class="form-control" required placeholder="Your Subject" value="{{ old('subject')}}">
                                    @error('subject')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Message <span>*</span></label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8" required placeholder="Your Message">{{ old('message')}}</textarea>
                                    @error('message')
                                    <div class="form-text text-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="default-btn btn-bg-two border-radius-50">
                                Send Message <i class="bx bx-chevron-right"></i>
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="map-area">
    <div class="container-fluid m-0 p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116833.83187894154!2d90.33728812288355!3d23.780975728197344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1727350498524!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

@endsection
