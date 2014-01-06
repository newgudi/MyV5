<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>添加用户</title>
	<link href="http://127.0.0.1/v5/core/Extend/Org/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"><script src="http://127.0.0.1/v5/core/Extend/Org/bootstrap/js/bootstrap.min.js"></script>
  <!--[if lte IE 6]>
  <link rel="stylesheet" type="text/css" href="http://127.0.0.1/v5/core/Extend/Org/bootstrap/ie6/css/bootstrap-ie6.css">
  <![endif]-->
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="http://127.0.0.1/v5/core/Extend/Org/bootstrap/ie6/css/ie.css">
  <![endif]-->
	<style type="text/css" media="screen">
		.form-horizontal{border-right:1px dashed #ccc;}
		.addtitle{background:#2A85A0;padding-left:15px;margin-bottom:20px;}
	</style>	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span8">
				<h3 class="addtitle">添加用户</h3>
				<form action="http://127.0.0.1/v5/User/adduser" method="post" class="form-horizontal">
				  	<div class="control-group">
				  		<label for="username" class="control-label">用户名：</label>
				  		<div class="controls">							 
							 <input type="text" name="username" value="" id="username"/>
						 </div>
				  	</div>
				  	<div class="control-group">
				  		<label for="password" class="control-label">密码：</label>
				  		<div class="controls">
				  			<input type="password" name="password" id="password" />
				  		</div>
				  	</div>
				  	<div class="control-group">
						<div class="controls">
						  		<input type="submit" class="btn" value="提交"/>
						</div>
					  </div>				
				</form>
			</div>
			<div class="span4 pull-right">
				<h3>说明</h3>
				<p>请填写用户和密码提交，即可创建一个用户</p>
			</div>
		</div>		
	</div>
</body>
</html>