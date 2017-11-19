<?php 
require_once(dirname(dirname(__FILE__)).'/auto_load.php');
/**
* 菜单类
*/
class menu
{
	/**
	 * 设置菜单
	 */
	public static function set_menu($data)
	{
		// 读取access_token
		$token = ac_token::read_token();
		if (!$token) {
			exit();
		}

		// 发送设置菜单请求
		// 初始化curl
		$curl = curl_init();
		// 设置curl选项
		curl_setopt($curl, CURLOPT_URL, 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token='.$token);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		// 执行curl
		$rst = json_decode(curl_exec($curl), TRUE);
		// 关闭curl
		curl_close($curl);

		// 处理返回结果
		if ($rst['errcode']==0) {
			return TRUE;
		}else{
			$msg = '设置菜单错误 code:'.$rst['errcode'].' message:'.$rst['errmsg'];
			error::show_err($msg);
			return FALSE;
		}
	}
}