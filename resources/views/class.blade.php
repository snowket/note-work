@extends('master')

@section('article')
    @foreach($user as $class)
        {{ $class->name }} : {{ $class->power }} <br>
            <b>{{ $class->user->username }} </b>

     @endforeach

    @stop
