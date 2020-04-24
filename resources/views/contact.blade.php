@extends('layouts.app')
@section('content')
    <h1>Contact</h1>
    {!! Form::open(['url' => 'contact/submit']) !!}
        <div clas="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name','',['class' => 'form-control', 'placeholder' => 'Enter name'])}}
        </div>
        <div clas="form-group">
            {{Form::label('email', 'E-Mail Address')}}
            {{Form::text('email', '',['class' => 'form-control', 'placeholder' => 'johnsmith@example.com'])}}
        </div>
        <div clas="form-group">
            {{Form::label('message', 'Share Your Story')}}
            {{Form::textarea('message', '',['class' => 'form-control', 'placeholder' => 'Your Message'])}}
        </div>
        <div>
            {{Form::submit('Submit',['class'=> 'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}
@endsection


