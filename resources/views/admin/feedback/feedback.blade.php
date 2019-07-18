@extends('admin.layouts.layouts')

@section('content')
    <h2></h2>
    <div class="container">
        <div class="row">
            @if(count($feedbacks)>0)
                <div>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>From</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Read</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($feedbacks as $feedback)
                            <tr>
                                <th>{{$feedback->name}}</th>
                                <th>{{$feedback->email}}</th>
                                <th>{{$feedback->subject}}</th>
                                <th>{{$feedback->message}}</th>
                                <th><input type="checkbox" class="form-control" name="ready"
                                           value="{{$feedback->ready}}"></th>
                                <th>
                                    <form action="{{route('feedback.destroy',$feedback->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="id" value="{{$feedback->id}}">
                                        <input type="submit" class="btn btn-danger" value="X">
                                    </form>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <h2>No feedback</h2>
            @endif
        </div>
    </div>
@endsection
