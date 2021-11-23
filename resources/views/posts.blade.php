@extends('layouts.main')

@section('container')
<h1  mt-9>Halaman Blog Posts</h1>

@foreach ($blog as $blogs)
<article class="mb-5 border-bottom">


<h2><a href="/post/{{$blogs->slug}}" class="text-decoration-none">{{$blogs["title"]}}</a></h2>
<p>By:
    <a class="text-decoration-none" href="/author/{{$blogs->user->username}}">{{$blogs->user->name}}</a>
    in
    <a class="text-decoration-none" href="/categories/{{$blogs->category->slug}}">{{$blogs->category->name}}</a>
</p>

<p>{{ $blogs["excerpt"]}}</p>
<a class="text-decoration-none" href="/post/{{$blogs->slug}}">Read More...</a>
</article>

@endforeach
@endsection

