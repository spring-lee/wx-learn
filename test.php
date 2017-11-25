<?php 
require_once('auto_load.php');
require_once('config.php');

$data = array(
		'button'=>array(
				array(
					'type'=>'click',
					'name'=>'选择困难',
					'key'=>'choister'
				)
			)
	);
menu::set_menu(json_encode($data, JSON_UNESCAPED_UNICODE));