@props(['listing'])

<div class="col-sm-6 p-1" style="height: 170px !important">

    <div class="border p-2 d-flex h-100 rounded-1 bg-light lists">
        <a href="{{ route('listing.show', $listing->id) }}" style="max-width: 200px;">
            <img src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.jpg') }}"
                class="img-fluid list-logo" style="height: 100%;" alt="">
        </a>

        <div class="ms-3">
            <a href="{{ route('listing.show', $listing->id) }}" class="text-decoration-none text-dark fw-bold p-0 mt-2">{{ $listing->title }}</a>
            <p class="p-0 ">{{ $listing->company }}</p>

            <x-listing-tags :tags="$listing->tags" />

            <p class="my-2">{{ $listing->location }}</p>
        </div>
    </div>

</div>
