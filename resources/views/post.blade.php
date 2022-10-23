{{-- @dd($post); --}}

@extends('layouts.main')
@section('container')
    <article>
        <h1>{{ $post->title }}</h1>

        <p>By. <a href="/authors/{{ $post->author->username }}"></a> in <a href="/categories/{{ $post->category->slug }}" class="me-2" >{{ $post->author->name }}</a>{{ $post->category->name }}</p>

        {!! $post->body !!}
    </article>
    <a href="/posts">Back to Posts</a>
@endsection