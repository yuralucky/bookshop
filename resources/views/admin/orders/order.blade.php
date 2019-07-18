@extends('admin.layouts.layouts')

@section('content')
    <h2></h2>
    <div class="container">
        <div class="row">
            @if(count($orders)>0)
                <div>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Delivery</th>
                            <th>Adress</th>
                            <th>Total</th>
                            <th>Process</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <th>{{$order->lastname}}</th>
                                <th>{{$order->email}}</th>
                                <th>{{$order->delivery}}</th>
                                <th>{{$order->country}},{{$order->city}},street{{$order->street}},{{$order->apartment}}</th>
                                <th>{{$order->total}}</th>
                                <th><input type="checkbox" class="form-control" name="ready"
                                           value="{{$order->ready}}"></th>
                                <th>
                                    <form action="{{route('feedback.destroy',$order->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="id" value="{{$order->id}}">
                                        <input type="submit" class="btn btn-danger" value="X">
                                    </form>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <h2>No Order</h2>
            @endif
        </div>
    </div>
@endsection