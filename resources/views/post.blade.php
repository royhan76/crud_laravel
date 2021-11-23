@extends('layouts.main')

@section('container')

<h2>{{ $post["title"]}}</h2>
<p>By:
    <a class="text-decoration-none" href="/author/{{$post->user->id}}">{{$post->user->name}}</a>

    in

    <a class="text-decoration-none" href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a> </p>
<p>{{ $post["body"]}}</p>

<a href="/post">Back</a>
@endsection
