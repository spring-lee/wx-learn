<?php 
require_once(dirname(dirname(__FILE__)).'/config.php');
/**
* access_token类
*/
class ac_token
{
	/**
	 * 获取access_token
	 * @return array|bool $token|FALSE
	 */
	private static function get_token()
	{
		// 请求获取access_token
		// 初始化curl
		$curl = curl_init();
		// 设置curl选项
		curl_setopt($curl, CURLOPT_URL, 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.APP_ID.'&secret='.APP_SECRET);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
		// 执行curl
		$token = json_decode(curl_exec($curl), TRUE);
		// 关闭curl
		curl_close($curl);

		// 处理返回结果
		if ($token['access_token']) { //正确返回
			//记录获取token时间戳
			$token['timestamp'] = time();
			//将token相关信息存文件
			$token_file = fopen(dirname(dirname(__FILE__)).'/ac_token.txt', 'w');
			fwrite($token_file, json_encode($token));
			fclose($token_file);

			return $token;
		}else{ //异常返回
			error::show_err('获取access_token异常 code:'.$token['errcode'].' message:'.$token['errmsg']);
			return FALSE;
		}
	}

	/**
	 * 读取access_token
	 * @return string|bool $token|false
	 */
	public static function read_token()
	{
		if (file_exists(dirname(dirname(__FILE__)).'/ac_token.txt')) { //存在记录文件
			// 读取文件内容		
			$token_file = fopen(dirname(dirname(__FILE__)).'/ac_token.txt', 'r');
			while (!feof($token_file)) {
				$token .= fgets($token_file);
			}
			fclose($token_file);
			// 处理内容
			$token = json_decode($token);
			$time_end = $token['timestamp'] + $token['expires_in'];
			if ($time_end > time()) { //未过期
				$token = $token['access_token'];
			}else{ //已过期
				// 重新获取access_token
				$token = this::get_token();
				if ($token['access_token']) {
					$token = $token['access_token'];
				}else{
					return FALSE;
				}
			}
		}else{ //不存在记录文件
			// 获取access_token
			$token = this::get_token();
			if ($token['access_token']) {
				$token = $token['access_token'];
			}else{
				return FALSE;
			}	
		}
		return $token;
	}
}