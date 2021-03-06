@extends('layouts.app')

@section('content')
<div class="other-tips">
  <p>招贤纳士</p>
  <span>careers</span>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
        <div class="jtwh">
          <strong>招聘信息</strong>
          <span class="hr"></span>
          <span>RECRUITMENT&nbsp;&nbsp;&nbsp;INFORMATION</span>
        </div>
    </div>
    <div class="col-md-12 new title">
      {{ $company->careers }}
    </div>
    <div class="col-md-12 new careers-email">
      <p class="careers-content">招聘邮箱：{{ $company->email}}</p>
    </div>
    <div class="col-md-12 new">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        @foreach ($careers as $career)
          <div class="panel panel-success">
            <div class="panel-heading panel-careers" role="tab" id="heading{{ $career->id }}">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $career->id }}" aria-expanded="true" aria-controls="collapseOne">
              <h4 class="panel-title" style="color: #fff;">
                  {{ $career->title }}
              </h4>
                </a>
            </div>
            <div id="collapse{{ $career->id }}" class="panel-collapse collapse {{ $career->id === 1 ? 'in' : '' }}" role="tabpanel" aria-labelledby="heading{{ $career->id }}">
              <div class="panel-body">
                {!! $career->body !!}
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
