
@extends('layouts.main')


@section('container')
<h1  >Halaman Categories</h1>

{{-- @dump($category) --}}

@foreach ($categories as $category)
<article class="mb-2 border-bottom">

    <ul>
        <li>
        <h2><a href="/categories/{{$category->slug}}" class="text-decoration-none">{{$category->name}}</a></h2>
    </li>
</ul>

</article>

@endforeach
@endsection


