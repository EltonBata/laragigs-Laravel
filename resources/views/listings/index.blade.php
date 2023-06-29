@extends('layouts.home')
@section('title', 'Home')
@section('content')
    <div class="row mt-4">

        <div class="bg-danger shadow-sm col-sm py-5">

            <h2 class="text-center text-white">LARA<span class="text-dark">GIGS</span></h2>
            <p class="text-center text-white">Find or post Laravel jobs & projects</p>
            <div class="mx-auto d-flex">
                <a href="{{ route('register') }}" class="btn btn-outline-light mx-auto">SIGN UP TO LIST A GIG</a>
            </div>
        </div>

        <div class="my-3">
            <form class="d-flex" action="">
                <input class="form-control ms-1 me-2" type="text" placeholder="Search">
                <button class="btn btn-sm btn-danger me-1" type="submit">Search</button>
            </form>
        </div>

        <div>

            <div class="container-fluid row mb-5">

                <div class="col-sm-4 p-1">
                    <div class="border p-2 d-flex  rounded-1 bg-light lists">
                        <a href="" style="width: 150px;">
                            <img src="{{ asset('images/ft.png') }}" class="img-fluid list-logo" style="height: 100%;"
                                alt="">
                        </a>

                        <div class="ms-3">
                            <a class="btn fw-bold p-0">Hello World</a>
                            <p class="p-0">Google Ltd</p>

                            <span class="d-flex p-0 justify-content-evenly">
                                <a href=""
                                    class="btn tags mx-1 bg-dark text-white btn-sm rounded-pill d-flex justify-content-center align-items-center">php</a>
                                <a href=""
                                    class="btn tags mx-1 bg-dark text-white btn-sm rounded-pill d-flex justify-content-center align-items-center">js</a>
                                <a href=""
                                    class="btn tags mx-1 bg-dark text-white btn-sm rounded-pill d-flex justify-content-center align-items-center">node</a>
                            </span>
                            <p class="my-2">New York</p>
                        </div>
                    </div>

                </div>

                <div class="col-sm-4 p-1">
                    <div class="border p-2 d-flex  rounded-1 bg-light lists">
                        <a href="" style="width: 150px;">
                            <img src="{{ asset('images/ft.png') }}" class="img-fluid list-logo" style="height: 100%;"
                                alt="">
                        </a>

                        <div class="ms-3">
                            <a class="btn fw-bold p-0">Hello World</a>
                            <p class="p-0">Google Ltd</p>

                            <span class="d-flex p-0 justify-content-evenly">
                                <a href=""
                                    class="btn tags mx-1 bg-dark text-white btn-sm rounded-pill d-flex justify-content-center align-items-center">php</a>
                                <a href=""
                                    class="btn tags mx-1 bg-dark text-white btn-sm rounded-pill d-flex justify-content-center align-items-center">js</a>
                                <a href=""
                                    class="btn tags mx-1 bg-dark text-white btn-sm rounded-pill d-flex justify-content-center align-items-center">node</a>
                            </span>
                            <p class="my-2">New York</p>
                        </div>
                    </div>

                </div>

                <div class="col-sm-4 p-1">
                    <div class="border p-2 d-flex  rounded-1 bg-light lists">
                        <a href="" style="width: 150px;">
                            <img src="{{ asset('images/ft.png') }}" class="img-fluid list-logo" style="height: 100%;"
                                alt="">
                        </a>

                        <div class="ms-3">
                            <a class="btn fw-bold p-0">Hello World</a>
                            <p class="p-0">Google Ltd</p>

                            <span class="d-flex p-0 justify-content-evenly">
                                <a href=""
                                    class="btn tags mx-1 bg-dark text-white btn-sm rounded-pill d-flex justify-content-center align-items-center">php</a>
                                <a href=""
                                    class="btn tags mx-1 bg-dark text-white btn-sm rounded-pill d-flex justify-content-center align-items-center">js</a>
                                <a href=""
                                    class="btn tags mx-1 bg-dark text-white btn-sm rounded-pill d-flex justify-content-center align-items-center">node</a>
                            </span>
                            <p class="my-2">New York</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="clearfix">
                <a href="" class="btn btn-dark me-4 rounded-0 float-end">Post Job</a>
            </div>
        </div>
    </div>
@endsection
