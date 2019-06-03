@extends('layouts')
@section('content')
    <!--/ Intro Single star /-->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Our Amazing Properties</h1>
                        <span class="color-text-a">Grid Properties</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Properties Grid
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Books Grid Star /-->
    <section class="property-grid grid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="grid-option">
                        <form>
                            <select class="custom-select">
                                <option selected>All</option>
                                <option value="1">Price asc</option>
                                <option value="2">Price desc</option>
                                <option value="3">Size</option>
                            </select>
                        </form>
                    </div>
                </div>
                @foreach($books as $book)
                <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="img/book2.jpeg" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">

                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">price | $ {{$book->price}}</span>
                                        </div>
                                        <a href="/single" class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Category</h4>
                                                <span>{{$book->category}}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Year</h4>
                                                <span>{{$book->year}}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Pages</h4>
                                                <span>{{$book->pages}}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">language</h4>
                                                <span>{{$book->language}}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                @endforeach
            </div>
            {{ $books->links() }}
        </div>
    </section>
    <!--/ Books Grid End /-->
@endsection