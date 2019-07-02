<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel DataTables </title>

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/dataTable.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            padding-top: 40px;
        }
    </style>
</head>
<body>
<div class="container">
    @yield('content')
</div>

<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('js/jquery.datatable.js')}}"></script>
<!-- Bootstrap JavaScript -->
<script src="{{asset('js/bootstrap.js')}}"></script>
<!-- App scripts -->
@stack('scripts')
</body>
</html>