@extends('layouts.layouts')
@section('content')
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Shopping Cart</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Cart
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <div class="card mx-3">
        @if(count($carts)<1)
            <h3>Cart is empty</h3>
        @else
            <table class="table table-hover shopping-cart-wrap">
                <thead class="text-muted">
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col" width="120">Quantity</th>
                    <th scope="col" width="120">Price</th>
                    <th scope="col" width="200" class="text-right">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($carts as $cart)
                    <tr>
                        <td>
                            <figure class="media">
                                <div class="img-wrap"><img src="img/s1.jpeg" class="img-thumbnail img-sm  "></div>
                                <figcaption class="media-body">
                                    <h6 class="title text-truncate">{{$cart->name}} </h6>
                                </figcaption>
                            </figure>
                        </td>
                        <td>
                            <span>{{$cart->quantity}}</span>
                        </td>
                        <td>
                            <div class="price-wrap">
                                <var class="price">USD {{$cart->price}}</var>
                            </div> <!-- price-wrap .// -->
                        </td>
                        <td class="text-right">
                            <a title="" href="" class="btn btn-outline-success" data-toggle="tooltip"
                               data-original-title="Save to Wishlist"> <i class="fa fa-heart"></i></a>
                            <a href="{{Cart::remove($cart->id)}}" class="btn btn-outline-danger"> × Remove</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th scope="col"></th>
                    <th scope="col" width="120">{{$quantity}}</th>
                    <th scope="col" width="120">Total</th>
                    <th scope="col" width="200" class="text-right">{{$total}}</th>
                </tr>
                </tfoot>
            </table>
            <button type="submit" class="btn-block btn btn-success">Сheckout</button>
        @endif
    </div> <!-- card.// -->
@endsection