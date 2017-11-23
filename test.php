<?php 
require_once('auto_load.php');

$data = array(
		'button'=>array(
				array(
					'type'=>'view',
					'name'=>'testLink1',
					'url'=>'http://www.qq.com/'
				)
			)
	);
menu::set_menu(json_encode($data));