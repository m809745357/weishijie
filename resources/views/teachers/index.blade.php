@extends('layouts.app')

@section('content')
<img src="/images/teach.png" width="100%" class="other-tips">
<div class="container">
  <div class="row">
    @foreach ($teachers as $teacher)
      <div class="col-md-4 new">
        <div class="thumbnail">
          <div class="img-tips" style="background-image: url('{{ $teacher->image }}');">
            <p>{{ $teacher->content }}</p>
          </div>
          <div class="caption">
            <h4>{{ $teacher->name }}</h4>
            <p>{{ strlen( $teacher->desc ) > 150 ? substr($teacher->desc, 0, 150) . ' ...' : $teacher->desc }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
