<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M6DFK9PR');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R6GNLHM6RV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-R6GNLHM6RV');
    </script>

    <!-- Basic Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Code Bunon offers comprehensive web solutions including eCommerce, portfolio, UX/UI design, corporate website development, CMS software, and POS systems.">
    <meta name="keywords"
        content="Code Bunon, web development, web design, eCommerce, UX/UI design, CMS, POS software, software company, web solutions">
    <meta name="author" content="Code Bunon">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Code Bunon - All Web Solutions">
    <meta property="og:description"
        content="Code Bunon offers comprehensive web solutions including eCommerce, portfolio, UX/UI design, corporate website development, CMS software, and POS systems.">
    <meta property="og:image" content="{{ asset('frontend-asset/images/og-image.png')}}">
    <meta property="og:url" content="https://www.codebunon.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Code Bunon - All Web Solutions">
    <meta name="twitter:description"
        content="Code Bunon offers comprehensive web solutions including eCommerce, portfolio, UX/UI design, corporate website development, CMS software, and POS systems.">
    <meta name="twitter:image" content="{{ asset('frontend-asset/images/Code_bunon_fd_logo2.png')}}">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ asset('frontend-asset/images/favicon.png')}}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend-asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend-asset/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend-asset/fonts/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend-asset/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend-asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend-asset/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend-asset/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend-asset/css/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend-asset/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend-asset/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend-asset/css/responsive.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend-asset/css/theme-dark.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend-asset/css/custom.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <!-- Page Title -->
    <title>Code Bunon - All Web Solutions</title>
    
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1103849214789761');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1103849214789761&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6DFK9PR" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    {{-- <div class="breaking-news">
        <div class="news-text" id="news">
            Our site is still under development. We apologize for any inconvenience during your visit.
        </div>
    </div> --}}


    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner"><span>CB</span></div>
            </div>
        </div>
    </div>


    @include('frontend.layouts.header');



    @include('frontend.layouts.nabvar');



    {{-- search bar --}}
    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-layer"></div>
                <div class="search-layer"></div>
                <div class="search-layer"></div>
                <div class="search-close">
                    <span class="search-close-line"></span>
                    <span class="search-close-line"></span>
                </div>
                <div class="search-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="submit"><i class="bx bx-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @yield('forntend_content');

    @include('frontend.layouts.footer');


    <div class="switch-box">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>


    <script>
        // loader js start
        let loading = document.querySelector(".spinner");
        let letters = loading.textContent.split("");
        loading.textContent = "";
        letters.forEach((letter, i) => {
            let span = document.createElement("span");
            span.textContent = letter;
            span.style.animationDelay = `${i / 50}s`;
            loading.append(span);
        });
        // loader js end

        // slider message js start
        const news = document.getElementById('news');
        let newsWidth = news.offsetWidth;
        let containerWidth = document.querySelector('.breaking-news').offsetWidth;
        let currentPos = containerWidth;

        function scrollNews() {
            currentPos--;
            if (currentPos < -newsWidth) {
                currentPos = containerWidth; // Reset to start from right
            }
            news.style.transform = `translateX(${currentPos}px) translateY(-50%)`; // Keep vertical centering
            requestAnimationFrame(scrollNews);
        }
        // Start the animation
        scrollNews();
        // slider message js end
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.8/axios.min.js"></script>
    <script src="{{ asset('frontend-asset/js/fontawesome.js')}}"></script>

    <script src="{{ asset('frontend-asset/js/jquery.min.js')}}"></script>

    <script src="{{ asset('frontend-asset/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{ asset('frontend-asset/js/owl.carousel.min.js')}}"></script>

    <script src="{{ asset('frontend-asset/js/jquery.magnific-popup.min.js')}}"></script>

    <script src="{{ asset('frontend-asset/js/jquery.nice-select.min.js')}}"></script>

    <script src="{{ asset('frontend-asset/js/wow.min.js')}}"></script>

    <script src="{{ asset('frontend-asset/js/meanmenu.js')}}"></script>

    <script src="{{ asset('frontend-asset/js/jquery.ajaxchimp.min.js')}}"></script>

    <script src="{{ asset('frontend-asset/js/form-validator.min.js')}}"></script>

    <script src="{{ asset('frontend-asset/js/contact-form-script.js')}}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript">
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "3000",
            "hideDuration": "3000",
            "timeOut": "3000",
            "extendedTimeOut": "3000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        @if (Session::has('success'))
            toastr.success('{{ Session::get('success') }}', 'Success!');
            @php
                Session::forget('success');
            @endphp
        @elseif (Session::has('info'))
            toastr.info('{{ Session::get('info') }}', 'Info!')
            @php
                Session::forget('info');
            @endphp
        @elseif (Session::has('warning'))
            toastr.warning('{{ Session::get('warning') }}', 'Warning!')
            @php
                Session::forget('warning');
            @endphp
        @elseif (Session::has('error'))
            toastr.error('{{ Session::get('error') }}', 'Fail!')
            @php
                Session::forget('error');
            @endphp
        @endif
    </script>

    <script src="{{ asset('frontend-asset/js/custom.js')}}"></script>
        {{-- tinyMCE Script --}}
        <script src="https://cdn.tiny.cloud/1/h9fj8b02x68s6gg6k46ef9n21i9ybh3tas1vdf2xsvnrji3p/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
              selector: '#myContent',
              plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
              toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            });
        </script>
</body>


</html>
