<?php
/*
 * 建立捐赠表的关联模型
 * @data 2015/10/25
 * @author 高龙
 */
	class DonateModel extends RelationModel{
		protected $_link=array(
			'typedonate'=>array(
				'mapping_type'=>BELONGS_TO,
				'class_name'=>'typedonate',
				'foreign_key'=>'t_id',
				'as_fields'=>'t_type',
			),
		);
	}
?>
