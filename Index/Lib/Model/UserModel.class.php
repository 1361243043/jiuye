<?php
/*
 *建立用户表的自动验证
 *@data 2015/10/24
 *@author 高龙
 */
	class UserModel extends Model{
		protected $_validate=array(
			array('u_name','','账号已存在',0,'unique',3),
			array('pwd','8','请填写8位数的密码',0,'length',3),
			array('u_name',12,'请填写正确长度的字符',0,'length',3),
			array('u_pwd',8,'请填写正确长度的字符',0,'length',3),
			array('u_tel',11,'请填写正确长度的字符',0,'length',3),
		);
	}
?>
<meta http-equiv='content-type' content="text/html; charset=utf-8">