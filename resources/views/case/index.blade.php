@extends('layouts.app')

@section('content')
<img src="/images/case.png" width="100%" class="other-tips">
<div class="container">
  <div class="row">
      <div class="col-md-12 new">
        <!-- 16:9 aspect ratio -->
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="{{ $company->video }}" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md-12 new">
        <h4>{{ $company->title }}</h4>
        <hr>
        <p>{{ $company->desc }}</p>
      </div>
      <div class="col-md-12 new">
        {{ $company->body }}
      </div>
  </div>
</div>
@endsection
