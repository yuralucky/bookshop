@extends('datatable.app')
@section('content')
    <div class="container">
        <div class="row">
            <table class="table-bordered table table-hover" id="table_id1">
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
                    <th>Action</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(function () {
            $('#table_id1').DataTable({
                proccessing: true,
                serverSide: true,
                ajax: '{!! route('books.data') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'title', name: 'title'},
                    {data: 'author', name: 'author'},
                    {data: 'ISBN', name: 'ISBN'},
                    {data: 'category', name: 'category'},
                    {data: 'year', name: 'year'},
                    {data: 'language', name: 'language'},
                    {data: 'description', name: 'description'},
                    {data: 'price', name: 'price'},
                ]

            })
        })
    </script>
@endpush