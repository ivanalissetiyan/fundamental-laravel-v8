@extends('layouts.main')

@section('container')


    <h1 class="mb-5">{{ $post->title }}</h1>

    <p>By: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in
        <a href="/categories/{{ $post->Category->slug }}" class="text-decoration-none">{{ $post->Category->name }}</a>
    </p>

    {!! $post->body !!}

    <a class="d-block mt-3" href="/posts">Bact To Post</a>
@endsection
