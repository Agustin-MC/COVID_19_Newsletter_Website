@extends('layouts.app')
@section('content')
    <script>
        let dt = new Date();
        document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
    </script>

    <div class="text-sm-left container">
        <div class="container">
            <h1>Blog Posts</h1>
            <p class="lead"></p>
            <div class="col-md-12 blog-main">
                <h5 class="pb-3 mb-4 font-italic border-bottom">From the Public</h5>

                @if(count($messages) > 0)
                    @foreach($messages as $message)
                        <div class="blog-post">
                            <h5 class="blog-post-title initialism"> {{$message->created_at}} ...by {{$message->name}}</h5>
                            <h2 class="py-lg-2">{{$message->message}}</h2>
                            <hr>
                        </div>

                    @endforeach
                @endif

            </div>
        </div>
    </div>
@endsection

@section('sidebar')
    @parent
    <p></p>
@endsection
