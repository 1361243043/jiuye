<?php
/*
 * 建立关联模型
 * @data 2015/10/14
 * @author 高龙
 */
	class StudentModel extends RelationModel{
		protected $_link=array(
 		'class'=>array(
 			'mapping_type'=>BELONGS_TO,
			'class_name'=>'class',
			'foreign_key'=>'c_id',
			'as_fields'=>'c_name,g_name',
 		),
	); 	
	}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">