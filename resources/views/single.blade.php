@extends('layouts')
@section('content')

    <!--/ Property Single Star /-->
    <section class="intro-single">

        <section class="property-single nav-arrow-b">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="row justify-content-between">
                            <div class="col-md-5 col-lg-4">
                                <div class="property-price d-flex justify-content-center foo">
                                    <div class="card-header-c d-flex">
                                        <div class="card-title-c align-self-center">
                                            <div class="justify-content-center">
                                                <img src="img/book1.jpeg" alt="">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="property-summary">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="title-box-d section-t4">
                                                <h3 class="title-d">About book</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="summary-list">
                                        <ul class="list">
                                            <li class="d-flex justify-content-between">
                                                <strong>Price</strong>
                                                <span>{{$book->price}}</span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <strong>Author</strong>
                                                <span>{{$book->author}}</span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <strong>Category</strong>
                                                <span>{{$book->category}}</span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <strong>Pages</strong>
                                                <span>{{$book->pages}}</span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <strong>Year</strong>
                                                <span>{{$book->year}}
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-7 section-md-t3">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="title-box-d">
                                            <h3 class="title-d">Book Description</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-description">
                                    <p class="description color-text-a">
                                        {{$book->description}}
                                    </p>

                                </div>
                                <div class="row section-t3">
                                    <div class="col-sm-12">
                                        <div class="title-box-d">
                                            <h3 class="title-d">Similar books</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-price d-flex justify-content-center foo">
                                    <div class="card-header-c d-flex">
                                        <div class="card-title-c align-self-center">
                                            <div class="justify-content-center">
                                                <img src="img/book1.jpeg" alt="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-header-c d-flex">
                                        <div class="card-title-c align-self-center">
                                            <div class="justify-content-center">
                                                <img src="img/book1.jpeg" alt="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-header-c d-flex">
                                        <div class="card-title-c align-self-center">
                                            <div class="justify-content-center">
                                                <img src="img/book1.jpeg" alt="">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 offset-md-1 pt-md-5">
                        <button type="submit" class="btn btn-a btn-block">Buy</button>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Property Single End /-->
    </section>
@stop