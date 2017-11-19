<?php 
require_once('auto_load.php');

$data = array(
		'button'=>array(
				array(
					'type'=>'view',
					'name'=>'testLink1',
					'url'=>'http://www.baidu.com/'
				),
				array(
					'type'=>'view',
					'name'=>'testLink2',
					'url'=>'http://www.baidu.com/'
				),
				array(
					'type'=>'view',
					'name'=>'testLink3',
					'url'=>'http://www.baidu.com/'
				)
			)
	);
menu::set_menu(json_encode($data));