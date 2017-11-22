<?php 
require_once(dirname(dirname(__FILE__)).'/auto_load.php');
/**
* 菜单类
*/
class menu
{
	/**
	 * 设置菜单
	 * @param string $data 菜单数据
	 * @return bool TRUE|FALSE
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

		// 处理并返回结果
		if ($rst['errcode']==0) {
			return TRUE;
		}else{
			$msg = '设置菜单错误 code:'.$rst['errcode'].' message:'.$rst['errmsg'];
			error::show_err($msg);
			return FALSE;
		}
	}

	/**
	 * 查询菜单
	 * @return string|bool $menu|FALSE
	 */
	public static function read_menu()
	{
		// 读取access_token
		$token = ac_token::read_token();
		if (!$token) {
			exit();
		}

		// 发送查询菜单请求
		// 初始化curl
		$curl = curl_init();
		// 设置curl选项
		curl_setopt($curl, CURLOPT_URL, 'https://api.weixin.qq.com/cgi-bin/menu/get?access_token='.$token);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
		// 执行curl
		$menu = curl_exec($curl);
		// 关闭curl
		curl_close($curl);

		// 处理并返回结果
		if ($menu) {
			return $menu;
		}else{
			$msg = '查询菜单失败！';
			error::show_err($msg);
			return FALSE;
		}
	}

	/**
	 * 删除菜单
	 * @return bool TRUE|FALSE
	 */
	public static function dlt_menu()
	{
		// 读取access_token
		$token = ac_token::read_token();
		if (!$token) {
			exit();
		}

		// 初始化curl
		$curl = curl_init();
		// 设置curl选项
		curl_setopt($curl, CURLOPT_URL, 'https://api.weixin.qq.com/cgi-bin/menu/delete?access_token='.$token);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
		// 发送删除菜单请求
		$rst = json_decode(curl_exec($curl), TRUE);
		// 关闭curl
		curl_close($curl);

		// 处理并返回结果
		if ($rst['errcode']==0) {
			return TRUE;
		}else{
			$msg = '删除菜单错误 code:'.$rst['errcode'].' message:'.$rst['errmsg'];
			error::show_err($msg);
			return FALSE;
		}
	}
}