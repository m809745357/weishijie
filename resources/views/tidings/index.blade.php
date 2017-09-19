@extends('layouts.app')

@section('content')
<div class="other-tips">
  <p>公司时事</p>
  <span>tidings</span>
</div>
<div class="container">
  <div class="row">
    @foreach ($tidings as $tiding)
      <div class="col-md-12">
        <div class="col-md-3">
          <img src="{{ $tiding->image }}" width="100%" height="160px">
        </div>
        <div class="col-md-9 tiding-desc">
          <a href="{{ $tiding->path() }}">
            <h4 class="media-heading">{{ $tiding->title }}</h4>
          </a>
          <p>{{ $tiding->created_at }}</p>
          <p>{{ strlen( $tiding->desc ) > 150 ? substr($tiding->desc, 0, 150) . ' ...' : $tiding->desc }}</p>
          <a href="{{ $tiding->path() }}" class="tiding-detail">查看详情</a>
        </div>
      </div>
      <div class="col-md-12">
        <hr>
      </div>
    @endforeach
  </div>
</div>
@endsection
