@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">

        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
          </div>
        @endif

        @if (session()->has('loginError'))
        <div class="alert alert-danger" role="alert">
            {{ session('loginError') }}
          </div>
        @endif

        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Please Log In</h1>
            <form action="/login" method="POST">
            @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password"  class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Log in</button>
            </form>

            <small class="d-block text-center mt-4">Not Registered? <a href="/register">Register Now!</a></small>

          </main>
    </div>
</div>
@endsection
