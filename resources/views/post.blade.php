@extends('master')


@section('article')
        <article>
            <header>
                <h1>Creator : {!! $post->User->username !!}</h1>
                <p>Published: <time pubdate="pubdate">{!! $post->created_at !!}</time></p>
            </header>
            <p>{!! $post->title !!}</p>
            ...
            <footer>
                <p>{!! $post->body !!}</p>
                {!!  Html::image('Images/'.$post->id.'.jpg','A phone box',array('class' => 'thumb')) !!}
            </footer>
        </article>
@stop
