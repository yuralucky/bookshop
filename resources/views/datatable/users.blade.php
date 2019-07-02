@extends('datatable.app')
@section('content')
    <div class="container">
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
                </tr>
                </thead>
            </table>
        </div>
    </div>
@include('admin.modal.userModal')
@endsection
@push('scripts')
    <script>
        $(function () {
            $('#table_id').DataTable({
                proccessing: true,
                serverSide: true,
                ajax: '{!! route('users.data') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'}
                ]

            })
        })
    </script>
@endpush