@extends('layouts/layouts')
@section('content')
    <!--/ Intro Single star /-->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Best Book</h1>
                        <span class="color-text-a">“There is no friend as loyal as a book.” ― Ernest Hemingway</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Books
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
                    <nav aria-label="" class=" d-flex justify-content-lg-end">
                        <ul class="navbar-nav">
                            <li class="">
                                <a href="/sortPrice">Price<i class="fa fa-caret-down"></i> </a>
                                <a href="/sortPrice">Name<i class="fa fa-caret-down"></i></a>
                            </li>
                        </ul>
                    </nav>

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
                                        <h2 class="card-title-a">
                                            <a href="#">{{$book->title}}
                                                <br/> {{$book->author}}</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">price | $ {{$book->price}}</span>
                                        </div>
                                        <a href="{{route('single',$book->id)}}" class="link-a">Click here to view
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