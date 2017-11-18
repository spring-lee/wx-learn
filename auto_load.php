<?php
/**
 * 自动加载定义
 */
function __autoload($class)
{
	$file_name = $class.'.class.php';
	$file_path = dirname(__FILE__).'/class/'.$file_name;

	if (file_exists($file_path)) {
		include_once($file_path);
	}
}