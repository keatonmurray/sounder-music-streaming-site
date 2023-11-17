@php
  use Illuminate\Support\Facades\Vite;
@endphp
@extends('main.layout')
@section('content')
<div class="container">
  <div class="container">
    <div class="container my-5">
      <h4 class="text-white">Discover</h4>
      <form class="form-inline my-2 my-sm-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search for artists, band, or song title" aria-label="Search">
      </form>
    </div>
    <div class="flex gap-0 py-0 text-center">
      <form action="">
        <span class="badge rounded-pill text-bg-primary">#pop</span>
        <span class="badge rounded-pill text-bg-secondary">#punk</span>
        <span class="badge rounded-pill text-bg-success">#heavymetal</span>
        <span class="badge rounded-pill text-bg-danger">#hifi</span>
        <span class="badge rounded-pill text-bg-warning">#hiphop</span>
        <span class="badge rounded-pill text-bg-info">#lofi</span>
        <span class="badge rounded-pill text-bg-light">#disco</span>
        <span class="badge rounded-pill text-bg-dark">#indierock</span>
      </form>
    </div>
  </div>
</section>
 @endsection