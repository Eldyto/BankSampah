@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">

        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="POST">
                @csrf
              <div class="form-floating">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="enail" placeholder="name@example.com" required>
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password"  class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
            </form>

          </main>
    </div>
</div>
@endsection
