<?php if(!defined("HDPHP_PATH"))exit;C("DEBUG_SHOW",false);?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>显示文章列表</title>
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
	<table class="table table-hover table-bordered" style="width:1000px;">
		<tr>
			<td>测试文章列表</td>
			<td><a href="http://127.0.0.1/v5/db.php/News/add" class="btn btn-success"><i class="icon-plus-sign icon-white">&nbsp;&nbsp;</i>发表文章</a></td>

		</tr>
		<?php if(is_array($data)):?><?php  foreach($data as $k=>$v){ ?>	
		<tr>
			<td><a href=""><?php echo $v['title'];?></a></td>
			<td><a href="" class="btn btn-primary">查看详情</a></td>
		</tr> 

	<?php }?><?php endif;?>
	<tr>
		<td colspan="2"><?php echo $page;?></td>
	</tr>
   	</table>
</body>
</html>