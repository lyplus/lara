<div class="main-header">
    <div class="main-header-top-line">
        <a href="/"><img src="https://phpartisan.cn/img/logo2.png"></a>
        <span class="glyphicon glyphicon-option-vertical" onclick="navigation();"></span>
        <ul class="nav navbar-nav">
          <li><a href="{{ url('/') }}" title="首页" target="_blank">首页</a></li>
          <li><a href="https://phpartisan.cn/specials/1">PHP</a></li>
          <li><a href="https://phpartisan.cn/submission">Python</a></li>
          <li><a href="https://phpartisan.cn/specials/3">开源项目</a></li>
          <li><a href="https://phpartisan.cn/specials/2">Laravel拓展</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            <li><a href="#">登录</a></li>
            <li><a href="#">注册</a></li>
        </ul>
        <form action="/search" class="navbar-form navbar-right" style="margin-top:10px;" _lpchecked="1">
        <div class="form-group has-feedback">
          <input class="form-control input-sm" name="keyword" placeholder="搜索内容" type="text" value="">
          <i class="glyphicon glyphicon-search form-control-feedback"></i>
        </div>
      </form>
    </div>
</div>
<div class="main-navigation">
    <div class="main-navigation-content">
        <span class="main-navigation-content-menu glyphicon glyphicon-align-justify" onclick="mainmenu();" style="font-size: 18px;line-height: 60px;"></span>
        <ul>
                        <li role=presentation><a href="/" title="首页" target="_blank">首页</a></li>
                        <li role=presentation><a href="/docs/5.5/" title="Laravel中文文档" target="_blank">Laravel中文文档</a></li>
                        <li role=presentation><a href="/docs/2/" title="Lumen中文文档" target="_blank">Lumen中文文档</a></li>
                        <li role=presentation><a href="/specials/4" title="APP下载" target="_blank">APP下载</a></li>
        </ul>
    </div>
</div>
