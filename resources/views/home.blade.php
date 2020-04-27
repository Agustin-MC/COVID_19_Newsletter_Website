@extends('layouts.app')
@section('content')
    <h1><p> <span id="datetime"></span></p>
        <script>
            let dt = new Date();
            document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
        </script>
        @if(count($messages) > 0)
            @foreach($messages as $message)
                <ul class="list-group text">
                    <li class="list-group-item">Date: {{$message->created_at}}</li>
                    <li class="list-group-item">Name: {{$message->name}}</li>
                    <li class="list-group-item">Message: {{$message->message}}</li>
                </ul>
            @endforeach
        @endif
    </h1>
@endsection



@section('sidebar')
    @parent
    <p></p>
@endsection
