var jcropApi;
var srcImg = $("#img-show")[0];
var srcInput = $("#src-input");
$("#img-show").Jcrop({
  allowSelect: false,
  boxWidth: 360,
  boxHeight:360,
  minSize: [ 110, 110 ],
  maxSize: [ 300, 300 ],
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
    if(src.length<1700 || src.length>1024000){
        alert("图片不支持");
        return ;
    }
    $.ajax({
        // url: "{{ route('users.avatar', $user->id) }}",
        url: "{{ url('users.avatar', $user->id) }}",

        type:"POST",
        data:{img:src},
        dataType:"json",
        headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        success:function(data){
            // alert("上传成功！文件名："+data);
        }
    });
});
