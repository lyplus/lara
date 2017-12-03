
<!DOCTYPE html>
<html>
<head>
    <title>Laravel Artisan-专业的Laravel学习交流平台。- Laravel学习网</title>
    <meta name="keywords" content="Laravel学习网,Laravel5.5,Laravel,Lumen中文网,Php Artisan,Laravel教程,Laravel视频" />
    <meta name="description" content="Laravel学习网,主要用于学习php框架排行榜第一的laravel框架和lumen框架，包含laravel视频教程，laravel中文文档，laravel拓展包以及使用教程，致力于推动 Laravel，PHP7、php-fig，composer 等 PHP 新技术" />
    <meta name="360-site-verification" content="8ecbce7e3155bd2925eb4d302822fd61" />
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="stylesheet" href="https://phpartisan.cn/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://phpartisan.cn/css/index.css">
    <link rel="stylesheet" href="https://phpartisan.cn/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://phpartisan.cn/fonts/iconfont.css">
    <script src="https://phpartisan.cn/vendor/jquery-1.11.1.min.js"></script>
    <script src="https://phpartisan.cn/bootstrap/js/bootstrap.js"></script>
    <script src="https://phpartisan.cn/js/common.js"></script>
    </head>
<body>
<div class="main-header">
    <div class="main-header-top-line">
        <a href="/"><img src="https://phpartisan.cn/img/logo2.png"></a>
        <span class="fa fa-align-center" onclick="navigation();"></span>
        <ul>
          <li role=presentation><a href="/" title="首页" target="_blank">首页</a></li>
          <li><a href="https://phpartisan.cn/specials/1">关于我们</a></li>
          <li><a href="https://phpartisan.cn/submission">投稿/提问</a></li>
          <li><a href="https://phpartisan.cn/specials/3">开源项目</a></li>
          <li><a href="https://phpartisan.cn/specials/2">Laravel拓展</a></li>
        </ul>
    </div>
</div>
<div class="main-navigation">
    <div class="main-navigation-content">
        <span class="main-navigation-content-menu fa fa-align-center" onclick="mainmenu();" style="font-size: 18px;line-height: 60px;"></span>
        <ul>
                        <li role=presentation><a href="/" title="首页" target="_blank">首页</a></li>
                        <li role=presentation><a href="/docs/5.5/" title="Laravel中文文档" target="_blank">Laravel中文文档</a></li>
                        <li role=presentation><a href="/docs/2/" title="Lumen中文文档" target="_blank">Lumen中文文档</a></li>
                        <li role=presentation><a href="/specials/4" title="APP下载" target="_blank">APP下载</a></li>
        </ul>
    </div>
</div>
<div class="main-content">
    <div class="main-content-left">
    <ul>
                <li>
            <h5><a href="https://phpartisan.cn/news/56.html">mysql 大数据去重与复制</a></h5>
            <font><a href="#">earnpls</a> • 21 次浏览 • 0 个回复 • 2017年11月28日</font>
                        <a href="https://phpartisan.cn/news/56.html">
                <img src="/uploads/201711281111043420.jpg" alt="mysql 大数据去重与复制">
            </a>
                        MySQL提高大数据表查询重复记录的效率

如果数据量在1000万以上，我们普通日常的SQL获取重复数据基本就没反应了。其实我们可以用下列方法先建立一个临时表存储逾期数据

CREATETABLEresults_tmpAS(
SELECTphoneFROMr...
            <span><a href="https://phpartisan.cn/news/56.html">阅读全文</a></span>
        </li>
                <li>
            <h5><a href="https://phpartisan.cn/news/55.html">LNMP中web高并发优化配置以及配置详解</a></h5>
            <font><a href="#">earnpls</a> • 46 次浏览 • 0 个回复 • 2017年11月21日</font>
                        <a href="https://phpartisan.cn/news/55.html">
                <img src="/uploads/201711211556499060.jpg" alt="LNMP中web高并发优化配置以及配置详解">
            </a>
                        LNMP下web高并发优化配置

一、nginx配置优化(nginx.cnf)
nginx.cnf为nginx的配置文件，我们可以在这里优化我们的nginx服务器，ubuntu中文件位置为/etc/nginx/nginx.conf

1、worker...
            <span><a href="https://phpartisan.cn/news/55.html">阅读全文</a></span>
        </li>
                <li>
            <h5><a href="https://phpartisan.cn/news/54.html">mysql大量数据数据迁移方案</a></h5>
            <font><a href="#">earnpls</a> • 39 次浏览 • 4 个回复 • 2017年11月21日</font>
                        <a href="https://phpartisan.cn/news/54.html">
                <img src="/uploads/201711211049403728.jpg" alt="mysql大量数据数据迁移方案">
            </a>
                        导出数据库数据
导出我们使用mysqldump即可，我们可以导出一个数据库

mysqldump-uroot-ptedsadasdaibmibm.sql

如果想导出所有数据库或者多个数据库，可以参考

导出所有数据库
mysqldum...
            <span><a href="https://phpartisan.cn/news/54.html">阅读全文</a></span>
        </li>
                <li>
            <h5><a href="https://phpartisan.cn/news/53.html">[ laravel爬虫实战--进阶篇 ] guzzle异常处理与环境变量</a></h5>
            <font><a href="#">earnpls</a> • 30 次浏览 • 0 个回复 • 2017年11月15日</font>
                        <a href="https://phpartisan.cn/news/53.html">
                <img src="/uploads/201711152251548050.jpg" alt="[ laravel爬虫实战--进阶篇 ] guzzle异常处理与环境变量">
            </a>
                        一、异常处理

请求传输过程中出现的错误Guzzle将会抛出异常。

在发送网络错误(连接超时、DNS错误等)时，将会抛出GuzzleHttp\Exception\RequestException异常。该异常继承自GuzzleHttp\Exception\Trans...
            <span><a href="https://phpartisan.cn/news/53.html">阅读全文</a></span>
        </li>
                <li>
            <h5><a href="https://phpartisan.cn/news/52.html">laravel基于Redis实现任务队列的基本配置和使用</a></h5>
            <font><a href="#">earnpls</a> • 38 次浏览 • 0 个回复 • 2017年11月09日</font>
                        <a href="https://phpartisan.cn/news/52.html">
                <img src="/uploads/201711091403522832.jpg" alt="laravel基于Redis实现任务队列的基本配置和使用">
            </a>
                        为什么使用队列

在Web开发中，我们经常会遇到需要批量处理任务的场景，比如群发邮件、秒杀资格获取等，我们将这些耗时或者高并发的操作放到队列中异步执行可以有效缓解系统压力、提高系统响应速度和负载能力。

实现队列有多种方式，Laravel也支持多种队列实现驱动，比如数据库、R...
            <span><a href="https://phpartisan.cn/news/52.html">阅读全文</a></span>
        </li>
                <li>
            <h5><a href="https://phpartisan.cn/news/51.html">laravel5.*轻松实现维护模式以及允许指定 IP 用户访问(添加用户白名单)</a></h5>
            <font><a href="#">earnpls</a> • 22 次浏览 • 0 个回复 • 2017年11月09日</font>
                        <a href="https://phpartisan.cn/news/51.html">
                <img src="/uploads/201711090031356432.jpg" alt="laravel5.*轻松实现维护模式以及允许指定 IP 用户访问(添加用户白名单)">
            </a>
                        aravel使用中，我们需要对网站进行维护，升级以及程序修复。在升级过程中，常常会抛出错误页面或者出现其他问题，这样对我们的用户体验一点都不友好，还好，在laravel中，给出了一个好的解决方案:

在app/start/global.php中给出了提示代码:

App::dow...
            <span><a href="https://phpartisan.cn/news/51.html">阅读全文</a></span>
        </li>
                <li>
            <h5><a href="https://phpartisan.cn/news/50.html">[ laravel爬虫实战--进阶篇 ] guzzle异常处理与环境变量</a></h5>
            <font><a href="#">earnpls</a> • 26 次浏览 • 0 个回复 • 2017年11月09日</font>
                        <a href="https://phpartisan.cn/news/50.html">
                <img src="/uploads/201711090015438169.jpg" alt="[ laravel爬虫实战--进阶篇 ] guzzle异常处理与环境变量">
            </a>
                        一、异常处理

请求传输过程中出现的错误Guzzle将会抛出异常。

在发送网络错误(连接超时、DNS错误等)时，将会抛出GuzzleHttp\Exception\RequestException异常。该异常继承自GuzzleHttp\Exception\Trans...
            <span><a href="https://phpartisan.cn/news/50.html">阅读全文</a></span>
        </li>
                <li>
            <h5><a href="https://phpartisan.cn/news/49.html">[ 拓展包: laravel-google-authenticator ] 通过Google身份验证器为你的网站打造一个动态手机令牌</a></h5>
            <font><a href="#">earnpls</a> • 131 次浏览 • 0 个回复 • 2017年11月07日</font>
                        <a href="https://phpartisan.cn/news/49.html">
                <img src="/uploads/201711071632393965.jpg" alt="[ 拓展包: laravel-google-authenticator ] 通过Google身份验证器为你的网站打造一个动态手机令牌">
            </a>
                        Google身份验证器与两步验证功能配合，可在您登录Google帐户时为您平添一重安全保障。启用两步验证之后，当您登录帐户时，需要提供密码和此应用生成的验证码。配置完成后，无需网络连接或蜂窝连接即可获得验证码。官网链接http://www.google.com/2step

为什...
            <span><a href="https://phpartisan.cn/news/49.html">阅读全文</a></span>
        </li>
                <li>
            <h5><a href="https://phpartisan.cn/news/48.html">lumen发送邮件配置以及常见问题汇总</a></h5>
            <font><a href="#">earnpls</a> • 22 次浏览 • 0 个回复 • 2017年11月04日</font>
                        <a href="https://phpartisan.cn/news/48.html">
                <img src="/uploads/201711041412274364.jpg" alt="lumen发送邮件配置以及常见问题汇总">
            </a>
                        一、Lumen安装Email
在composer.json文件的require段添加&quot;illuminate/mail&quot;:&quot;5.3.&quot;，然后执行composerupdate安装一下拓展包

添加邮件配置文件
一个是在vender/lumen-frame...
            <span><a href="https://phpartisan.cn/news/48.html">阅读全文</a></span>
        </li>
                <li>
            <h5><a href="https://phpartisan.cn/news/47.html">[ laravel爬虫实战--进阶篇 ] guzzle使用cookies实现模拟登录站点爬取网页内容</a></h5>
            <font><a href="#">earnpls</a> • 29 次浏览 • 0 个回复 • 2017年11月03日</font>
                        <a href="https://phpartisan.cn/news/47.html">
                <img src="/uploads/201711032339123786.jpg" alt="[ laravel爬虫实战--进阶篇 ] guzzle使用cookies实现模拟登录站点爬取网页内容">
            </a>
                        在我们使用爬虫的过程中，经常需要模拟登录后台，获取更多数据，我们怎么去模拟登录呢？其实就是在登录的时候记录住登录cookie，每次请求带上cookie，实现模拟登录。

Guzzle可以使用cookies请求参数为你维护一个cookie会话，当发送一个请求时，cooki...
            <span><a href="https://phpartisan.cn/news/47.html">阅读全文</a></span>
        </li>
            </ul>
    <div class="main-content-article-more">
                <a class=page-number>第 1 页 / 共 6 页</a>
                <a class=older-posts href="https://phpartisan.cn?page=2">下一页</a>
            </div>
</div>
        <div class="main-content-right">
                <ul class="gonggao">
            <header><h5>公告</h5></header>
                            <span>本站主要用于学习交流Laravel技术，分享Laravel优秀案例；同时非常欢迎大家投稿哦！如果有招聘信息也可以联系我我帮忙发布哦！</span>
                    </ul>
                <ul class="notice">
            <header><h5>社区</h5></header>
                                            <li>QQ交流群：562864481</li>
                                <li>准备开源中，请稍等～</li>
                                    </ul>
                <ul class="advertisement">
            <header><h5>关注我们</h5></header>
                                            <li ><a href="https://jq.qq.com/?_wv=1027&amp;k=5GkGBsB" target="_blank"><img src="https://phpartisan.cn/uploads/201709101420291030.jpg"></a>扫码加入QQ群</li>
                                <li  style="border: none;"><a href="https://phpartisan.cn" target="_blank"><img src="https://phpartisan.cn/uploads/201709101422532951.jpg"></a>手机浏览本站</li>
                                    </ul>
            </div>
    </div>
<div class="main-footer">
    <div class="main-footer-content">
        <ul class="left">
            <header><h5>最新文章</h5></header>
                        <li><a href="https://phpartisan.cn/news/56.html">mysql 大数据去重与复制</a><span>2017年11月28日</span></li>
                        <li><a href="https://phpartisan.cn/news/55.html">LNMP中web高并发优化配置以及配置详解</a><span>2017年11月21日</span></li>
                        <li><a href="https://phpartisan.cn/news/54.html">mysql大量数据数据迁移方案</a><span>2017年11月21日</span></li>
                    </ul>
        <ul class="center">
            <header><h5>标签云</h5></header>
                        <li><a target="_blank" href="https://phpartisan.cn/news/16.html">https</a></li>
                        <li><a target="_blank" href="https://phpartisan.cn/news/1.html">ubuntu搭建laravel环境</a></li>
                        <li><a target="_blank" href="https://phpartisan.cn/?keyword=%E6%8B%93%E5%B1%95">拓展包</a></li>
                        <li><a target="_blank" href="https://phpartisan.cn/news/2.html">artisan开发</a></li>
                        <li><a target="_blank" href="https://phpartisan.cn/news/8.html">拓展包开发教程</a></li>
                    </ul>
        <ul class="right">
            <header><h5>友链</h5></header>
                        <li >
                        <a target="_blank" href="https://ptorch.com/">pytorch中文网</a>
                        <a target="_blank" href="http://bbs.earnp.com/">一沙社区</a>
                        <a target="_blank" href="https://ession.cn/">意行</a>
                        </li>
                        <li  style="border:none;" >
                        <a target="_blank" href="https://www.aliyun.com/">阿里云</a>
                        <a target="_blank" href="https://www.qcloud.com/">腾讯云</a>
                        <a target="_blank" href="http://pytorch.org/">pytorch</a>
                        </li>
                    </ul>
    </div>
    <div class="main-footer-footer">
        Copyright © <a>Laravel学习网 </a>| 京ICP备17031240号-2 | erarpls技术支持
        <script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
    </div>
</div>
</body>
</html>
