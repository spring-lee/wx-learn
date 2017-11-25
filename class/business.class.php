<?php 
/**
* 业务类
*/
class business
{
	private $client; //用户账号
	private $service; //开发者账号

	/**
	 * 初始化属性
	 * @param $string $client 用户账号
	 * @param $string $service 开发者账号
	 */
	public function __construct($client, $service)
	{
		$this->client = $client;
		$this->service = $service;
	}


	/**
	 * 欢迎语
	 */
	public function welcome()
	{
		$client = $this->client;
		$service = $this->service;
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
        echo $send;
	}

	/**
	 * 选择困难-点击
	 */
	public function c_choister()
	{
		$client = $this->client;
		$service = $this->service;
		$time = time();
		$type = 'text';
		$content = "被选择困难症困扰的你,就由我来解救!\n像这样告诉我选择池,我就把答案捞给你哟~\nxzkn+选项1:倍率/选项2:倍率#选择个数\n不告诉我倍率时我默认为1哦";

		$send = "<xml> 
        		<ToUserName><![CDATA[{$client}]]></ToUserName> 
        		<FromUserName><![CDATA[{$service}]]></FromUserName> 
        		<CreateTime>{$time}</CreateTime> 
        		<MsgType><![CDATA[{$type}]]></MsgType> 
        		<Content><![CDATA[{$content}]]></Content> 
        		</xml>";
        echo $send;
	}
}
