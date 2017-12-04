<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>labelaravel学习网</title>
    <meta name="keywords" content="Laravel学习网,Laravel5.5,Laravel,Laravel教程,Laravel视频" />
    <meta name="description" content="包含laravel5.5视频教程，laravel中文文档，laravel拓展包以及使用教程，致力于推动 Laravel，PHP7，composer等PHP新技术" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
<body>
@include('layouts/_header')
<div class="main-content">
@yield('main-content')
</div>
@include('layouts/_footer')
<script src="{{ asset('js/app.js') }}"></script>
<script src="/js/common.js"></script>
</body>
</html>
