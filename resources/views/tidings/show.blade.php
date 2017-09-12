@extends('layouts.app')

@section('content')
<img src="/images/tiding.png" width="100%" class="other-tips">
<div class="container">
  <div class="row">
    <div class="col-md-12 tiding">
      <h4>{{ $tiding->title }}</h4>
      <p>{{ $tiding->created_at }}</p>
      <hr>
    </div>
    <div class="col-md-12">
      <img src="{{ $tiding->image }}" alt="" width="100%">
      <p>{{ $tiding->desc }}</p>
    </div>
    <div class="col-md-12" style="margin-bottom: 0.5rem;">
      {{ $tiding->content }}
    </div>
  </div>
</div>
@endsection
