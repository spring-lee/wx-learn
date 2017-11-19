<?php 
/**
* 错误类
*/
class error
{
	/**
	 * 显示错误
	 * @param string $msg 提示信息
	 */
	public static function show_err($msg)
	{
		echo "<script>alert('".$msg."');</script>";
	}
}