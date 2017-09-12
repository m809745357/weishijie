@extends('layouts.app')

@section('content')
<img src="/images/course.png" width="100%" class="other-tips">
<div class="container">
  <div class="row">
    <div class="col-md-12 course">
      <h4>{{ $course->title }}</h4>
      <p>讲师：{{ $course->teacher->name }}</p>
      <hr>
    </div>
    <div class="col-md-12">
      <img src="{{ $course->image }}" alt="" width="100%">
      <p>{{ $course->desc }}</p>
    </div>
    <div class="col-md-12" style="margin-bottom: 0.5rem;">
      {{ $course->content }}
    </div>
  </div>  
</div>
@endsection
