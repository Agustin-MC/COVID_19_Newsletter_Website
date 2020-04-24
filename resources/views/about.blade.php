@extends('layouts.app')
@section('content')
    <h1>About</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda ipsa, iste minus nihil nulla quidem vel velit voluptates! Animi asperiores deleniti inventore magnam nemo provident quod veritatis. Deleniti, id, nemo.</p>

@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection
