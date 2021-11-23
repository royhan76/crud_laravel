
@extends('layouts.main')


@section('container')
<h1  mt-9>Halaman Category : {{$category}}</h1>

{{-- @dump($category) --}}

@foreach ($posts as $post)
<article class="mb-5 border-bottom">
<h2><a href="/posts/{{$post->slug}}">{{$post->title}}</a></h2>
{{-- <p>{{$post->excerpt}}</p> --}}

{!!$post->excerpt!!}
</article>

@endforeach
@endsection


