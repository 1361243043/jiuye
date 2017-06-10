<?php
/*
 *建立一个用于验证密保问题的模型
 *@data 2015/11/13
 *@author 高龙
 */
	class MibaoModel extends Model{
		protected $_validate=array(
			array('pwd','8','请填写8位数的密码',0,'length',3),
			array('m_user','','您已填写密保不能再次填写',0,'unique',3),
			array('m_cname','2,5','请填写正确长度的字符',0,'length',3),
			array('m_fname','2,5','请填写正确长度的字符',0,'length',3),
		);
	}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">