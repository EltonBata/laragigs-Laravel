@props(['tags'])

@php
    
    $tags = explode(',', $tags);
    
@endphp

<span class="d-flex p-0">

    @foreach ($tags as $tag)
        @if ($tag != '')
            <a href="/?tag={{$tag}}"
                class="btn tags mx-1 bg-dark text-white btn-sm rounded-pill d-flex justify-content-center align-items-center">{{ $tag }}</a>
        @endif
    @endforeach
</span>
