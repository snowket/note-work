@extends('master')

@section('article')
@if(!empty($persons))
    <ul>
        @foreach($persons as $person)
            <li>
                <lebel >Username: </lebel> <b>{!! $person->User->username !!}</b> <br>
                <lebel class="email">Email : </lebel> {!! $person->email !!}

            </li>
        @endforeach
    </ul>
   @endif
    @stop
