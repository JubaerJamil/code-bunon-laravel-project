(function ($) {
    "use strict";
    jQuery(".mean-menu").meanmenu({ meanScreenWidth: "991" });
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 150) {
            $(".navbar-area").addClass("sticky-nav");
        } else {
            $(".navbar-area").removeClass("sticky-nav");
        }
    });
    $(".nav-side .search-box i").on("click", function () {
        $(".search-overlay").toggleClass("search-overlay-active");
    });
    $(".search-close").on("click", function () {
        $(".search-overlay").removeClass("search-overlay-active");
    });
    $(".side-nav-responsive .dot-menu").on("click", function () {
        $(".side-nav-responsive .container-max .container").toggleClass(
            "active"
        );
    });
    $(".banner-slider").owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        items: 1,
        dots: true,
        autoplay: true,
        autoHeight: true,
        autoplayHoverPause: true,
    });
    $(".case-study-slider").owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: false,
        center: true,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            1024: { items: 3 },
            1200: { items: 4 },
        },
    });
    $(".brand-slider").owlCarousel({
        loop: true,
        margin: 60,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: { items: 2 },
            600: { items: 2 },
            700: { items: 3 },
            1024: { items: 5 },
        },
    });
    $(".banner-seven-slide").owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        nav: true,
        dots: false,
        autoplay: true,
        autoHeight: true,
        autoplayHoverPause: true,
    });
    $(".clients-slider").owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: { 0: { items: 1 }, 992: { items: 2 } },
        navText: [
            "<i class='bx bx-chevron-left'></i>",
            "<i class='bx bx-chevron-right'></i>",
        ],
    });
    $(".clients-slider-two").owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        items: 1,
        navText: [
            "<i class='bx bx-chevron-left'></i>",
            "<i class='bx bx-chevron-right'></i>",
        ],
    });
    $(".banner-sub-slider").owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: { 0: { items: 1 }, 1024: { items: 3 } },
    });
    $(".popup-btn").magnificPopup({
        disableOn: 320,
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false,
    });
    $("select").niceSelect();
    $(".accordion")
        .find(".accordion-title")
        .on("click", function () {
            $(this).toggleClass("active");
            $(this).next().slideToggle("fast");
            $(".accordion-content").not($(this).next()).slideUp("fast");
            $(".accordion-title").not($(this)).removeClass("active");
        });
    $(".skill-bar").each(function () {
        $(this)
            .find(".progress-content")
            .animate({ width: $(this).attr("data-percentage") }, 2000);
        $(this)
            .find(".progress-number-mark")
            .animate(
                { left: $(this).attr("data-percentage") },
                {
                    duration: 2000,
                    step: function (now, fx) {
                        var data = Math.round(now);
                        $(this)
                            .find(".percent")
                            .html(data + "%");
                    },
                }
            );
    });
    new WOW().init();
    $(window).on("load", function () {
        $(".preloader").fadeOut(500);
    });
    $("body").append(
        "<div class='go-top'><i class='bx bx-chevrons-up'></i></div>"
    );
    $(window).on("scroll", function () {
        var scrolled = $(window).scrollTop();
        if (scrolled > 600) $(".go-top").addClass("active");
        if (scrolled < 600) $(".go-top").removeClass("active");
    });
    $(".go-top").on("click", function () {
        $("html, body").animate({ scrollTop: "0" }, 50);
    });
    function makeTimer() {
        var endTime = new Date("December 30, 2030 17:00:00 PDT");
        var endTime = Date.parse(endTime) / 1000;
        var now = new Date();
        var now = Date.parse(now) / 1000;
        var timeLeft = endTime - now;
        var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft - days * 86400) / 3600);
        var minutes = Math.floor((timeLeft - days * 86400 - hours * 3600) / 60);
        var seconds = Math.floor(
            timeLeft - days * 86400 - hours * 3600 - minutes * 60
        );
        if (hours < "10") {
            hours = "0" + hours;
        }
        if (minutes < "10") {
            minutes = "0" + minutes;
        }
        if (seconds < "10") {
            seconds = "0" + seconds;
        }
        $("#days").html(days + "<span>Days</span>");
        $("#hours").html(hours + "<span>Hours</span>");
        $("#minutes").html(minutes + "<span>Minutes</span>");
        $("#seconds").html(seconds + "<span>Seconds</span>");
    }
    setInterval(function () {
        makeTimer();
    }, 300);
    $(".newsletter-form")
        .validator()
        .on("submit", function (event) {
            if (event.isDefaultPrevented()) {
                formErrorSub();
                submitMSGSub(false, "Please enter your email correctly");
            } else {
                event.preventDefault();
            }
        });
    function callbackFunction(resp) {
        if (resp.result === "success") {
            formSuccessSub();
        } else {
            formErrorSub();
        }
    }
    function formSuccessSub() {
        $(".newsletter-form")[0].reset();
        submitMSGSub(true, "Thank you for subscribing!");
        setTimeout(function () {
            $("#validator-newsletter").addClass("hide");
        }, 4000);
    }
    function formErrorSub() {
        $(".newsletter-form").addClass("animated shake");
        setTimeout(function () {
            $(".newsletter-form").removeClass("animated shake");
        }, 1000);
    }
    function submitMSGSub(valid, msg) {
        if (valid) {
            var msgClasses = "validation-success";
        } else {
            var msgClasses = "validation-danger";
        }
        $("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
    }
    $(".newsletter-form").ajaxChimp({
        url: "https://hibootstrap.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9",
        callback: callbackFunction,
    });
})(jQuery);
function setTheme(themeName) {
    localStorage.setItem("theme", themeName);
    document.documentElement.className = themeName;
}
function toggleTheme() {
    if (localStorage.getItem("theme") === "theme-dark") {
        setTheme("theme-light");
    } else {
        setTheme("theme-dark");
    }
}
(function () {
    if (localStorage.getItem("theme") === "theme-dark") {
        setTheme("theme-dark");
        document.getElementById("slider").checked = false;
    } else {
        setTheme("theme-light");
        document.getElementById("slider").checked = true;
    }
})();
