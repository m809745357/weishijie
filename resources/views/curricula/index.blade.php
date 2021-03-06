@extends('layouts.app')

@section('content')
<div class="other-tips">
  <p>开课咨询</p>
  <span>curricula</span>
</div>
<div class="container">
  <div class="row">
    @foreach ($curricula as $curriculum)
      <div class="col-md-12 new con">
        <div class="col-md-3 consultation">
          <img src="{{ $curriculum->image }}" alt="" width="100%" height="100%">
        </div>
        <div class="col-md-6">

          <div class="consultation-text">
            <h3 style="color: #333333">{{ $curriculum->title }}</h3>
            <h4 style="color: #31b069">讲师：{{ $curriculum->teacher }}</h4>
            <h4 style="color: #aaaaaa">开课时间：{{ $curriculum->started_at }}</h4>
          </div>
        </div>
        <div class="col-md-3 consultation-desc">
          <a href="{{ $curriculum->path() }}">查看详情</a>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
