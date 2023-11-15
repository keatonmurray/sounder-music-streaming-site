@extends('main.layout')
@section('content')
<body>
    <header>
        <section>
            <div class="container col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6"></div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold gs-2 lh-1 mb-3">A platform for independent musicians</h1>
                    <p class="lead fs-6">Stream your favourite music, support independent artists, or sell your own music. Sounder is an artist-first music streaming platform that lets you keep more of your earnings.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-light btn-lg px-4 me-md-2">Browse music</button>
                        <button type="button" class="btn btn-outline-light btn-lg px-4">Learn more</button>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </header>
    @include('about-us')
    @include('app-features')
    @include('discover')
    @include('signup-link')
</body>
@endsection