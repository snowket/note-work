@extends('master')

@section('article')
        {!! Form::open(['action' => 'PostsController@store','class'=>'form','files'=>'true']) !!}


        <hr>
        <div class="form-group">
        {!! Form::label('title', 'Enter Title', array('class' => 'form-control'))!!}
        {!! Form::text('title') !!}
        </div>
        <div class="form-group">
        {!! Form::label('body','Enter Post Body',array('class'=>'form-control')) !!}
        {!! Form::textarea('body') !!}
        </div>
        {!! Form::file('image') !!}
        {!! Form::submit('Save',array('class'=>'col-md-12 btn btn-primary')) !!}

        {!! Form::close() !!}

        @if(!empty($messages))
                @foreach($messages->all() as $massage)
                        {!! $massage !!}
                        @endforeach
        @endif
@stop