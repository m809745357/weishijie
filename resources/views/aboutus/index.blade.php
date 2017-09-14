@extends('layouts.app')

@section('content')
<div class="other-tips">
  <p>关于我们</p>
  <span>aboutus</span>
</div>
<div class="container">
  <div class="row">
    @foreach ($abouts as $about)
      <div class="col-md-12">
        @if ($about->id % 2 == 1)
          <div class="col-md-6">
            <img src="{{ $about->image }}" width="100%">
          </div>
          <div class="col-md-6">
            <h3>{{ $about->title }}</h3>
            <p class="about-desc">{{ $about->desc }}</p>
          </div>
        @else
          <div class="col-md-6">
            <h3>{{ $about->title }}</h3>
            <p class="about-desc">{{ $about->desc }}</p>
          </div>
          <div class="col-md-6">
            <img src="{{ $about->image }}" width="100%">
          </div>
        @endif
      </div>
      <div class="col-md-12 new"><hr></div>
    @endforeach
  </div>
</div>
@endsection
