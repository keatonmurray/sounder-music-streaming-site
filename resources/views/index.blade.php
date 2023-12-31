@extends('main.layout')
@section('content')
@php
  use Illuminate\Support\Facades\Vite;
@endphp
<body>
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6"></div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold gs-2 lh-1 mb-3 text-white">A platform for independent musicians</h1>
            <p class="lead fs-6 text-white">Listen to your favourite tracks, support independent artists, or sell your own music. Sounder is an artist-first music streaming platform that lets you keep more of your earnings.</p>
            <br>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="/artists" type="button" class="btn btn-light btn-lg px-4 me-md-2">
                  <span>
                    <i class="fa-solid fa-circle-play"></i>  Browse music
                  </span>
                </a>
                <button type="button" class="btn btn-outline-light btn-lg px-4">Signup for free</button>
            </div>
        </div>
        </div>
    </div>
    <div class="image">
        <img src="{{Vite::asset('resources/images/bg.png')}}" alt="">
    </div>
</section>
</header>
</body>
@endsection