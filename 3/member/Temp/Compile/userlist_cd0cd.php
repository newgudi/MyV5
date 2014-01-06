<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>用户列表</title>
	<script type='text/javascript' src='http://127.0.0.1/v5/core/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
	<link href="http://127.0.0.1/v5/core/Extend/Org/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"><script src="http://127.0.0.1/v5/core/Extend/Org/bootstrap/js/bootstrap.min.js"></script>
  <!--[if lte IE 6]>
  <link rel="stylesheet" type="text/css" href="http://127.0.0.1/v5/core/Extend/Org/bootstrap/ie6/css/bootstrap-ie6.css">
  <![endif]-->
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="http://127.0.0.1/v5/core/Extend/Org/bootstrap/ie6/css/ie.css">
  <![endif]-->
	<style type="text/css" media="screen">
		
	    .ulist{width:500px;margin-top:50px;padding-top:20px;
		background:;}
		.readmore{margin-left:20px;}
		.table{margin-top:20px;}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span12">				
				<div class="ulist">
					  用户列表		<a href="http://127.0.0.1/v5/User/adduser" class="btn btn-small btn-success pull-right">
					  	<i class="icon icon-plus-sign icon-white"></i>添加用户</a>				  
					  <table class="table table-striped">
					  	<tr>
					  		<th>用户名</th>
					  		<th>注册时间</th>
					  		<th>操作</th>
					  	</tr>
					  	<?php if(is_array($data)):?><?php  foreach($data as $k=>$v){ ?>
					  		<tr>
					  			<td><i class="icon icon-user"></i><a href=""><?php echo $v['username'];?></a></td>
					  			<td><?php echo date('Y-m-d',$v['reg_time']);?></td>
					  			<td>
					  				<a href="http://127.0.0.1/v5/User/show/username/<?php echo $v['username'];?>" class="btn btn-small">修改</a>					  			
					  				<a href="http://127.0.0.1/v5/User/show/username/<?php echo $v['username'];?>" class="btn btn-small">查看</a>
					  			</td>					  			
					  		</tr>
					  	<?php }?><?php endif;?>
					  </table>
				
				</div>
			</div>
		</div>
	</div>
</body>
</html>