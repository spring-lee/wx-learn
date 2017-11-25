<?php 
/**
* 业务类
*/
class business
{
	/**
	 * 欢迎语
	 * @param string $client 用户账号
	 * @param string $service 开发者微信号
	 */
	public static function welcome($client, $service)
	{
		$time = time();
		$type = 'text';
		$content = '感谢您的关注\^_^/';

		$send = "<xml> 
        		<ToUserName><![CDATA[{$client}]]></ToUserName> 
        		<FromUserName><![CDATA[{$service}]]></FromUserName> 
        		<CreateTime>{$time}</CreateTime> 
        		<MsgType><![CDATA[{$type}]]></MsgType> 
        		<Content><![CDATA[{$content}]]></Content> 
        		</xml>";
	}
}