<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>BookShop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Libraries CSS Files -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/ionics.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl_carousel.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/shopcart.css')}}" rel="stylesheet">


</head>

<body>

<div class="click-closed"></div>
<!--/ Form Search Star /-->
<div class="box-collapse">
    <div class="title-box-d">
        <h3 class="title-d">Search Books</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
        <div class="row">
            <form action="/search" method="get">
                <div class="col-md-12 mb-2">
                    <div class="form-group">
                        <label for="Type">Keyword</label>
                        <input type="text" name="search" class="form-control form-control-lg form-control-a"
                               placeholder="Keyword">
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-b">Search Book</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!--/ Form Search End /-->

<!--/ Nav Star /-->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a class="navbar-brand text-brand" href="/">Book<span class="color-b">Shop</span></a>
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none"
                data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/main">Items</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/single">Single</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/contacts">Contact</a>
                </li>
                <li>
                    <a class="nav-link" href="/shop_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
        <button type="submit" name="search" id="livesearch"
                class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block"
                data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>

    </div>
</nav>
@include('errors')
@yield('content')
<!--/ Testimonials End /-->

<!--/ footer Star /-->
<section class="section-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">BookShop</h3>
                    </div>
                    <div class="w-body-a">
                        <p class="w-text-a color-text-a">
                            To you, our dear book gourmets, we offer a wide range of books of various genres with a
                            variety of thematic content at affordable prices. Here you can find an impressive, valuable
                            gift, discovering the world of exclusive leather gift editions. It is in our store you will
                            find exciting games for both children and adults, as well as high quality office supplies.
                            Contact us - we will always find something to interest you!
                        </p>
                    </div>
                    <div class="w-footer-a">
                        <ul class="list-unstyled">
                            <li class="color-a">
                                <span class="color-text-a">Phone .</span> contact@example.com
                            </li>
                            <li class="color-a">
                                <span class="color-text-a">Email .</span> +123456789
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">Feedback and comments</h3>
                    </div>
                    <div class="w-body-a">
                        <p class="w-text-a color-text-a">
                            Addressing us or leaving comments on the site, you are responsible that the message is not
                            illegal, harmful, threatening, slanderous, offends morality, violates copyrights, promotes
                            hatred and / or discrimination of people for racial, ethnic, sexual, religious, social
                            featured, contains insults to specific individuals or organizations, and in any other way
                            violates the current legislation of Ukraine. You agree that you may delete the socket
                            without your consent, and also use it at your discretion for free. The outlet is not
                            responsible for any information posted by users of the Site.

                        </p>
                    </div>
                    <div class="w-footer-a">

                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">Delivery</h3>
                    </div>
                    <div class="w-body-a">
                        <p class="w-text-a color-text-a">
                            Delivery of books to any geographical point - the possibility of delivery of books of any
                            order by our online store is limited only by the capabilities of Ukrainian and international
                            postal and courier services. Follow our free shipping promotions, as well as other
                            promotions and offers.
                        </p>
                    </div>
                    <div class="w-footer-a">

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="nav-footer">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="/about">About</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="/items">Items</a>
                        </li>

                        <li class="list-inline-item">
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </nav>
                <div class="socials-a">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://twitter.com/?lang=uk">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/?hl=uk">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.pinterest.com/">
                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="copyright-footer">
                    <p class="copyright color-text-a">
                        &copy; Copyright
                        <span class="color-a">BookShop</span> All Rights Reserved.
                    </p>
                </div>
                <div class="credits">
                    Designed by <a href="https://google.com/">Yuralucky</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ Footer End /-->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- JavaScript Libraries -->
{{--<script src="lib/jquery/jquery.min.js"></script>--}}
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate.min.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/easing.js')}}"></script>
{{--<script src="lib/owlcarousel/owl.carousel.min.js"></script>--}}
<script src="{{asset('js/owl_carousel.js')}}"></script>
<script src="{{asset('js/scrollreveal.js')}}"></script>
<!-- Contact Form JavaScript File -->
<script src="{{asset('js/contactform.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/searchlive.js')}}"></script>

</body>
</html>
