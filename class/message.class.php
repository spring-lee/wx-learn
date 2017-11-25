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
				/*初始化业务*/
				$client = $xml->FromUserName;
				$service = $xml->ToUserName;
				$business = new business($client, $service);

				/*按事件类型分发业务*/
				switch ($xml->Event) {
					case 'subscribe': //订阅
						$business->welcome();
						break;
					case 'CLICK': //自定义菜单click
						$key = $xml->EventKey;
						$func_name = 'c_'.$key;
						$business->$func_name();
						break;
				}
				break;
			case 'text': //文本
				/*初始化业务*/
				$client = $xml->FromUserName;
				$service = $xml->ToUserName;
				$business = new business($client, $service);

				/*文本分析分发业务*/
				$content = trim($xml->Content);
				$exp = explode('+', $content ,2);
				$data = isset($exp[1])?$exp[1]:false;
				switch ($exp[0]) {
					case 'xzkn': //选择困难
						$business->choister($data);
						break;
					default: //其他
						echo "success";
						break;
				}
				$client = $xml->FromUserName;
				$service = $xml->ToUserName;
				$business = new business($client, $service);
				break;
		}
	}
}
