<?php 
/**
* 消息类
*/
class message
{
	private $xml; //xml数据
	private $type; //消息类型

	public function __construct($xml);
	{
		$this->xml = $xml;
		$this->type = $xml->MsgType;
	}

	/**
	 * 消息反馈
	 */
	public function feedback()
	{
		$xml = $this->xml;
		$msg_type = $this->type;

		/*按消息类型分发处理*/
		switch ($msg_type) {
			case 'event': //事件
				/*按事件类型分发处理*/
				switch ($xml->Event) {
					case 'subscribe': //订阅
						$this->subscribe();
						break;
				}
				break;
		}
	}

	/**
	 * 订阅回复欢迎语
	 */
	private function subscribe()
	{
		$xml = $this->xml;
		$to_user_name = $xml->ToUserName;
		$from_user_name = $xml->FromUserName;
		$create_time = time();
		$msg_type = 'text';
		$content = '感谢您的关注\^_^/';

		$send = <<<EOT
		<xml>
		<ToUserName><![CDATA[{$to_user_name}]]></ToUserName>
		<FromUserName><![CDATA[{$from_user_name}]]></FromUserName>
		<CreateTime>{$create_time}</CreateTime>
		<MsgType>{$msg_type}</MsgType>
		<Content>{$content}</Content>
		</xml>
EOT;
		echo $send;
	}
}