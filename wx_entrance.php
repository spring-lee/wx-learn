<?php 
/**
 * 微信入口
 */
require_once('auto_load.php');

/*首次介入验证*/
// require_once('config.php');
// //验证参数接收
// $signature = $_GET['signature'];
// $timestamp = $_GET['timestamp'];
// $nonce = $_GET['nonce'];
// $echostr = $_GET['echostr'];
// // 字典排序
// $tmpArr = array(TOKEN, $timestamp, $nonce);
// sort($tmpArr, SORT_STRING);
// //拼接加密
// $tmpStr = implode($tmpArr);
// $tmpStr = sha1($tmpStr);
// //比对确认,成功时返回信息
// if ($tmpStr == $signature) {
// 	echo $echostr;
// }

/*接收数据*/
$xml_str = file_get_contents('php://input');
$xml = simplexml_load_string($xml_str);

/*业务分流处理*/
$new_msg = new message($xml);
$new_msg->feedback();