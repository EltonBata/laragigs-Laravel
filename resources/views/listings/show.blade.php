@extends('layouts.home')
@section('title', 'Gig')
@section('content')

    <a href="" class="btn link mt-4">back</a>

    <div class="mx-2 mb-5 border bg-light py-3 rounded-1 mt-2">

        <div class="container mx-auto w-25">
            <img src="{{ asset('images/ft.png') }}" alt="" class="img-fluid">
        </div>

        <h5 class="text-center fw-bold mt-3">{{ $listing->title }}</h5>

        <p class="text-center link">{{ $listing->company }}</p>

        <span class="d-flex p-0 justify-content-center">
            <a href=""
                class="btn tags mx-1 bg-dark text-white btn-sm rounded-pill d-flex justify-content-center align-items-center">php</a>
            <a href=""
                class="btn tags mx-1 bg-dark text-white btn-sm rounded-pill d-flex justify-content-center align-items-center">js</a>
            <a href=""
                class="btn tags mx-1 bg-dark text-white btn-sm rounded-pill d-flex justify-content-center align-items-center">node</a>
        </span>

        <p class="text-center mt-3">{{ $listing->city }}</p>

        <hr class="w-75 mx-auto">

        <h4 class="text-center fw-bold ">Description</h4>

        <p class="p-5 text-capitalize">{{ $listing->description }}
        </p>

        <a href="" class="btn btn-danger w-75 rounded-pill">Contact Employer</a>
        <a href="" class="btn btn-dark w-75 rounded-pill">Visit Website</a>

    </div>

@endsection
