@extends('layouts.main')

@section('container')
<h1  class="text-center mb-3">{{$title}}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/post" method="GET">
            @if (request('category'))
            <input type="hidden" name="category" value="{{request('category')}}">
            @endif
            @if (request('user'))
            <input type="hidden" name="category" value="{{request('user')}}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari ...." aria-label="" aria-describedby="" name="search" value="{{request('search')}}">
                <button class="btn btn-dark" type="submit" id="button-addon2">Cari</button>
              </div>
        </form>
    </div>
</div>

@if ($posts->count())

<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x300?{{$posts[0]->category->name}}" class="card-img-top" alt="{{$posts[0]->category->name}}">
    <div class="card-body text-center">
      <h5 class="card-title"><a class="text-decoration-none" href="/post/{{$posts[0]->slug}}">{{$posts[0]->title}}</a> </h5>
      <p>
        <small class="text-muted">
        By:<a class="text-decoration-none" href="/post?user={{$posts[0]->user->username}}">{{$posts[0]->user->name}}</a>
        in
        <a class="text-decoration-none" href="/post?category={{$posts[0]->category->slug}}">{{$posts[0]->category->name}}</a>
        </small> {{$posts[0]->created_at->diffForHumans( )}}
    </p>
      <p class="card-text">{{$posts[0]->excerpt}}</p>
        <a class="text-decoration-none btn btn-primary" href="/post/{{$posts[0]->slug}}">Read More...</a>
    </div>
  </div>


<div class="containe ">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2 text-red" style="background-color: rgba(0, 0, 0, 0, 8)" >
                        <a class="text-decoration-none" href="/post?category={{$post->category->slug}}">{{$post->category->name}}</a> </div>
                    <img src="https://source.unsplash.com/500x400?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}">
                    <div class="card-body">
                    <h5 class="card-title"><a class="text-decoration-none" href="/post/{{$post->slug}}">{{$post->title}}</a></h5>
                    <a class="text-decoration-none" href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
                    <p class="card-text">S{{$post->excerpt}}</p>
                    <a href="/post/{{$post->slug}}" class="btn btn-primary">Read More...</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@else
<p class="text-center fs-4">No Post Found</p>
@endif

<div class="d-flex justify-content-center">

    {{ $posts->links() }}
</div>



@endsection

