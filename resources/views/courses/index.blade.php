@extends('layouts.app')

@section('content')
<div class="other-tips">
  <p>课程介绍</p>
  <span>courses</span>
</div>
<div class="container">
  <div class="row">
    @foreach ($courses as $course)
      <div class="col-md-4 new">
        <div class="thumbnail">
          <a href="{{ $course->path() }}">
            <div class="bottom-tips" style="background-image: url('{{ $course->image }}');">
              <p>{{ $course->title }}</p>
            </div>
          </a>
          <div class="caption">
            <h4>讲师：{{ $course->teacher }}</h4>
            <p>{{ strlen( $course->desc ) > 150 ? substr($course->desc, 0, 150) . ' ...' : $course->desc }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
