@extends('layouts.app')

@section('content')
<img src="/images/consultation.png" width="100%" class="other-tips">
<div class="container">
  <div class="row">
    @foreach ($curricula as $curriculum)
      <div class="col-md-12 new con">
        <div class="col-md-3 consultation">
          <img src="{{ $curriculum->course->image }}" alt="" width="100%" height="100%">
        </div>
        <div class="col-md-6">

          <div class="consultation-text">
            <h3 style="color: #333333">{{ $curriculum->course->title }}</h3>
            <h4 style="color: #31b069">讲师：{{ $curriculum->course->teacher->name }}</h4>
            <h4 style="color: #aaaaaa">开课时间：{{ $curriculum->started_at }}</h4>
          </div>
        </div>
        <div class="col-md-3 consultation-desc">
          <a href="{{ $curriculum->course->path() }}">查看详情</a>
        </div>
      </div>
    @endforeach
      <div class="col-md-12 loading">
          <div class="loading-more">
              <span>加载更多</span>
          </div>
      </div>
  </div>
</div>
@endsection
