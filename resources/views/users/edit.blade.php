@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="/css/avatar-jcrop.css">
<meta name="_token" content="{{ csrf_token() }}"/>
@endsection

@section('content')

<div class="container">
    <div class="panel panel-default col-md-10 col-md-offset-1">
        <div class="panel-heading">
            <h4>
                <i class="glyphicon glyphicon-edit"></i> 编辑个人资料
            </h4>
        </div>
        @include('common.error')
        <div class="panel-body">
          <div class="form-group col-lg-12">
            <div class="form-group pull-left">
                <div class="img-wrapper">
                  @if($user->avatar)
                  <img id="img-show" src="{{ $user->avatar }}"/>
                  @else
                    <img id="img-show" src="/images/avatar.png"/>
                  @endif
                </div>
              </div>
              <div class="form-group pull-left">
                <div class="pre-wrapper"><canvas class="pre-show" width="190px" height="190px"></canvas></div>
                <div class="btn-wrapper"><label class="btn btn-hollow" for="src-input">更换头像</label>
                <button class="btn btn-hollow" id="upload-btn">保存头像</button>
                <input id="src-input" type="file" style="display:none" />
              </div>
              </div>

          </div>
            <form action="{{ route('users.update', $user->id) }}" method="POST" accept-charset="UTF-8" >
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="name-field">用户名</label>
                    <input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $user->name ) }}" />
                </div>
                <div class="form-group">
                    <label for="email-field">邮 箱</label>
                    <input class="form-control" type="text" name="email" id="email-field" value="{{ old('email', $user->email ) }}" />
                </div>
                <div class="form-group">
                    <label for="bio-field">个人简介</label>
                    <textarea name="bio" id="bio-field" class="form-control" rows="3">{{ old('bio', $user->bio ) }}</textarea>
                </div>

                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">保存</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

@section('js')
<script src="/js/avatar-jcrop.js"></script>
<!-- <script src="/js/avatar-main.js"></script> -->
<script>
var jcropApi;
var srcImg = $("#img-show")[0];
var srcInput = $("#src-input");
$("#img-show").Jcrop({
  allowSelect: false,
  boxWidth: 360,
  // boxHeight:360,
  // minSize: [ 190, 190 ],
  // maxSize: [ 300, 300 ],
  onChange: getPosition     //选框改变时的事件
},function(){
    jcropApi = this;
});
srcInput.change(function(){
    if(!this.files[0].name.match(/.jpg|.jpeg|.gif|.png|.bmp/i)){
        alert("图片类型不支持");
        return ;
    }
    var reader=new FileReader();
    reader.readAsDataURL(this.files[0]);
    reader.onload=function(){
        srcImg.src = this.result;
        jcropApi.setImage(this.result);
        jcropApi.setOptions({ setSelect : [0,0,190,190] });
        reader=null;
    };
});

function getPosition(p){
    preShow(p.x,p.y,p.w,p.h);
}

var canvas = $(".pre-show")[0];
var cxt = canvas.getContext("2d");
function preShow(x,y,w,h){
    $(".pre-wrapper").show();
    $("#upload-btn").show();

    var img=new Image();
    img.onload = function () {
        cxt.drawImage(img,x,y,w,h,0,0,190,190);
    };
    img.src=srcImg.src;
}

$("#upload-btn").click(function(){
    var src=canvas.toDataURL("image/jpeg");
    // var src=canvas.toDataURL();
    // alert( src);
    if(src.length<1700 || src.length>1024000){
        alert("图片不支持");
        return ;
    }
    $.ajax({
        url: "{{ route('users.avatar', $user->id) }}",
        // url: "{{ url('users/avatar', $user->id) }}",

        type:"POST",
        data:{img:src},
        dataType:"json",
        headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        success:function(data){
            // alert("保存成功");
            window.location.href=data.route;
        }
    });
});

</script>

@endsection
