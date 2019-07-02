<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ @csrf_token() }}">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <style>
        .container {
            padding: 0.5%;
        }
    </style>
</head>
<body>

@yield('content')
<script>
    {{--$(document).ready(function () {--}}
    {{--$('#create-new-book').click(function () {--}}

    {{--$('#ajax-modal').modal('show')--}}
    {{--})--}}
    {{--$('#btn-save').on('submit',function (event) {--}}
    {{--event.preventDefault();--}}
    {{--if($('#action').val()=='Add')--}}
    {{--{--}}
    {{--$.ajax({--}}
    {{--url:"{{route('abook.store')}}",--}}
    {{--method:"POST",--}}
    {{--data:new FormData(this),--}}
    {{--contentType:false,--}}
    {{--cache:false,--}}
    {{--processData:false,--}}
    {{--dataType:"json",--}}
    {{--success:function (data) {--}}
    {{--var html='';--}}
    {{--if(data.success)--}}
    {{--{--}}
    {{--html='<div class="alert alert-success">'+data.success+'</div>';--}}
    {{--$('#ajax-modal')[0].reset();--}}
    {{--$('#laravel_crud').DataTable().ajax.reload();--}}
    {{--}--}}
    {{--$('#adminForm').html(html);--}}
    {{--}--}}
    {{--})--}}
    {{--}--}}
    {{--})--}}
    {{--})--}}
    {{--$(document).ready(function () {--}}
    {{--$.ajaxSetup({--}}
    {{--header: {--}}

    {{--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
    {{--}--}}
    {{--});--}}

    {{--//    click add book--}}
    {{--$('#create-new-book').click(function () {--}}
    {{--$('#btn-save').val("create new book");--}}
    {{--$('#adminForm').trigger("reset");--}}
    {{--$('#adminCrudModal').html('Add New Book');--}}
    {{--$('#ajax-modal').modal('show')--}}
    {{--});--}}

    {{--//    click edit book--}}

    {{--$('body').on('click','#edit-book',function () {--}}
    {{--let book_id=$(this).data('id');--}}
    {{--$.get('admin/abook/'+book_id+'/edit',function (data) {--}}
    {{--$('#adminCrudModal').html('Edit Book');--}}
    {{--$('#btn-save').val('edit-book');--}}
    {{--$('#ajax-modal').modal('show');--}}
    {{--$('#id').val(data.id);--}}
    {{--$('#title').val(data.title);--}}
    {{--$('#author').val(data.author);--}}
    {{--$('#ISBN').val(data.ISBN);--}}
    {{--$('#category').val(data.category);--}}
    {{--$('#year').val(data.year);--}}
    {{--$('#language').val(data.language);--}}
    {{--$('#description').val(data.description);--}}
    {{--$('#price').val(data.price);--}}
    {{--})--}}
    {{--})--}}
    {{--// delete book--}}
    {{--$('body').on('click','#delete-book',function () {--}}
    {{--let book_id=$(this).data("id");--}}
    {{--confirm("Are you sure want to delete?")--}}

    {{--$.ajax({--}}
    {{--type:"DELETE",--}}
    {{--url:"{{url('admin/abook')}}"+'/'+book_id,--}}
    {{--success:function (data) {--}}
    {{--$("#book_id_").remove();--}}
    {{--},--}}
    {{--error:function (data) {--}}
    {{--console.log('Error:',data)--}}
    {{--}--}}

    {{--})--}}
    {{--})--}}
    {{--}--}}
    {{--)--}}
</script>

@yield('scripts')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</body>
</html>