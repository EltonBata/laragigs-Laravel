@extends('layouts.home')
@section('title', 'Home')
@section('content')


    <div class="row mt-4">

        @include('partials._hero')

        <div class="my-3">
            <form class="d-flex" action="{{ route('index') }}" method="GET">
                <input class="form-control ms-1 me-2" name="search" id="s" type="text" placeholder="Search">
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
                <a href="{{ route('listing.create') }}" class="btn btn-dark me-4 rounded-0 float-end">Post Job</a>
            </div>
        </div>
    </div>
@endsection
