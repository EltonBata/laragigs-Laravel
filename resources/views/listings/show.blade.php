@extends('layouts.home')
@section('title', 'Gig')
@section('content')

    <a href="{{ route('index') }}" class="btn link mt-4">back</a>

    <div class="row">
        <div class="mx-auto col-sm-8 mb-5 border bg-light py-3 rounded-1 mt-2">

            <div class="container mx-auto w-25">
                <img src="{{ asset('images/ft.png') }}" alt="" class="img-fluid">
            </div>

            <h5 class="text-center fw-bold mt-3">{{ $listing->title }}</h5>

            <p class="text-center link">{{ $listing->company }}</p>

            <x-listing-tags :tags="$listing->tag" />

            <p class="text-center mt-3">{{ $listing->city }}</p>

            <hr class="w-75 mx-auto">

            <h4 class="text-center fw-bold ">Description</h4>

            <p class="p-5 text-capitalize">{{ $listing->description }}
            </p>

            <div class="d-flex justify-content-center my-2">
                <a href="" class="btn btn-danger w-75 rounded-pill">Contact Employer</a>
            </div>
            
            <div class="d-flex justify-content-center mb-3">
                <a href="" class="btn btn-dark w-75 rounded-pill">Visit Website</a>
            </div>

        </div>
    </div>

@endsection
