<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>显示用户详情</title>
	<script type='text/javascript' src='http://127.0.0.1/v5/core/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
	<link href="http://127.0.0.1/v5/core/Extend/Org/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"><script src="http://127.0.0.1/v5/core/Extend/Org/bootstrap/js/bootstrap.min.js"></script>
  <!--[if lte IE 6]>
  <link rel="stylesheet" type="text/css" href="http://127.0.0.1/v5/core/Extend/Org/bootstrap/ie6/css/bootstrap-ie6.css">
  <![endif]-->
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="http://127.0.0.1/v5/core/Extend/Org/bootstrap/ie6/css/ie.css">
  <![endif]-->
	<style type="text/css" media="screen">
		.detail{width:400px;margin-top:100px;border:1px solid #ccc;
		height:auto;overflow:hidden;border-top:2px solid #03A0FA;
		}
		.detitle{background:#E8E8E8;height:40px;line-height:40px;padding-left:25px;
		
		}
		.detail ul{list-style:none;}
		.detail ul li{clear:both;height:40px;line-height:40px;} 
		.detail ul li span{float:left;display:block;width:100px;padding-right: 30px;
		font-size:14px;color:#056212;font-weight:bold;}
		.detail ul li div{float:left;}
		.goback{margin-top:7px;margin-right:10px;}		
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="detail">	
					<div class="detitle">
						<span class="pull-right goback"><a href="http://127.0.0.1/v5/User/userlist" class="btn btn-small">
							<i class="icon icon-repeat"></i>返回</a></span>
						用户详情</div>
				     <ul>
				     	<li><span>用户ID</span><div><?php echo $data['uid'];?></div></li>
				     	<li><span>用户名</span><div><?php echo $data['username'];?></div></li>
				     	<li><span>注册时间</span><div><?php echo date('Y-d-m',$data['reg_time']);?></div></li>
				     </ul>
				 </div>	
			</div>
		</div>
	</div>
</body>
</html>