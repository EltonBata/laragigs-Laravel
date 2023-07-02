@extends('layouts.home')
@section('title', 'Create')
@section('content')

    <div class="mt-5 col-sm-12 border rounded-1 mx-auto p-3 bg-light w-50">

        <h3 class="text-center mt-3 fw-bold">CREATE A GIG</h3>
        <p class="text-center small">Post a gig to find a developer</p>

        <form action="{{ route('listing.store') }}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="mt-3">
                <label for="" class="form-label">Company</label>
                <input type="text" name="company" class="form-control" value="{{ old('company') }}">
                @error('company')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-3">
                <label for="" class="form-label">Job Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-3">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-3">
                <label for="" class="form-label">Job Location</label>
                <input type="text" name="location" class="form-control" value="{{ old('location') }}">
                @error('location')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-3">
                <label for="" class="form-label">Website/URL</label>
                <input type="url" name="website" class="form-control" value="{{ old('website') }}">
                @error('website')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-3">
                <label for="" class="form-label">Tags(Comma Separated)</label>
                <input type="text" name="tags" class="form-control" value="{{ old('tags') }}">
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

            <div class="mt-3">
                <label for="" class="form-label">Description</label>
                <textarea name="description" class="form-control">{{ old('description') }}</textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="clearfix mt-3">
                <button type="submit" class="btn float-end btn-dark rounded-0">Create</button>
            </div>
        </form>

    </div>

@endsection
