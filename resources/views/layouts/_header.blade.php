<div class="main-header">
    <div class="main-header-top-line">
        <a class="logo" href="{{ url('/') }}" title="{{ env('APP_NAME', 'Laravel') }}"><img src="/images/logo.png" title="{{config('app.name')}}" alt="攻城狮123社区"></a>
        <span class="glyphicon glyphicon-option-vertical" onclick="navigation();"></span>
        <ul class="nav navbar-nav category">
          <li><a href="{{ url('/') }}"{!!Request::is('/')?' class="active"':''!!} title="首页">首页</a></li>
          <li><a href="{{route('topics.show')}}"{!!Request::is('topics/show')?' class="active"':''!!}>话题</a></li>
          <li><a href="{{route('navs.show',1)}}"{!!Request::is('navs/1*')?' class="active"':''!!}>PHP</a></li>
          <li><a href="{{route('navs.show',2)}}"{!!Request::is('navs/2*')?' class="active"':''!!}>Python</a></li>
          <li><a href="{{route('navs.show',3)}}"{!!Request::is('navs/3*')?' class="active"':''!!}>开源项目</a></li>
          <li><a href="{{route('navs.show',4)}}"{!!Request::is('navs/4*')?' class="active"':''!!}>Laravel拓展</a></li>
          @auth
          <li>
            <form class="form-inline" style="padding: 10px 15px;margin-left: 230px;">
              <div class="form-group has-success has-feedback">
                <input type="text" class="form-control input-sm" name="keyword" placeholder="搜索内容" value="">
                <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
              </div>
            </form>
        </li>
        @endauth</ul>
        <ul class="nav navbar-nav navbar-right user">
          @guest
          <li><a href="{{ route('login') }}">登录</a></li>
          <li><a href="{{ route('register') }}">注册</a></li>
          @else
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }}<span class="user-avatar pull-right" style="margin-left:8px; margin-top:-5px;"><img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" width="30px" height="30px"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ route('users.edit', Auth::id()) }}">编辑资料</a></li>
                <li><a href="#">退出登录</a></li>
                  <li>
                      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">退出登录</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
              </ul>
          </li>

          @endguest
        </ul>
    </div>
</div>
