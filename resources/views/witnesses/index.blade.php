@extends('layouts.app')

@section('content')
<div class="other-tips">
  <p>案例见证</p>
  <span>withness</span>
</div>
<div class="container">
  <div class="row">
    @foreach ($witnesses as $witness)
      <div class="col-md-4 new">
        <div class="thumbnail">
          <a href="{{ $witness->path() }}">
            <div class="bottom-tips" style="background-image: url('{{ $witness->image }}');">
              <p>{{ $witness->title }}</p>
            </div>
          </a>
          <div class="caption">
            <p>{{ strlen( $witness->desc ) > 150 ? substr($witness->desc, 0, 150) . ' ...' : $witness->desc }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
