@extends('layouts')
@section('content')
    <!--/ Property Single Star /-->
    <section class="property-single nav-arrow-b">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
                        <div class="carousel-item-b">
                            <img src="img/slide-2.jpg" alt="">
                        </div>
                        <div class="carousel-item-b">
                            <img src="img/slide-3.jpg" alt="">
                        </div>
                        <div class="carousel-item-b">
                            <img src="img/slide-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-md-5 col-lg-4">
                            <div class="property-price d-flex justify-content-center foo">
                                <div class="card-header-c d-flex">
                                    <div class="card-box-ico">
                                        <span class="ion-money">$</span>
                                    </div>
                                    <div class="card-title-c align-self-center">
                                        <h5 class="title-c">15000</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="property-summary">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="title-box-d section-t4">
                                            <h3 class="title-d">Quick Summary</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary-list">
                                    <ul class="list">
                                        <li class="d-flex justify-content-between">
                                            <strong>Property ID:</strong>
                                            <span>1134</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Location:</strong>
                                            <span>Chicago, IL 606543</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Property Type:</strong>
                                            <span>House</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Status:</strong>
                                            <span>Sale</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Area:</strong>
                                            <span>340m
                        <sup>2</sup>
                      </span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Beds:</strong>
                                            <span>4</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Baths:</strong>
                                            <span>2</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Garage:</strong>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 section-md-t3">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Property Description</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="property-description">
                                <p class="description color-text-a">
                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                    Curae; Donec velit
                                    neque, auctor sit amet
                                    aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum
                                    porta.
                                    Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget
                                    tincidunt
                                    nibh pulvinar quam id dui posuere blandit.
                                </p>
                                <p class="description color-text-a no-margin">
                                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue
                                    leo eget
                                    malesuada. Quisque velit nisi,
                                    pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                                </p>
                            </div>
                            <div class="row section-t3">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Amenities</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="amenities-list color-text-a">
                                <ul class="list-a no-margin">
                                    <li>Balcony</li>
                                    <li>Outdoor Kitchen</li>
                                    <li>Cable Tv</li>
                                    <li>Deck</li>
                                    <li>Tennis Courts</li>
                                    <li>Internet</li>
                                    <li>Parking</li>
                                    <li>Sun Room</li>
                                    <li>Concrete Flooring</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 offset-md-1">
                    <button type="submit" class="btn btn-a btn-block">Buy</button>
                </div>
            </div>
        </div>
    </section>
    <!--/ Property Single End /-->
@stop