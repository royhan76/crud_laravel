@extends('layouts.main')
@section('container')

<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Form Registration</h1>
            <form action="/register" method="post">
                @csrf
              {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}

              <div class="form-floating">
                <input type="text" class="form-control @error ('name') is-invalid @endError rounded-top mb-1" id="name" name="name" value="{{old('name')}}" placeholder="name" required>
                <label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback" >{{$message}}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" class="form-control mb-1  @error ('name') is-invalid @endError" id="username" name="username" value="{{old('username')}}" placeholder="username" required>
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback" >{{$message}}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="email" class="form-control @error ('name') is-invalid @endError mb-1 " name="email" id="email" value="{{old('email')}}" placeholder="name@example.com" required>
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback" >{{$message}}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" class="form-control @error ('name') is-invalid @endError rounded-bottom mb-1" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback" >{{$message}}</div>
                @enderror
              </div>


              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>

            </form>
            <small class="d-block text-center mt-3">All Ready Registered ? <a href="/login"> Login Now</a></small>


            <p class="mt-5 mb-3 text-muted text-center">&copy; 2021–2025</p>
          </main>



    </div>
</div>


  @endsection
