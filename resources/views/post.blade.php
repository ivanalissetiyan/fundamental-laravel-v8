@extends('layouts.main')

@section('container')


    <h1 class="mb-5">{{ $post->title }}</h1>

    <p>By: Ivan Alissetiyan in <a href="/categories/{{ $post->Category->slug }}">{{ $post->Category->name }}</a></p>

    {!! $post->body !!}

    <a class="d-block mt-3" href="/posts">Bact To Post</a>
@endsection
