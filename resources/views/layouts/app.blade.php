<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://g.tbcdn.cn/mtb/lib-flexible/0.3.4/??flexible_css.js,flexible.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top navbar-left">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ $company->logo }}" width="50">
                        <p>
                          <span>{{ config('app.name') }}</span>
                          <span>新零售商学院</span>
                        </p>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="/">首页</a></li>
                        <li><a href="{{ route('tidings') }}">公司时事</a></li>
                        <li><a href="{{ route('teachers') }}">师资力量</a></li>
                        <li><a href="{{ route('courses') }}">课程介绍</a></li>
                        <li><a href="{{ route('curricula') }}">开课咨询</a></li>
                        <li><a href="{{ route('case') }}">案例见证</a></li>
                        <li><a href="{{ route('careers') }}">招贤纳士</a></li>
                        <li><a href="{{ route('aboutus') }}">关于我们</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    {{-- <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul> --}}
                </div>
            </div>
        </nav>

        @yield('content')

        <div class="footer-image">
          <div class="footer-box">
              <div class="footer-box-left">
                  <div class="logo">
                      <img src="{{ $company->logo }}" alt="">
                  </div>
                  <p>{{ $company->name }}</p>
              </div>
              <div class="footer-box-right">
                  <p>地址：{{ $company->address }}</p>
                  <p>邮箱：{{ $company->email }}</p>
                  <p>网址：{{ $company->url }}</p>
                  <p>电话：{{ $company->mobile }}</p>
                  <p class="footer-images">
                    <img src="{{ $company->ewm }}" width="60px">
                    {{-- <img src="/images/wechat-logo.png" width="60px"> --}}
                  </p>
              </div>
          </div>
        </div>
        <footer>
          Copyright (c) 2017 huishuoit.com 浙 ICP 备 15019987 号
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
