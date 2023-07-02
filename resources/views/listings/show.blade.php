@extends('layouts.home')
@section('title', 'Gig')
@section('content')

@include('partials._back')

    <x-alert-success />

    <div class="row">
        <div class="mx-auto col-sm-8 mb-2 border bg-light py-3 rounded-1 mt-2">

            <div class="container mx-auto w-25">
                <img src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.jpg') }}"
                    class="img-fluid list-logo" alt="" class="img-fluid">
            </div>

            <h5 class="text-center fw-bold mt-3">{{ $listing->title }}</h5>

            <p class="text-center link">{{ $listing->company }}</p>

            <div class="d-flex justify-content-center">
                <x-listing-tags :tags="$listing->tags" />
            </div>

            <p class="text-center mt-3">{{ $listing->location }}</p>

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

        @if ($listing->user_id == auth()->user()->id)
            <div class="mx-auto col-sm-8 d-flex mb-3 align-items-center border bg-light rounded-1">
                <a href="{{ route('listing.edit', $listing->id) }}" class="btn link">edit</a>

                <form action="{{ route('listing.destroy', $listing->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn link">delete</button>
                </form>
            </div>
        @endif
    </div>

@endsection
