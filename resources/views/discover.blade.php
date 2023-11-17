@php
  use Illuminate\Support\Facades\Vite;
@endphp
@extends('main.layout')
@section('content')
<div class="container">
    <div class="container my-5">
      <h4 class="text-white">Discover</h4>
      <form class="form-inline my-2 my-sm-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search for artists, band, or song title" aria-label="Search">
      </form>
    </div>
    <div class="flex gap-0 py-0 text-center" style="margin-top: -35px">
      <span class="badge rounded-pill text-bg-primary" style="height: 35px; width: auto; padding: 10px; margin: 2px;">#pop</span>
      <span class="badge rounded-pill text-bg-secondary" style="height: 35px; width: auto; padding: 10px; margin: 2px;">#punk</span>
      <span class="badge rounded-pill text-bg-success" style="height: 35px; width: auto; padding: 10px; margin: 2px;">#heavymetal</span>
      <span class="badge rounded-pill text-bg-danger" style="height: 35px; width: auto; padding: 10px; margin: 2px;">#hifi</span>
      <span class="badge rounded-pill text-bg-warning" style="height: 35px; width: auto; padding: 10px; margin: 2px;">#hiphop</span>
      <span class="badge rounded-pill text-bg-info" style="height: 35px; width: auto; padding: 10px; margin: 2px;">#lofi</span>
      <span class="badge rounded-pill text-bg-light" style="height: 35px; width: auto; padding: 10px; margin: 2px;">#disco</span>
      <span class="badge rounded-pill text-bg-dark" style="height: 35px; width: auto; padding: 10px;margin: 2px;">#indierock</span>
    </div>
  </div>
</section>
 @endsection