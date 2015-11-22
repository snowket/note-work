@extends('master')

@section('article')
<ul>
      @foreach($post as $p)
        <li>

            <article>

                    <h2></h2>



                <header>
                    <h1>Creator : {!! $p->User->username !!}</h1>
                    <p>Published: <time pubdate="pubdate">{!! $p->created_at !!}</time></p>
                </header>
                <p>{!! link_to_action('PostsController@show',$p->title,$p->id) !!}</p>
                ...

            </article>
        </li>
        @endforeach
</ul>
    @stop