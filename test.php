<?php 
require_once('auto_load.php');
require_once('config.php');

// $data = array(
// 		'button'=>array(
// 				array(
// 					'type'=>'click',
// 					'name'=>'选择困难',
// 					'key'=>'choister'
// 				)
// 			)
// 	);
// menu::set_menu(json_encode($data, JSON_UNESCAPED_UNICODE));

// 读取access_token
		$token = ac_token::read_token();
		if (!$token) {
			exit();
		}

		// 发送查询菜单请求
		// 初始化curl
		$curl = curl_init();
		// 设置curl选项
		curl_setopt($curl, CURLOPT_URL, 'https://api.weixin.qq.com/cgi-bin/get_current_selfmenu_info?access_token='.$token);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
		// 执行curl
		$menu = curl_exec($curl);
		// 关闭curl
		curl_close($curl);

		echo $menu;