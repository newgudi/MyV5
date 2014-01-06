<?php
if (!defined("HDPHP_PATH"))exit('No direct script access allowed');
//更多配置请查看hdphp/Config/config.php
$config =  array(	
);
return array_merge(include "./config/dbconfig.php",include "./config/config.php",$config);