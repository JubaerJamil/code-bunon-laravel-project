<footer class="footer-area footer-bg">
    <div class="container">
        <div class="footer-top pt-100 pb-70">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('frontend-asset/images/logos/Code_bunon_footer_logo.png')}}" alt="Images">
                            </a>
                        </div>
                        <p>
                            Providing creative solutions with expert support. Contact us for any queries.
                        </p>
                        <div class="footer-call-content">
                            <h3>Any Query</h3>
                            <span><a href="tel:88 01710-855-446">+88 01710-855-446</a></span>
                            <i class="bx bx-headphone"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget pl-2">
                        <h3>Services</h3>
                        <ul class="footer-list">
                            @foreach ($allService as $item)
                            <li>
                                <a href="{{ Route('service_content',$item->slug)}}">
                                    <i class="bx bx-chevron-right"></i>
                                    {{$item->title}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget pl-2">
                        <h3>Company</h3>
                        <ul class="footer-list">
                            <li>
                                <a href="{{ url('/about') }}">
                                    <i class="bx bx-chevron-right"></i>
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/contact') }}" >
                                    <i class="bx bx-chevron-right"></i>
                                    Contact us
                                </a>
                            </li>
                            <li>
                                <a href="#" >
                                    <i class="bx bx-chevron-right"></i>
                                    Career
                                </a>
                            </li>
                            <li>
                                <a href="#" >
                                    <i class="bx bx-chevron-right"></i>
                                    Terms & Condition
                                </a>
                            </li>
                            <li>
                                <a href="#" >
                                    <i class="bx bx-chevron-right"></i>
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/q&a') }}" >
                                    <i class="bx bx-chevron-right"></i>
                                    Faq
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>Newsletter</h3>
                        <p>Stay updated with the latest tech trends and insights from our team. Subscribe to receive updates directly in your inbox!</p>
                        <div class="newsletter-area">

                            <form class="newsletter-form" id="newsLetter">
                                <input type="email" class="form-control" placeholder="Enter Email" id="email" name="email"
                                    required>
                                <button class="subscribe-btn" type="submit">
                                    <i class="bx bxs-paper-plane"></i>
                                </button>
                                {{-- <div id="validator-newsletter" class="form-result"></div> --}}
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right-area">
            <div class="copy-right-text">
                <p>
                    Copyright ©
                    <script>document.write(new Date().getFullYear())</script> Code Bubon. All Rights Reserved by
                    <a href="http://codebunon.com/" target="_blank">Code Bunon</a>
                </p>
            </div>
        </div>
    </div>
</footer>


<script>
    const newsLetter = document.getElementById('newsLetter');
    newsLetter.addEventListener('submit', async function(event) {
        event.preventDefault();
        
        let email = document.getElementById('email').value;

        if (!email) {
            alert('Please enter a valid email address');
        } else {
            try {
                let res = await fetch('/frontend/newLetter/store', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ email: email })
                });

                let resData = await res.json();

                if (res.ok && resData.status === 'success') {
                    alert('Thanks for your message. We will contact you very soon!');
                    document.getElementById('newsLetter').reset();
                } else {
                    alert('Something went wrong');
                }
            } catch (error) {
                alert('An error occurred while sending your request. Please try again later.');
                console.error(error); // Log the error for debugging purposes
            }
        }
    });
</script>
