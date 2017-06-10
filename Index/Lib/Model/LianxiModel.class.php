<?php
class LianxiModel extends Model{
	protected $_validate=array(
		array('','','不能重复',0,'unique',3),
	);
}
?>