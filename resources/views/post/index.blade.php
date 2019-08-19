@extends('app');

@section('content')
    <div>
        {!! link_to_route('posts', 'Опубликовано') !!} &nbsp;&nbsp;&nbsp; {!! link_to_route('posts.unpublished', 'Не опубликовано')  !!} &nbsp;&nbsp;&nbsp; {!! link_to_route('post.create', 'Создать') !!}
    </div>
    @foreach($posts as $post)
        <article>
            <h2>{!! $post->title !!}</h2>
            <p>{!! $post->excerpt !!}</p>
            <p> Опубликовано: {{ $post->published_at }}</p>
        </article>
    @endforeach

@stop