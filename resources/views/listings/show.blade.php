@extends('layouts.home')
@section('title', 'Gig')
@section('content')

    <a href="" class="btn link mt-4">back</a>

    <div class="mx-2 mb-5 border bg-light py-3 rounded-1 mt-2">

        <div class="container mx-auto w-25">
            <img src="{{ asset('images/ft.png') }}" alt="" class="img-fluid">
        </div>

        <h5 class="text-center fw-bold mt-3">Projecto Laravel</h5>
        
        <p class="text-center link">Google Ltd</p>

        <span class="d-flex p-0 justify-content-center">
            <a href=""
                class="btn tags mx-1 bg-dark text-white btn-sm rounded-pill d-flex justify-content-center align-items-center">php</a>
            <a href=""
                class="btn tags mx-1 bg-dark text-white btn-sm rounded-pill d-flex justify-content-center align-items-center">js</a>
            <a href=""
                class="btn tags mx-1 bg-dark text-white btn-sm rounded-pill d-flex justify-content-center align-items-center">node</a>
        </span>

        <p class="text-center mt-3">New York</p>

        <hr class="w-75 mx-auto">

        <h4 class="text-center fw-bold ">Description</h4>

        <p class="p-5 text-capitalize">
            Bootstrap 4 is the newest version of Bootstrap; with new components, faster stylesheet and more responsiveness.

            Bootstrap 4 supports the latest, stable releases of all major browsers and platforms. However, Internet Explorer
            9 and down is not supported.

            If you require IE8-9 support, use Bootstrap 3. It is the most stable version of Bootstrap, and it is still
            supported by the team for critical bugfixes and documentation changes. However, new features will NOT be added
            to it.
        </p>

    </div>

@endsection
