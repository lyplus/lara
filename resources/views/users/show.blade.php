@extends('layouts.app')

@section('title')
<title>{{ $user->name }}个人中心 labelaravel学习网</title>
<meta name="keywords" content="Laravel学习网,Laravel5.5,Laravel,Laravel教程,Laravel视频" />
<meta name="description" content="包含laravel5.5视频教程，laravel中文文档，laravel拓展包以及使用教程，致力于推动 Laravel，PHP7，composer等PHP新技术" />
@stop

@section('content')

<div class="row">

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="media">
                    <div align="center">
                        <img class="thumbnail img-responsive" src="{{ $user->avatar }}" width="300px" height="300px">
                    </div>
                    <div class="media-body">
                        <hr>
                        <h4><strong>个人简介</strong></h4>
                        <p>{{$user->bio}}</p>
                        <hr>
                        <h4><strong>注册于</strong></h4>
                        <p>{{$user->created_at}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <span>
                    <h1 class="panel-title pull-left" style="font-size:30px;">{{ $user->name }} <small>{{ $user->email }}</small></h1>
                </span>
            </div>
        </div>
        <hr>

        {{-- 用户发布的内容 --}}
        <div class="panel panel-default">
            <div class="panel-body">
                暂无数据 ~_~
            </div>
        </div>

    </div>
</div>
@stop
