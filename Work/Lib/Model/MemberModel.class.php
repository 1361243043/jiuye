<?php
/*
 * 建立会员表与会员表的链接
 * @data 2015/10/13
 * @author 高龙
 */
 class MemberModel extends RelationModel{
 	protected $_link=array(
 		'membertype'=>array(
 			'mapping_type'=>BELONGS_TO,
			'class_name'=>'membertype',
			'foreign_key'=>'mt_id',
			'as_fields'=>'mt_name,mt_money,mt_fun'
 		),
 	);
 }
?>
<meta http-equiv="content-type" conten="text/html; charset=utf-8">