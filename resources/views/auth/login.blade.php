@extends('layouts.home')
@section('title', 'Login')
@section('content')


    <div class="row p-4">
        <div class="mt-3 col-md-5 shadow-sm p-3 bg-light border rounded-1 mx-auto">

            <h3 class="text-center mt-3 fw-bold">LOGIN</h3>
            <p class="text-center small">log in to post gigs</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                @error('email')
                    <div class="alert alert-danger alert-dismissible mx-auto my-3">
                        <button class="btn-close" data-bs-dismiss='alert'></button>
                        {{ $message }}
                    </div>
                @enderror


                <div class="my-3">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" name="email" placeholder="elton@gmail.com" />

                </div>


                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password"
                        maxlength="8" minlength="4" />
                </div>


                <div class="my-3">
                    <button class="btn border shadow-sm btn-sm btn-danger">Sign in</button>
                </div>

                <div class="my-3">
                    <span>Do not you have an account?</span>
                    <a href="{{ route('register') }}" class="btn text-danger p-0">Sign up</a>
                </div>


            </form>
        </div>
    </div>
@endsection
