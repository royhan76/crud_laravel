@extends('layouts.main')
@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">

        @if(session()->has('sukses'))

        <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
           {{session('sukses')}}
            <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @if(session()->has('loginError'))

        <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
           {{session('loginError')}}
            <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
            <form action="/login" method="post">
                @csrf
              {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}

              <div class="form-floating">
                <input type="email" class="form-control @error('email')is-invalid @enderror" id="email" name="email" placeholder="name@example.com" autofocus required value="{{old('email')}}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback" >{{$message}}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" class="form-control  @error('password')is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback" >{{$message}}</div>
                @enderror
              </div>


              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

            </form>
            <small class="d-block text-center mt-3">Not Registered ? <a href="/register"> Register Now</a></small>
            <p class="mt-5 mb-3 text-muted text-center">&copy; 2021–2025</p>
          </main>



    </div>
</div>


  @endsection
