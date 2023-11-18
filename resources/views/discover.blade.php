@php
  use Illuminate\Support\Facades\Vite;
@endphp
@extends('main.layout')
@section('content')
  <div class="container">
    @include('partials.artist-search')
    <div class="flex gap-0 py-0 text-center">
      @include('partials.tags')
    </div>
  </div>
  @include('components.releases')
</section>
 @endsection