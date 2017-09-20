@extends('layouts.app')

@section('content')
<div class="other-tips">
  <p>开课咨询</p>
  <span>curricula</span>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12 course">
      <h4>{{ $curriculum->title }}</h4>
      <p>讲师：{{ $curriculum->teacher }}</p>
      <p>开课时间：{{ $curriculum->created_at }}</p>
      <hr>
    </div>
    <div class="col-md-12">
      <img src="{{ $curriculum->image }}" alt="" width="100%">
      <p>{{ $curriculum->desc }}</p>
    </div>
    <div class="col-md-12" style="margin-bottom: 0.5rem;">
      {!! $curriculum->content !!}
    </div>
  </div>
</div>
@endsection
