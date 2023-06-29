@props(['tags'])

@php
    
    $tags = explode(',', $tags);
    
@endphp

<span class="d-flex p-0 justify-content-evenly">

    @foreach ($tags as $tag)
        <a href=""
            class="btn tags mx-1 bg-dark text-white btn-sm rounded-pill d-flex justify-content-center align-items-center">{{ $tag }}</a>
    @endforeach
</span>
