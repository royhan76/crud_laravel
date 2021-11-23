@extends('layouts.main')

@section('container')

<h2>{{$title}}</h2>
<h3>{{$nama}}</h3>
<h5>{{$email}}</h5>
<img src="img/{{$image}}" alt="{{$nama}} " width="200">

@endsection

