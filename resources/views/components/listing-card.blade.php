@props(['listing'])

<div class="container-fluid row mb-5">

    <div class="col-sm-4 p-1">
        <div class="border p-2 d-flex  rounded-1 bg-light lists">
            <a href="" style="width: 150px;">
                <img src="{{ asset('images/ft.png') }}" class="img-fluid list-logo" style="height: 100%;" alt="">
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
