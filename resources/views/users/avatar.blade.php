<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>图片裁剪上传</title>
<meta name="_token" content="{{ csrf_token() }}"/>
<link rel="stylesheet" href="/css/avatar-jcrop.css" type="text/css" />
<style>

    .pre-wrapper{
        display:none;
        float:left;
        margin-left:50px;

    }
    .pre-show{border-radius: 50%;}
    .btn-wrapper{clear:both;}
    #upload-btn{display:none;}

</style>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

<script src="/js/avatar-jcrop.js"></script>
</head>
<body>



<div class="img-wrapper"><img id="img-show" src="/images/avatar.png"/></div>
<div class="pre-wrapper"><canvas class="pre-show" width="190px" height="190px"></canvas></div>
<label for="src-input">浏览</label><input id="src-input" type="file"/>
<div class="btn-wrapper"><button id="upload-btn">上传裁剪图片</button></div>


<script>
    var jcropApi;
    var srcImg = $("#img-show")[0];
    var srcInput = $("#src-input");
    $("#img-show").Jcrop({
      allowSelect: false,
      minSize: [ 110, 110 ],
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
            jcropApi.setOptions({ setSelect : [230,230,30,30] });
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
            cxt.drawImage(img,x,y,w,h,0,0,200,200);
        };
        img.src=srcImg.src;
    }

    $("#upload-btn").click(function(){
        var src=canvas.toDataURL("image/jpeg");
        // var src=canvas.toDataURL();
        // alert( src);
        if(src.length<1700){
            alert("图片不支持");
            return ;
        }
        $.ajax({
            url: "{{url('users/doavatar')}}",
            type:"POST",
            data:{img:src},
            dataType:"json",
            headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
            success:function(data){
                alert("上传成功！文件名："+data);
            }
        });
    });
</script>
</body>
</html>
