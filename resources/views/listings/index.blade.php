@extends('layouts.home')
@section('title', 'Home')
@section('content')


    <div class="row my-4 mb-5">

        @include('partials._hero')

        <div class="my-3 px-4 pe-5">
            <form class="d-flex" action="{{ route('index') }}" method="GET">
                <input class="form-control ms-1 me-2" name="search" id="s" type="text" placeholder="Search">
                <button class="btn btn-sm btn-danger me-1" type="submit">Search</button>
            </form>
        </div>

        <x-alert-success />

        <div>

            @if (count($listings) != 0)
                <div class="container-fluid px-4 row mb-2">
                    @foreach ($listings as $listing)
                        <x-listing-card :listing="$listing" />
                    @endforeach
                </div>
            @else
                <p class="m-3">No listing found</p>
            @endif

            <div class="container-fluid">
                {{ $listings->links() }}
            </div>

            <div class="clearfix">
                <a href="{{ route('listing.create') }}" class="btn btn-dark me-4 rounded-0 float-end">Post Job</a>
            </div>
        </div>
    </div>
@endsection
