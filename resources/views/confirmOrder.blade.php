@extends('layouts.layouts')
@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="card col-8 ">
                <header class="card-header">
                    <h4 class="card-title mt-2">Confirm Order</h4>
                </header>
                <article class="card-body">
                    <form action="{{route('createOrder')}}" method="post">
                        @csrf

                        <div class="form-row">
                            <div class="col form-group">
                                <label>First name</label>
                                <input type="text" class="form-control" name="firstname" placeholder="">
                            </div> <!-- form-group end.// -->
                            <div class="col form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control" name="lastname" placeholder="">
                            </div> <!-- form-group end.// -->
                        </div> <!-- form-row end.// -->
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="">
                            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div> <!-- form-group end.// -->
                        <div class="form-group">
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="delivery" value="prime">
                                <span class="form-check-label"> Prime shipping </span>
                            </label>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="delivery" value="free">
                                <span class="form-check-label"> Free shipping</span>
                            </label>
                        </div> <!-- form-group end.// -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>City</label>
                                <input type="text" class="form-control" name="city">
                            </div> <!-- form-group end.// -->
                            <div class="form-group col-md-6">
                                <label>Country</label>
                                <select id="inputState" class="form-control" name="country">
                                    <option> Choose...</option>
                                    <option>Ukraine</option>
                                    <option>Poland</option>
                                    <option selected="">United States</option>
                                    <option>Moldova</option>
                                    <option>Germany</option>
                                </select>
                            </div> <!-- form-group end.// -->
                        </div> <!-- form-row.// -->
                        <div class="form-group">
                            <label>Street</label>
                            <input class="form-control" type="text" name="street">
                        </div> <!-- form-group end.// -->
                        <div class="form-group">
                            <label>Apartment</label>
                            <input class="form-control" type="text" name="apartment">
                        </div> <!-- form-group end.// -->
                        <div class="form-group">
                            <label>Total </label>
                            <input class="form-control" type="number" name="total" value="{{$total}}" >
                        </div> <!-- form-group end.// -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> Confirm order  </button>
                        </div> <!-- form-group// -->
                        <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>
                    </form>
                </article> <!-- card-body end .// -->
                <div class="border-top card-body text-center">Have an account? <a href="#">Log In</a></div>
            </div> <!-- card.// -->


        </div>
    </div>
    @endsection