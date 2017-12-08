<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>图片裁剪上传</title>
<link rel="stylesheet" href="/css/avatar-jcrop.css" type="text/css" />
<style>
    .jcrop-holder{
        float:left;
    }
    .pre-wrapper{
        display:none;
        float:left;
        margin-left:50px;

        padding: 6px;
        border: 1px rgba(0,0,0,.4) solid;
        background-color: white;

        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;

        -webkit-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
        -moz-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
        box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
    }
    .btn-wrapper{clear:both;}
    #upload-btn{display:none;}
</style>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="/js/avatar-jcrop.js"></script>
</head>
<body>

<label for="src-input">选择图片：</label><input id="src-input" type="file"/>
<div class="img-wrapper"><img id="img-show" src=" "/></div>
<div class="pre-wrapper"><canvas class="pre-show" width="200px" height="200px"></canvas></div>
<div class="btn-wrapper"><button id="upload-btn">上传裁剪图片</button></div>
<script>
    var jcropApi;
    var srcImg = $("#img-show")[0];
    var srcInput = $("#src-input");
    $("#img-show").Jcrop({
        allowSelect: true,
        allowMove: true,
        allowResize: true,
        baseClass: 'jcrop',
        bgColor: 'black',
        bgOpacity: 0.6,             //背景透明度
        // bgFade: true,
        aspectRatio: 1,
        setSelect : [280,280,50,50],    //设定4个角的初始位置
        borderOpacity: 0.4,
        drawBorders: true,
        dragEdges: true,
        boxWidth: 400,
        // fadeTime: 400,
        // animationDelay: 20,
        // swingSpeed: 3,
        onChange: getPosition     //选框改变时的事件
    },function(){
        jcropApi = this;
    });
    srcInput.change(function(){
        if(!this.files[0].name.match(/.jpg|.jpeg|.gif|.png|.bmp/i)){
            alert("你选择的文件类型不被支持！");
            return ;
        }
        var reader=new FileReader();
        reader.readAsDataURL(this.files[0]);
        reader.onload=function(){
            srcImg.src = this.result;
            jcropApi.setImage(this.result);
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
        $.ajax({
            url:"upload",
            type:"POST",
            data:{img:src},
            dataType:"json",
            success:function(data){
                alert("上传成功！文件名："+data);
            }
        });
    });
</script>
</body>
</html>
