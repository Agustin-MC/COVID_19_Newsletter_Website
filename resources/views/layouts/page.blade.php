<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>COVID 19 Newsletter</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('inc.navbar')

<div class="container">
    @if(Request::is('/'))
        @include('inc.showcase')
    @endif
    <div class="row" >
        <div class="col-md-12 col-lg-12">
            @include('inc.messages')
            @yield('content')
        </div>
    </div>
</div>
<footer class="text-center footer" >
    Copyright 2020 &copy Agustin
</footer>
</body>
</html>
