<!DOCTYPE html>
<html lang="en">
<head>
    <title>BookShop</title>

    @include('layouts.icon.icon')
    @include('layouts.css.css')

</head>
<body>

@include('layouts.partial.header')
@include('layouts.flash.success')
<div class="click-closed"></div>
@include('layouts.search.search')


@include('layouts.flash.errors')
@yield('content')

@include('layouts.partial.footer')

@include('layouts.scripts.script')
</body>
</html>
