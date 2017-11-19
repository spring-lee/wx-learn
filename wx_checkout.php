<?php
/**
  * 微信入口
  */ 

// TOKEN定义
define('TOKEN', 'spring');

//参数接收
$signature = $_GET['signature'];
$timestamp = $_GET['timestamp'];
$nonce = $_GET['nonce'];
$echostr = $_GET['echostr'];

// 字典排序
$tmpArr = array(TOKEN, $timestamp, $nonce);
sort($tmpArr, SORT_STRING);

//拼接加密
$tmpStr = implode($tmpArr);
$tmpStr = sha1($tmpStr);

//比对确认,成功时返回信息
if ($tmpStr == $signature) {
	echo $echostr;
}