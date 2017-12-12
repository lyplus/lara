<!DOCTYPE html>
<html lang="zh-CN">
<head>
@yield('title')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="/css/common.css" rel="stylesheet">
@yield('css')
</head>
<body>
@include('layouts/_header')
<div class="main-content">
@include('layouts/_message')
@yield('content')
</div>
@include('layouts/_footer')
<script src="{{ asset('js/app.js') }}"></script>
<script src="/js/common.js"></script>
@yield('js')
</body>
</html>
