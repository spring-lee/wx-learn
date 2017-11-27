<?php 
require_once('auto_load.php');
require_once('config.php');

$data = array(
		'button'=>array(
				array(
					'type'=>'click',
					'name'=>'选择困难',
					'key'=>'choister'
				),
				array(
					'name'=>'关于我',
					'sub_button'=>array(
						array(
							'type'=>'view',
							'name'=>'我的简历',
							'url'=>'http://'.DOMAIN_NAME.ROOT_PATH.'/my_resume.php'
						)
					)
				)
			)
	);
menu::set_menu(json_encode($data, JSON_UNESCAPED_UNICODE));