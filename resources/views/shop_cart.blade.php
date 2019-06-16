@extends('layouts')
@section('content')
    <!--/ Intro Single star /-->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Shopping Cart</h1>
                        {{--<span class="color-text-a">Aut voluptas consequatur unde sed omnis ex placeat quis eos. Aut natus officia corrupti qui autem fugit consectetur quo. Et ipsum eveniet laboriosam voluptas beatae possimus qui ducimus. Et voluptatem deleniti. Voluptatum voluptatibus amet. Et esse sed omnis inventore hic culpa.</span>--}}
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
            <tr>
                <td>
                    <figure class="media">
                        <div class="img-wrap"><img src="images/items/1.jpg" class="img-thumbnail img-sm"></div>
                        <figcaption class="media-body">
                            <h6 class="title text-truncate">Product name goes here </h6>
                            <dl class="dlist-inline small">
                                <dt>Size: </dt>
                                <dd>XXL</dd>
                            </dl>
                            <dl class="dlist-inline small">
                                <dt>Color: </dt>
                                <dd>Orange color</dd>
                            </dl>
                        </figcaption>
                    </figure>
                </td>
                <td>
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </td>
                <td>
                    <div class="price-wrap">
                        <var class="price">USD 145</var>
                        <small class="text-muted">(USD5 each)</small>
                    </div> <!-- price-wrap .// -->
                </td>
                <td class="text-right">
                    <a title="" href="" class="btn btn-outline-success" data-toggle="tooltip" data-original-title="Save to Wishlist"> <i class="fa fa-heart"></i></a>
                    <a href="" class="btn btn-outline-danger"> × Remove</a>
                </td>
            </tr>
            <tr>
                <td>
                    <figure class="media">
                        <div class="img-wrap"><img src="images/items/2.jpg" class="img-thumbnail img-sm"></div>
                        <figcaption class="media-body">
                            <h6 class="title text-truncate">Product name goes here </h6>
                            <dl class="dlist-inline small">
                                <dt>Size: </dt>
                                <dd>XXL</dd>
                            </dl>
                            <dl class="dlist-inline small">
                                <dt>Color: </dt>
                                <dd>Orange color</dd>
                            </dl>
                        </figcaption>
                    </figure>
                </td>
                <td>
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </td>
                <td>
                    <div class="price-wrap">
                        <var class="price">USD 35</var>
                        <small class="text-muted">(USD10 each)</small>
                    </div> <!-- price-wrap .// -->
                </td>
                <td class="text-right">
                    <a title="" href="" class="btn btn-outline-success" data-toggle="tooltip" data-original-title="Save to Wishlist"> <i class="fa fa-heart"></i></a>
                    <a href="" class="btn btn-outline-danger btn-round"> × Remove</a>
                </td>
            </tr>
            <tr>
                <td>
                    <figure class="media">
                        <div class="img-wrap"><img src="images/items/3.jpg" class="img-thumbnail img-sm"></div>
                        <figcaption class="media-body">
                            <h6 class="title text-truncate">Product name goes here </h6>
                            <dl class="dlist-inline small">
                                <dt>Size: </dt>
                                <dd>XXL</dd>
                            </dl>
                            <dl class="dlist-inline small">
                                <dt>Color: </dt>
                                <dd>Orange color</dd>
                            </dl>
                        </figcaption>
                    </figure>
                </td>
                <td>
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </td>
                <td>
                    <div class="price-wrap">
                        <var class="price">USD 45</var>
                        <small class="text-muted">(USD15 each)</small>
                    </div> <!-- price-wrap .// -->
                </td>
                <td class="text-right">
                    <a title="" href="" class="btn btn-outline-success" data-toggle="tooltip" data-original-title="Save to Wishlist"> <i class="fa fa-heart"></i></a>
                    <a href="" class="btn btn-outline-danger btn-round"> × Remove</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div> <!-- card.// -->


@endsection