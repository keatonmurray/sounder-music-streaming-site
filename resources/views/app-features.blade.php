@extends('main.layout')
@section('content')
  <div class="container">
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-transparent">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal text-white">Punny headline</h1>
        <p class="lead font-weight-normal text-white">And an even wittier subheading to boot.</p>
        <a class="btn btn-light" href="#">Visit FAQ's</a>
      </div>
      <div class="product-device box-shadow d-none d-md-block"></div>
      <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-transparent mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5 text-white">Fully customizable webstore</h2>
          <p class="lead text-white">Build your personal webstore for all your merch.</p>
        </div>
        <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
      <div class="bg-transparent mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5 text-white">High-res audio streaming</h2>
          <p class="lead text-white">Enjoy slick interface with high-quality music streaming.</p>
        </div>
        <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
    </div>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-transparent mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5 text-white">Keep 100% of your royalties</h2>
          <p class="lead text-white">At $5/month, keep 100% of your earnings. No questions asked.</p>
        </div>
        <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
      <div class="bg-transparent mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5 text-white">Free version available</h2>
          <p class="lead text-white">Get the same perks at no cost. We'll only take a 10% cut of your sales.</p>
        </div>
        <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
    </div>
  </div>
  </section>
  @include('signup-link')
@endsection