@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <h1 class="mb-3">{{ $post["title"]}}</h1>
            <p>By:
                <a class="text-decoration-none" href="/post?user={{$post->user->username}}">{{$post->user->name}}</a>
                in
                <a class="text-decoration-none" href="/post?category={{$post->category->slug}}">{{$post->category->name}}</a> </p>
                <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}">

                <article class="my-2 mb-3 fs-5">

                {!! $post->body !!}

            </article>

            <a class="btn btn-primary text-decoration-none" href="/post"> << Back</a>

        </div>
    </div>
</div>


@endsection
