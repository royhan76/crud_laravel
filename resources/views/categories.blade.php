
@extends('layouts.main')


@section('container')
<h1  >{{$title}}</h1>
<article class="mb-2 border-bottom">
        <ul>
            <li>
                <div class="container">
                    <div class="row">
                        @foreach ($categories as $categorie)
                        <div class="col-md-4">
                            <a href="/post?category={{$categorie->slug}}">
                            {{-- <h2><a href="/categories/{{$category->slug}}" class="text-decoration-none">{{$category->name}}</a></h2> --}}
                            <div class="card bg-dark text-white">
                                <img src="https://source.unsplash.com/500x400?{{$categorie->name}}" class="card-img" alt="...">
                                <div class="card-img-overlay d-flex  align-items-center p-0">
                                {{-- {{-- <h5 class="card-title">{{$category->name}}</h5> --}}
                                <h5 class="card-text flex-fill text-center p-4  fs-3 " style="background-color: rgba(0, 0, 0,0, 7)">{{$categorie->name}}</h5>

                                </div>
                            </div>
                        </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </li>
        </ul>
</article>

@endsection


