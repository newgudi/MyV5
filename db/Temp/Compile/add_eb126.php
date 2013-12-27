<?php if(!defined("HDPHP_PATH"))exit;C("DEBUG_SHOW",false);?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>添加内容</title>
	<script type='text/javascript' src='http://127.0.0.1/v5/core/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
	<link href="http://127.0.0.1/v5/core/Extend/Org/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"><script src="http://127.0.0.1/v5/core/Extend/Org/bootstrap/js/bootstrap.min.js"></script>
  <!--[if lte IE 6]>
  <link rel="stylesheet" type="text/css" href="http://127.0.0.1/v5/core/Extend/Org/bootstrap/ie6/css/bootstrap-ie6.css">
  <![endif]-->
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="http://127.0.0.1/v5/core/Extend/Org/bootstrap/ie6/css/ie.css">
  <![endif]-->
</head>
<body>
	
<form action="<?php echo U('add');?>" method="post">
	<table class="table table-hover table-bordered" style="width:1000px;">
		<tr>
			<td width="100">标题</td>
			<td><input type="text" name='title'></td>
		</tr>
		<tr>
			<td>正文</td>
			<td><script charset="utf-8" src="http://127.0.0.1/v5/core/Extend/Org/Editor/Keditor/kindeditor-all-min.js"></script>
            <script charset="utf-8" src="http://127.0.0.1/v5/core/Extend/Org/Editor/Keditor/lang/zh_CN.js"></script>
        <textarea id="hd_content" name="content"></textarea>
    <script>
        var options_content = {
        filterMode : false
                ,id : "editor_id"
        ,width : "100%"
        ,height:"300px"
                ,formatUploadUrl:false
        ,allowFileManager:false
        ,allowImageUpload:true
        ,uploadJson : "http://127.0.0.1/v5/db.php/News&m=keditor_upload&editor_type=2&Image=1&uploadsize=2000000&maximagewidth=false&maximageheight=false&hdsid=chu3h8jlg0h0v5ek5m0nhakg24"//处理上传脚本
        };var hd_content;
        KindEditor.ready(function(K) {
                    hd_content = KindEditor.create("#hd_content",options_content);
        });
        </script>
        </td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<input class="btn btn-primary" type="submit" value="保存"></td>
		</tr>
	</table>
	
	
		
</form>
		
</body>
</html>			