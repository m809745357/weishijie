@extends('layouts.app')

@section('content')
<div class="other-tips">
  <p>公司时事</p>
  <span>tidings</span>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12 tiding">
      <h4>{{ $tiding->title }}</h4>
      <p>{{ $tiding->created_at }}</p>
      <hr>
    </div>
    <div class="col-md-12 new">
      <img src="{{ $tiding->image }}" alt="" width="100%">
    </div>
    <div class="col-md-12">
      <p>{{ $tiding->desc }}</p>
    </div>
    <div class="col-md-12" style="margin-bottom: 0.5rem;">
      {!! $tiding->content !!}
    </div>
  </div>
</div>
@endsection
