@extends('layouts.app')

@section('content')
<img src="{{ $company->banner }}" width="100%" class="img-top">
<img src="/images/middle.png" width="100%">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jtwh">
              <strong>集团文化</strong>
              <span class="hr"></span>
              <span>GAOUP&nbsp;&nbsp;&nbsp;CULTURE</span>
            </div>
        </div>
        <div class="col-md-12">
          <div class="jtwh-media">
            <div class="jtwh-media-left">
                <img class="media-object" src="{{ $company->image }}" width="100%">
            </div>
            <div class="jtwh-media-body">
              {{-- <p>微世界成立于2014年注册资本人民币1千万元，其前身为“长沙市新国际外国语培训学校”，是一家集日语、韩语、法语、德语、西班牙五大语种的专业语言培训机构，经历12年发展全资分公司和学校分布于长沙、武汉、广州、郑州、西安、南京、杭州、成都、上海共计9座城市，全国拥有各语种全职授课老师290名以上，管理运营员工150名左右，年培训学员超过20000名，学员考取国际语言资格证书（过级率）达到85%，就业率90%。</p>
              <p>公司以集团总部运营为核心模式，同意部署各项业务工作。洋光二外同时还拥有独立完整的软件系统开发团队，自主开发完成洋光独立只是产权的 ERP 系统、洋光课堂线上教学系统、BELLO语伴交流软件，2018年底将打造完成国内远程教育产业中小语种培训第一品牌。2015年成立旅行社，以满足培训学员、员工出国游学、旅游的需要。</p> --}}
              <p>{{ $company->content }}</p>
            </div>
          </div>

          <img src="/images/tips.png" alt="" width="100%" class="tips">
        </div>
        <div class="col-md-12">
            <div class="jtwh">
              <strong>发展历程</strong>
              <span class="hr"></span>
              <span>DEVELOPMENT&nbsp;&nbsp;&nbsp;HISTORY</span>
            </div>
        </div>
        @foreach ($hisroies as $hisroy)
          <div class="col-md-8 col-md-offset-2">
            <div class="media fzlc">
              <div class="media-left">
                <a href="#" class="fzlc-left">
                  <p>{{ $hisroy->year }}</p>
                  <img src="/images/circle.png" width="36" height="36">
                </a>
              </div>
              <div class="media-body fzlc-media-body">
                <h4 class="media-heading">{{ $hisroy->title }}</h4>
                <p>{{ $hisroy->desc }}</p>
              </div>
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection
