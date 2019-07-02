@extends('admin/layouts/app')

@section('content')
    @include('admin/modal/modal')
    <div class="container">
        <h2 style="margin-top: 12px;" class="alert alert-success">CRUD Dashboard </h2><br>
        <div class="row">
            <div class="col-12">
                <button class="btn btn-success mb-2" id="create-new-book">Add Book</button>
                <table class="table table-bordered" id="laravel_crud">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>ISBN</th>
                        <th>Category</th>
                        <th>Pages</th>
                        <th>Year</th>
                        <th>Language</th>
                        <th>Description</th>
                        <th>Price</th>
                        {{--<td colspan="2">Action</td>--}}
                    </tr>
                    </thead>
                    <tbody >
                    {{--@foreach($books as $u_info)--}}
                        {{--<tr id="user_id_{{ $u_info->id }}">--}}
                            {{--<td>{{ $u_info->id  }}</td>--}}
                            {{--<td>{{ $u_info->title }}</td>--}}
                            {{--<td>{{ $u_info->author }}</td>--}}
                            {{--<td>{{ $u_info->ISBN}}</td>--}}
                            {{--<td>{{ $u_info->category }}</td>--}}
                            {{--<td>{{ $u_info->pages }}</td>--}}
                            {{--<td>{{ $u_info->year }}</td>--}}
                            {{--<td>{{ $u_info->language }}</td>--}}
                            {{--<td>{{ $u_info->getExcerpt($u_info->description) }}</td>--}}
                            {{--<td>{{ $u_info->price }}</td>--}}
                            {{--<td><a href="javascript:void(0)" id="edit-book" data-id="{{ $u_info->id }}"--}}
                                   {{--class="btn btn-info">Edit</a></td>--}}
                            {{--<td>--}}
                                {{--<a href="javascript:void(0)" id="delete-book" data-id="{{ $u_info->id }}"--}}
                                   {{--class="btn btn-danger delete-user">Delete</a></td>--}}
                        {{--</tr>--}}
                    {{--@endforeach--}}
                    </tbody>
                </table>
                {{--{{ $books->links() }}--}}
            </div>
        </div>
    </div>

    <script>

        $(document).ready(function () {

            $('#laravel_crud').DataTable({
                processing:true,
                serverSide:true,
                ajax:'{!! route('getdata') !!}',
                columns:[
                    {data:'id',name:'id'},
                    {data:'title',name:'title'},
                    {data:'author',name:'author'},
                    {data:'ISBN',name:'ISBN'},
                    {data:'category',name:'category'},
                    {data:'year',name:'year'},
                    {data:'year',name:'year'},
                    {data:'language',name:'language'},
                    {data:'description',name:'description'},
                    {data:'price',name:'price'},
                    // {data:'price',name:'price'},
                ]
            });
        })
    </script>
@endsection
