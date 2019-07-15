{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--<!-- Required meta tags -->--}}
{{--<meta charset="utf-8">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--<!-- Bootstrap CSS -->--}}
{{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"--}}
{{--integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}

{{--<title>Hello, world!</title>--}}
{{--</head>--}}
{{--<body>--}}
@extends('admin.layouts.layouts')

@section('content')
    <div class="container">
        <div class="align-content-center"><h2>All users</h2></div><br>
        <div class="row">
            <div class="alight-left">
                <button type="button" class="btn btn-success btn-sm" id="add" name="add">Add new user</button>
            </div>
            <table class="table-bordered table table-hover" id="table_id">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)

                    <tr class="tr{{$user->id}}">
                        <th>{{$user->id}}</th>
                        <th data-name="{{$user->name}}">{{$user->name}}</th>
                        <th data-email="{{$user->email}}">{{$user->email}}</th>
                        <th>

                            <form action="" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-info mx-3 edit"
                                        data-id="{{$user->id}}"
                                        data-name="{{$user->name}}"
                                        data-email="{{$user->email}}"
                                        formaction="{{route('users.update',$user)}}"
                                >Edit
                                </button>

                                <a href="#" class="btn btn-info mx-3 showUser"
                                   data-name="{{$user->name}}"
                                   data-email="{{$user->email}}"
                                   data-id="{{$user->id}}">Show</a>
                                <button type="submit" class="btn btn-danger mx-3 delete" data-id="{{$user->id}}"
                                        formaction="{{route('users.destroy',$user)}}" data-user="{{$user->name}}">
                                    &times;
                                </button>
                            </form>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$users->links()}}
    </div>
    <div id="userModel" class="modal fade " role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post" id="userForm">
                    @csrf
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-title form-control">
                        <h4>Add user</h4>
                    </div>
                    <div class="modal-body">

                        <span id="form_output"></span>
                        <div class="form-group">
                            <label for="name">Enter name</label>
                            <input type="text" name="name" class="form-control" id="firstname" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="name">Enter email</label>
                            <input type="text" name="email" class="form-control" id="emailname">
                        </div>
                        <div class="form-group">
                            <label for="text">Enter password</label>
                            <input type="password" name="password" class="form-control" id="password"
                                   autocomplete="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="submit" id="action" value="Add" class="btn btn-info">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="modal fade" id="showUser" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-title form-control">
                    <h4 class="text-center testimonial-avatar">User</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group text-center">
                        <label for="name"> ID</label>

                        <input type="text" name="name" class="form-control" id="showId">
                    </div>
                    <div class="form-group text-center">
                        <label for="name"> name</label>

                        <input type="text" name="name" class="form-control" id="showUser1">
                    </div>
                    <div class="form-group text-center ">
                        <label for="name" class="text-center"> email</label>
                        <input type="text" name="email" class="form-control" id="showEmail">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{--@include('admin.modal.addModal')--}}
    <div class="modal fade" id="editUser" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="EditUser">
                    @csrf
                    @method('patch')
                    <input type="hidden" name="id" id="userid" value="{{$user->id}}">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-title form-control">
                        <h4>Edit user</h4>
                    </div>
                    <div class="modal-body">

                        <span id="form_output"></span>
                        <div class="form-group">
                            <label for="name"> name</label>
                            <input type="text" name="name" class="form-control" id="editname">
                        </div>
                        <div class="form-group">
                            <label for="name"> email</label>
                            <input type="text" name="email" class="form-control" id="editemail">
                        </div>
                        <div class="form-group">
                            <label for="text"> password</label>
                            <input type="password" name="password" class="form-control" id="editpassword"
                                   autocomplete="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="submit" value="Edit" id="userEdit"
                               formaction="{{route('users.update',$user)}}" class="btn btn-info" data-dismiss="modal">
                        {{--<button type="button" class="btn btn-default" data-dismiss="modal">x</button>--}}
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
{{--</body>--}}
{{--</html>--}}