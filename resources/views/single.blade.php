@extends('layouts.layouts')
@section('content')
    <section class="intro-single">
        <div class="container">
            <div class="card">
                <div class="container-fliud">
                    <div class="wrapper row">
                        <div class="preview col-md-6">
                            <div class="preview-pic tab-content">
                                <div class="tab-pane active" id="pic-1"><img src="{{asset($book->image)}}"
                                                                             style="height: 400px;width: 400px"/>
                                </div>
                            </div>
                        </div>
                        <div class="details col-md-6">
                            <h3 class="product-title">{{$book->title}}</h3>
                            <h5 class="product-title">
                                <small>Author:</small> {{$book->author}}</h5>
                            <div class="rating">
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <span class="review-no">41 reviews</span>
                            </div>
                            <p class="product-description">{{$book->description}}</p>
                            <h4 class="price">current price: <span>${{$book->price}}</span></h4>
                            <p class="vote"><strong>91%</strong> of buyers enjoyed this book! <strong>(87
                                    votes)</strong></p>
                            <div class="action">
                                <form action="{{route('add',$book->id)}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$book->id}}">
                                    <input type="submit" class="add-to-cart btn btn-default" value="Add ">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop