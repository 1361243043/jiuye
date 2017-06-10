<?php
/*
 * 建立验证企业注册信息的模型
 * @data 2015/10/25
 * @author 高龙
 */
	class EnterpriseModel extends Model{
		protected $_validate=array(
			array('e_user','','账号已存在',0,'unique',3),
			array('pwd','8','请填写8位数的密码',0,'length',3),
			array('e_user',12,'请填写正确长度的字符',0,'length',3),
			array('e_pwd',8,'请填写正确长度的字符',0,'length',3),
			array('e_tel',11,'请填写正确长度的字符',0,'length',3),
		);
	}
?>