@if (session('success'))
    <div class="alert alert-success alert-dismissible w-50 mx-auto my-3">
        <button class="btn-close" data-bs-dismiss='alert'></button>
        {{ session('success') }}
    </div>
@endif
