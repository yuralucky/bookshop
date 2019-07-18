@extends('layouts/layouts')
@section('content')
    <div class="intro intro-carousel">
        <div id="carousel" class="owl-carousel owl-theme">
            <div class="carousel-item-a intro-item bg-image"
                 style="background-image: url({{asset('img/bo.jpg')}})">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <h1 class="intro-title mb-4">
                                            <span class="color-b">204 </span> Mount
                                            <br> Olive Road Two</h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">price | $ 63</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item-a intro-item bg-image"
                 style="background-image: url({{asset('img/bo2.jpg')}})">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <h1 class="intro-title mb-4">
                                            <span class="color-b">204 </span> Rino
                                            <br> Venda Road Five</h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">price | $ 31</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item-a intro-item bg-image"
                 style="background-image: url({{asset('img/bo3.jpg')}})">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">

                                        <h1 class="intro-title mb-4">
                                            <span class="color-b">Best book 2019 </span> Alira
                                            <br> Roan Road One</h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">price | $ 120</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Carousel end /-->
    <!--/ Advantage /-->
    <section class="section-services section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Our advantages</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-usd"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Price</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">
                                Our prices are among the lowest in Ukraine, thanks to a flexible pricing policy and
                                streamlined supply chains from publishers. We have been working in this market for a
                                long time, we are developing together with it and we strive to become even better, more
                                accessible and more attractive for you, our clients.
                            </p>
                        </div>
                        <div class="card-footer-c">
                            <a href="#" class="link-c link-icon">
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-automobile"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Delivery</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">
                                Delivery of books to any geographical point - the possibility of delivery of books of
                                any order by our online store is limited only by the capabilities of Ukrainian and
                                international postal and courier services. Follow our free shipping promotions, as well
                                as other promotions and offers.
                            </p>
                        </div>
                        <div class="card-footer-c">
                            <a href="#" class="link-c link-icon">
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-home"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Sell</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">
                                The best choice of computer literature in Ukraine: everything for programmers,
                                webmasters, designers, Internet marketers, project managers, testers, and anyone who is
                                involved in IT-technologies or is interested in them.
                            </p>
                        </div>
                        <div class="card-footer-c">
                            <a href="#" class="link-c link-icon">
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Advantage End /-->
    <!--/ Property Star /-->
    <section class="section-property section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Latest Books</h2>
                        </div>
                        <div class="title-link">
                            <a href="/books">All Books
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="property-carousel" class="owl-carousel owl-theme">
                @foreach($latests as $value)
                    <div class="carousel-item-b">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{asset($value->image)}}" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="#">{{$value->title}}
                                                <br/> {{$value->author}}</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">price | $ {{$value->price}}</span>
                                        </div>
                                        <a href="{{route('single',$value->id)}}" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Category</h4>
                                                <span>{{$value->category}}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Year</h4>
                                                <span>{{$value->year}}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Pages</h4>
                                                <span>{{$value->pages}}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">language</h4>
                                                <span>{{$value->language}}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--/ Property End /-->
    <!--/ Best Book /-->
    <section class="section-agents section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Best Books</h2>
                        </div>
                        <div class="title-link">
                            <a href="/books">All books
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($bests as $best)
                    <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{$best->image}}" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="#">{{$best->title}}
                                                <br/> {{$best->author}}</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">price | $ {{$best->price}}</span>
                                        </div>
                                        <a href="{{route('single',$best->id)}}" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Category</h4>
                                                <span>{{$best->category}}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Year</h4>
                                                <span>{{$best->year}}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Pages</h4>
                                                <span>{{$best->pages}}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">language</h4>
                                                <span>{{$best->language}}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--/ Best End /-->
    <!--/ News  /-->
    <section class="section-news section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Latest News</h2>
                        </div>
                        <div class="title-link">
                            <a href="#">All News
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="new-carousel" class="owl-carousel owl-theme">
                <div class="carousel-item-c">
                    <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                            <img src="{{asset('img/news.jpeg')}}" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-category-b">
                                    <a href="#" class="category-b">Java</a>
                                </div>
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                        <a href="blog-single.html">Best guide
                                            <br> new</a>
                                    </h2>
                                </div>
                                <div class="card-date">
                                    <span class="date-b">18 June. 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-c">
                    <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                            <img src="{{asset('img/news2.jpeg')}}" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-category-b">
                                    <a href="#" class="category-b">Php</a>
                                </div>
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                        <a href="blog-single.html">Php 7.3
                                            <br> coming</a>
                                    </h2>
                                </div>
                                <div class="card-date">
                                    <span class="date-b">30 May. 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-c">
                    <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                            <img src="{{asset('img/news3.jpeg')}}" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-category-b">
                                    <a href="#" class="category-b">Javascript</a>
                                </div>
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                        <a href="blog-single.html">Javascript is easy
                                            <br> new</a>
                                    </h2>
                                </div>
                                <div class="card-date">
                                    <span class="date-b">18 Sep. 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-c">
                    <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                            <img src="{{asset('img/news3.jpeg')}}" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-category-b">
                                    <a href="#" class="category-b">Css</a>
                                </div>
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                        <a href="#">Css best practice
                                            <br> new</a>
                                    </h2>
                                </div>
                                <div class="card-date">
                                    <span class="date-b">18 Sep. 2017</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ News  /-->
@endsection