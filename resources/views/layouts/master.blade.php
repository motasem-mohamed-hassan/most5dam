<!DOCTYPE html>
<html lang="zxx">

    <head>
        <title>most5dm</title>
        <!--/tags -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
                    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script>
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!--//tags -->
        <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('frontend/css/font-awesome.css') }}" rel="stylesheet">

        <!--For stars of rating-->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

        <!--pop-up-box-->
        <link href="{{ asset('frontend/css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />
        <!--//pop-up-box-->
        <!-- price range -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery-ui1.css') }}">
        <!-- flexslider -->
        <link rel="stylesheet" href="{{ asset('frontend/css/flexslider.css') }}" type="text/css" media="screen" />
        <!-- toaster link css -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

        @toastr_css



        @yield('head')

        <!-- fonts -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
        <style>
            .carousel .item {
                            background: url({{ asset('frontend/images/banner1.jpg') }}) no-repeat;
                            background-size: 100% 100%;
                            height: 20pc;
                        }

            .carousel .item.item1 {
                            background: url({{ asset('frontend/images/banner1.jpg') }}) no-repeat;
                            background-size: 100% 100%;
                            height: 20pc;
                        }

            .carousel .item.item2 {
                            background: url({{ asset('frontend/images/banner1.jpg') }}) no-repeat;
                            background-size: 100% 100%;
                            height: 20pc;
                        }

            .carousel .item.item3 {
                            background: url({{ asset('frontend/images/banner1.jpg') }}) no-repeat;
                            background-size: 100% 100%;
                            height: 20pc;
                        }

            .carousel .item.item4 {
                            background: url({{ asset('frontend/images/banner1.jpg') }}) no-repeat;
                            background-size: 100% 100%;
                            height: 20pc;
                        }
            @media screen and (max-width: 720px) {
                            .carousel .item {
                                background: url({{ asset('frontend/images/2.jpeg') }}) no-repeat;
                                background-size: 100% 100%;
                            }
                        }

            @media screen and (max-width: 720px) {
                            .carousel .item.item1 {
                                background: url({{ asset('frontend/images/2.jpeg') }}) no-repeat;
                                background-size: 100% 100%;
                            }
                        }

            @media screen and (max-width: 720px) {
                            .carousel .item.item2 {
                                background: url({{ asset('frontend/images/2.jpeg') }}) no-repeat;
                                background-size: 100% 100%;
                            }
                        }

            @media screen and (max-width: 720px) {
                            .carousel .item.item3 {
                                background: url({{ asset('frontend/images/2.jpeg') }}) no-repeat;
                                background-size: 100% 100%;
                            }
                        }

            @media screen and (max-width: 720px) {
                .carousel .item.item4 {
                    background: url({{ asset('frontend/images/2.jpeg') }}) no-repeat;
                    background-size: 100% 100%;
                }
            }
    ()
        </style>

    </head>

    <body>

        @include('inc.header')

        @yield('panner')


        @yield('content')


        @include('inc.footer')




        @jquery
        @toastr_js
        @toastr_render



        <!-- jquery -->
        <script src="{{ asset('frontend/js/jquery-2.1.4.min.js') }}"></script>
        <!-- //jquery -->

        <!-- For AJAX -->
        @yield('scripts')

        <!-- popup modal (for signin & signup)-->
        <script src="{{ asset('frontend/js/jquery.magnific-popup.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });

            });
        </script>

            <!-- price range (top products) -->
            <script src="{{ asset('frontend/js/jquery-ui.js') }}"></script>

            <!-- imagezoom -->
            <script src="{{ asset('frontend/js/imagezoom.js') }}"></script>
            <!-- //imagezoom -->

            <!-- FlexSlider -->
            <script src="{{ asset('frontend/js/jquery.flexslider.js') }}"></script>
            <script>

            // Can also be used with $(document).ready()
                $(window).load(function() {
                    $('.flexslider').flexslider({
                        animation: "slide",
                        controlNav: "thumbnails"
                    });
                });
            </script>
            <!-- //FlexSlider-->

            <!-- price range (top products) -->
            <script>
                //<![CDATA[
                $(window).load(function () {
                    $("#slider-range").slider({
                        range: true,
                        min: 0,
                        max: 100000,
                        values: [200, 50000],
                        slide: function (event, ui) {
                            $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                        }
                    });

                    $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));
                }); //]]>
            </script>
            <!-- //price range (top products) -->



            <!-- flexisel (for special offers) -->
            <script src="{{ asset('frontend/js/jquery.flexisel.js') }}"></script>
            <script>
                $(window).load(function() {
                    $("#flexiselDemo1").flexisel({
                        visibleItems: 3,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint: 480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint: 640,
                                visibleItems: 2
                            },
                            tablet: {
                                changePoint: 768,
                                visibleItems: 2
                            }
                        }
                    });

                });
            </script>
            <!-- //flexisel (for special offers) -->



            <!-- password-script -->
            {{-- <script>
                window.onload = function() {
                    document.getElementById("password1").onchange = validatePassword;
                }

                function validatePassword() {
                    var pass2 = document.getElementById("password2").value;
                    var pass1 = document.getElementById("password1").value;
                    if (pass1 != pass2)
                        document.getElementById("password2").setCustomValidity("Passwords Don't Match");
                    else
                        document.getElementById("password2").setCustomValidity('');
                    //empty string means no validation error
                }
            </script> --}}
            <!-- //password-script -->


            <!-- start-smooth-scrolling -->
            <script src="{{ asset('frontend/js/move-top.js') }}"></script>
            <script src="{{ asset('frontend/js/easing.js') }}"></script>
            <script>
                jQuery(document).ready(function($) {
                    $(".scroll").click(function(event) {
                        event.preventDefault();

                        $('html,body').animate({
                            scrollTop: $(this.hash).offset().top
                        }, 1000);
                    });
                });
            </script>
            <!-- //end-smooth-scrolling -->

            <!-- smooth-scrolling-of-move-up -->
            <script>
                $(document).ready(function() {
                    /*
                    var defaults = {
                        containerID: 'toTop', // fading element id
                        containerHoverID: 'toTopHover', // fading element hover id
                        scrollSpeed: 1200,
                        easingType: 'linear'
                    };
                    */
                    $().UItoTop({
                        easingType: 'easeOutQuart'
                    });

                });
            </script>
            <!-- //smooth-scrolling-of-move-up -->

            <!-- for bootstrap working -->
            <script src="{{ asset('frontend/js/bootstrap.js') }}"></script>
            <!-- //for bootstrap working -->
            <!--toaster js-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    </body>

    </html>
