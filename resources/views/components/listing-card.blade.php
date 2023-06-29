@props(['listing'])

<div class="col-sm-6 p-1" style="height: ">
    <div class="border p-2 d-flex rounded-1 bg-light lists">
        <a href="" style="max-width: 200px;">
            <img src="{{ asset('images/ft.png') }}" class="img-fluid list-logo" style="height: 100%;" alt="">
        </a>

        <div class="ms-3">
            <a href="{{ route('listing.show', $listing->id) }}" class="btn fw-bold p-0 my-2">{{ $listing->title }}</a>
            <p class="p-0">{{ $listing->company }}</p>

            <x-listing-tags :tags="$listing->tags" />

            <p class="my-2">{{ $listing->city }}</p>
        </div>
    </div>

</div>
