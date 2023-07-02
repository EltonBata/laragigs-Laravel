@extends('layouts.home')
@section('title', 'Register')
@section('content')


    <div class="row p-4">
        <div class="mt-3 col-md-5 shadow-sm p-3 bg-light border rounded-1 mx-auto">

            <h3 class="text-center mt-3 fw-bold">REGISTER</h3>
            <p class="text-center small">sign up to post gigs</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="my-3">
                    <label class="form-label">Username</label>
                    <input class="form-control" type="text" name="username" placeholder="Your name"
                        value="{{ old('username') }}" />
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>



                <div class="my-3">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" name="email" placeholder="elton@gmail.com"
                        value="{{ old('email') }}" />
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password" Confirmation />
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input class="form-control" type="password" name="password_confirmation" placeholder="Password Confirmation" />

                </div>


                <div class="my-3">
                    <button class="btn border shadow-sm btn-sm btn-danger">Sign up</button>
                </div>

                <div class="my-3">
                    <span>Have you an account?</span>
                    <a href="{{ route('login') }}" class="btn text-danger p-0">Sign in</a>
                </div>


            </form>
        </div>
    </div>
@endsection
