@extends('layouts.app')

@section('content')
<div class="other-tips">
  <p>公司时事</p>
  <span>tidings</span>
</div>
<div class="container">
  <div class="row">
    @foreach ($tidings as $tiding)
      <div class="col-md-6 new">
        <div class="col-md-6">
          <img src="{{ $tiding->image }}" width="100%" height="100%">
        </div>
        <div class="col-md-6">
          <a href="{{ $tiding->path() }}">
            <h4 class="media-heading">{{ $tiding->title }}</h4>
          </a>
          <p>{{ $tiding->created_at }}</p>
          <p>{{ strlen( $tiding->desc ) > 150 ? substr($tiding->desc, 0, 150) . ' ...' : $tiding->desc }}</p>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
