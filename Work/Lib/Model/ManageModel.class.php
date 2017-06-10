<?php
/*
 * 建立管理员表的自动完成和自动验证模型
 * @data 2015/10/15
 * @author 高龙
 */
	class ManageModel extends Model{
		protected $_validate=array(
			array('m_name','','该账号已存在!',0,'unique',3),
			array('m_name','12','请输入正确的长度值!',0,'length',3),
			array('m_pwd','8','请输入正确的长度值!',0,'length',3),
			array('m_sex','1','请输入正确的长度值!',0,'length',3),
			array('m_age','2','请输入正确的长度值!',0,'length',3),
			array('m_tel','11','请输入正确的长度值!',0,'length',3),
		);
		protected $_auto=array(
			array('m_jb',0),
		);
	}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">