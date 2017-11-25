<?php 
/**
* 消息类
*/
require_once(dirname(dirname(__FILE__)).'/auto_load.php');

class message
{
	private $xml; //xml数据
	private $type; //消息类型

	public function __construct($xml)
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
				$client = $xml->FromUserName;
				$service = $xml->ToUserName;
				$business = new business($client, $service);
				
				/*按事件类型分发处理*/
				switch ($xml->Event) {
					case 'subscribe': //订阅
						$business->welcome();
						break;
					case 'click': //自定义菜单click
						$key = $xml->EventKey;
						$func_name = 'c_'.$key;

						$business->$func_name();
						break;
				}
				break;
		}
	}
}
