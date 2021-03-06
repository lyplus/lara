/**
 * common.js
 */

function navigation() {
	$(".main-header-top-line ul").slideToggle();
}

$(".document-content-left h5").click(function() {
	id = $(this).attr("id");
	height = $("#n"+id).height()
	if (height <= "50") {
		$("#n"+id).css({"height":"auto","padding-bottom":"5px"});
		$("#"+id+" i").removeClass("fa-caret-right").addClass("fa-caret-down");
	}
	else
	{
		$("#n"+id).css("height","50px");
		$("#"+id+" i").removeClass("fa-caret-down").addClass("fa-caret-right");
	}
});

function news_comment(id,c_id="",nike="") {
	if (c_id == "") {
		var msg = $("#msg").val();
	}else{
		var msg = $("#msg"+c_id).val();
	}
	if (msg=="") return false;
	var _token = $("input[name='_token']").val();
	$.ajax({
		type: "POST",
		url: "/newscomment",
		data: {"id":id, "_token":_token,"msg":msg,"c_id":c_id,"nike":nike},
		dataType: "json",
		success: function(data){
			if (data.status=="error") {
				$(".alert-danger").hide();
	        	$("#msg").before('<div class="alert alert-danger"><strong>提示！</strong>'+data.msg+'。</div>');
	        	return false;
			}
			else
			{
				if (c_id == "") {
					html = '<header><em>提交评论</em></header><div class="alert alert-success"><strong>提示！</strong>评论提交成功。</div>';
					$(".main-content-article-edit-comment").html(html);
					$("#widthoutcomment").hide();
					$(".lists").prepend('<li><div class="comment-info"><a href=""  title="'+data.name+'" class="avatar"><img src="'+data.portrait+'" alt="'+data.name+'"></a><a href="" title="'+data.name+'" class="name">'+data.name+'</a><span class="time">刚刚</span></div><p class="comment-cont" id="comment-cont'+data.cid+'">'+data.newmsg+'</p></li>');
				}
				else
				{
					replay_comment(id,c_id,nike);
					$("#replay_comment"+c_id).html("<font color='#008040'>回复成功</font>");
				}
			}

		},
		error:function(xhr,type,errorThrown){
        	//异常处理；
        	$(".alert-danger").hide();
	        $("#msg").before('<div class="alert alert-danger"><strong>提示！</strong>提交失败，请稍后从试。</div>');
	    }
	});
}

function replay_comment(id,c_id,nike) {
	var cont = $("#comment-cont"+c_id).html();
	var num = $("#replay_comment"+c_id).attr("num");
	var key = id+","+c_id+",'"+nike+"'";
	if (num == 1) {
		$("#comment-cont"+c_id).html(cont+'<textarea id="msg'+c_id+'" placeholder="回复'+nike+',支持Markdown" name="msg"></textarea><button class="btn btn-success" onclick="news_comment('+key+');">发表评论</button>');
		$("#replay_comment"+c_id).attr("num","2");
	}
	else
	{
		$("#comment-cont"+c_id).html(cont.replace('<textarea id="msg'+c_id+'" placeholder="回复'+nike+',支持Markdown" name="msg"></textarea><button class="btn btn-success" onclick="news_comment('+key+');">发表评论</button>',''));
		$("#replay_comment"+c_id).attr("num","1");
	}

}
