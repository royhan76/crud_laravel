@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <h1 class="mb-5">{{ $post["title"]}}</h1>
            <p>By:
                <a class="text-decoration-none" href="/author/{{$post->user->username}}">{{$post->user->name}}</a>
                in
                <a class="text-decoration-none" href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a> </p>
            {!! $post->body !!}
            {{-- <p>{{ $post["body"]}}</p> --}}

            <a href="/post">Back</a>

        </div>
    </div>
</div>


@endsection
