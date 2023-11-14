@extends('main.layout')
@section('content')
<body>
    <header>
        <section>
            <div class="container col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6"></div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold fs-2 lh-1 mb-3">A platform for independent musicians</h1>
                    <p class="lead fs-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-light btn-lg px-4 me-md-2">Listen now</button>
                    <button type="button" class="btn btn-outline-light btn-lg px-4">Signup for free</button>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </header>
    @include('about-us')
    @include('pricing')
</body>
@endsection