@extends('layouts.home')
@section('title', 'Home')
@section('content')
    <div class="row mt-4">

        <div class="bg-danger shadow-sm col-sm py-5">

            <h2 class="text-center text-white">LARA<span class="text-dark">GIGS</span></h2>
            <p class="text-center text-white">Find or post Laravel jobs & projects</p>
            <div class="mx-auto d-flex">
                <a href="{{ route('register') }}" class="btn btn-outline-light mx-auto">SIGN UP TO LIST A GIG</a>
            </div>
        </div>

        <div class="my-3">
            <form class="d-flex" action="{{ route('index') }}" method="GET">
                <input class="form-control ms-1 me-2" name="search" type="text" placeholder="Search">
                <button class="btn btn-sm btn-danger me-1" type="submit">Search</button>
            </form>
        </div>

        <div>

            <div class="container-fluid row mb-5">
                @foreach ($listings as $listing)
                    <x-listing-card :listing="$listing" />
                @endforeach
            </div>

            <div class="clearfix">
                <a href="" class="btn btn-dark me-4 rounded-0 float-end">Post Job</a>
            </div>
        </div>
    </div>
@endsection
