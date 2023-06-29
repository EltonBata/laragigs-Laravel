@props(['listing'])

<div class="col-sm-4 p-1">
    <div class="border p-2 d-flex  rounded-1 bg-light lists">
        <a href="" style="width: 150px;">
            <img src="{{ asset('images/ft.png') }}" class="img-fluid list-logo" style="height: 100%;" alt="">
        </a>

        <div class="ms-3">
            <a class="btn fw-bold p-0">{{ $listing->title }}</a>
            <p class="p-0">{{ $listing->company }}</p>

            <x-listing-tags :tags="$listing->tags" />

            <p class="my-2">{{ $listing->city }}</p>
        </div>
    </div>

</div>
