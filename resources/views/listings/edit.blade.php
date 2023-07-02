@extends('layouts.home')
@section('title', 'Gig')
@section('content')

    <div class="mt-5 col-sm-12 border rounded-1 mx-auto p-3 bg-light w-50">

        <h3 class="text-center mt-3 fw-bold">EDIT GIG</h3>
        <p class="text-center small">Edit: {{ $listing->title }}</p>

        <form action="{{ route('listing.update', $listing->id) }}" method="post" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mt-3">
                <label for="" class="form-label">Company</label>
                <input type="text" name="company" class="form-control" value="{{ $listing->company }}">
                @error('company')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-3">
                <label for="" class="form-label">Job Title</label>
                <input type="text" name="title" class="form-control" value="{{ $listing->title }}">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-3">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $listing->email }}">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-3">
                <label for="" class="form-label">Job Location</label>
                <input type="text" name="location" class="form-control" value="{{ $listing->location }}">
                @error('location')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-3">
                <label for="" class="form-label">Website/URL</label>
                <input type="url" name="website" class="form-control" value="{{ $listing->website }}">
                @error('website')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-3">
                <label for="" class="form-label">Tags(Comma Separated)</label>
                <input type="text" name="tags" class="form-control" value="{{ $listing->tags }}">
                @error('tags')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-3">
                <label for="" class="form-label">Company Logo</label>
                <input type="file" name="logo" class="form-control">
                @error('logo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="
            mt-3" style="max-width: 200px;">
                <img src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.jpg') }}"
                    class="img-fluid list-logo" style="height: 100%;" alt="">
            </div>

            <div class="mt-3">
                <label for="" class="form-label">Description</label>
                <textarea name="description" class="form-control">{{ $listing->description }}</textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="clearfix mt-3">
                <button type="submit" class="btn float-end btn-dark rounded-0">Update</button>
            </div>
        </form>

    </div>

@endsection
