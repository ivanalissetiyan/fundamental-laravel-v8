@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>By: <a href="/authors/{{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in
                    <a href="/posts?category={{ $post->Category->slug }}"
                        class="text-decoration-none">{{ $post->Category->name }}</a>
                </p>
                <img src="https://source.unsplash.com/1200x400?{{ $post->Category->name }}"
                    alt="https://source.unsplash.com/1200x400?{{ $post->Category->name }}" class="img-fluid">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>


                <a class="d-block mt-3" href="/posts">Bact To Post</a>
            </div>
        </div>
    </div>
@endsection
