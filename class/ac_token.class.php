<?php 
require_once(dirname(dirname(__FILE__)).'/config.php');
/**
* access_token类
*/
class ac_token
{
	
	public static function get_token()
	{
		//初始化curl
		$curl = curl_init();
		//设置curl选项
		curl_setopt($curl, CURLOPT_URL, 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.APP_ID.'&secret='.APP_SECRET);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
		// 获取token
		$token = json_decode(curl_exec($curl), TRUE);
		//关闭curl
		curl_close($curl);
		//记录获取token时间戳
		$token['timestamp'] = time();
		//将token相关信息存文件
		$token_file = fopen(dirname(dirname(__FILE__)).'/ac_token.txt', 'w');
		fwrite($token_file, json_encode($token));
		fclose($token_file);
	}
}