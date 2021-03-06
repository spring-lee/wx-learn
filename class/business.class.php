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
		$content = "像这样告诉我备选项,我可以帮你选择哟~

xzkn+选项1:倍率/选项2:倍率#选择个数
例如：xzkn+苹果:2/橘子/香蕉:3#1

不告诉我倍率时默认为1哦";

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
	 * 选择困难-业务处理
	 * @param string $data 业务数据
	 */
	public function choister($data)
	{
		/*业务数据状态*/
		if ($data) { //有
			$exp = explode('#', $data);
			$need_num = isset($exp[1])?$exp[1]:false;
			if (is_numeric($need_num)) {
				if (strpos($need_num, '.')!==false||$need_num==0) {
					$this->error('选'.$need_num.'个,这。。。就触及到我的知识盲区了吖@_@!');
				}
				$exp = explode('/', $exp[0]);
				$option_num = sizeof($exp);
				if ($option_num==1) {
					$this->error('那就是没得选咯o_O');
					exit();
				}
				if ($need_num>=$option_num) {
					$this->error('那就是全都选咯o_O');
				}else{
					foreach ($exp as $key=>$option) {
						$exp_o = explode(':', $option, 2);
						$rate = isset($exp_o[1])?$exp_o[1]:1;
						if (is_numeric($rate)) {
							$exp[$key] = array('name'=>$exp_o[0], 'rate'=>$rate);
						}else{
							$this->error('格式不对哦@_@');
							exit();
						}
					}

					$rst = array();
					while ($need_num>0) {
						$rate_count = 0;
						foreach ($exp as $key => $option) {
							$rate_count += $option['rate'];
						}
						$rand = rand(1, 100);
						$dobber = 0;
						foreach ($exp as $key => $option) {
							$dobber += round(100/$rate_count*$option['rate']);
							if ($rand<=$dobber) {
								$rst[] = $option['name'];
								unset($exp[$key]);
								break;
							}
						}
						$need_num --;
					}
					/*发送结果*/
					$client = $this->client;
					$service = $this->service;
					$time = time();
					$type = 'text';
					$content = '那就选 ';
					foreach ($rst as $v) {
						$content .= $v.' ';
					}
					$content .= '吧~';

					$send = "<xml> 
			        		<ToUserName><![CDATA[{$client}]]></ToUserName> 
			        		<FromUserName><![CDATA[{$service}]]></FromUserName> 
			        		<CreateTime>{$time}</CreateTime> 
			        		<MsgType><![CDATA[{$type}]]></MsgType> 
			        		<Content><![CDATA[{$content}]]></Content> 
			        		</xml>";
			        echo $send;
				}
			}else{
				$this->error('格式不对哦@_@');
			}
		}else{ //无
			$this->error('格式不对哦@_@');
		}
	}

	/**
	 * 错误处理
	 * @param string $msg 错误信息
	 */
	private function error($msg)
	{
		$client = $this->client;
		$service = $this->service;
		$time = time();
		$type = 'text';
		$content = $msg;

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
