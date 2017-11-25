<?php 
/**
 * 入口文件
 */
require_once('config.php');
// var_dump(!empty($_GET));

$_SESSION['user_name'] = 'spring';//测试用，测试完成删除
/*登陆状态判断*/
if (isset($_SESSION['user_name'])) { //已登录
	if (empty($_GET)) { //首页
		;
	}else{ //功能页
		header('Location: http://'.DOMAIN_NAME.ROOT_PATH.$_GET['p'].'.php');		
	}
}else{ //未登录
	;
}