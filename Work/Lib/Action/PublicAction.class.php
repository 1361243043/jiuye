<?php 
/*
 * 建立公共的控制器
 * @data 2015/10/13
 * @author 高龙
 */
	class PublicAction extends Action{
	/*
	 * 建立分页的公共方法
	 * @param string $biao 表名 $xian 显示条数 $pagexian 显示页数
	 * @return 二维数组
	 */
	 public function page($biao,$xian,$pagexian,$where){
    	$b=D($biao);
    	import('ORG.Util.Page');
    	$num=$b->count();
    	$page=new Page($num,$xian);
    	$page->rollPage=$pagexian;
    	$pageshow=$page->show();
    	$data=$b->where($where.'1')->limit($page->firstRow.','.$page->listRows)->select();
    	$fenye['page']=$pageshow;
    	$fenye['data']=$data;
    	return $fenye;
	 }
	 
	 /*
	  * 建立session机制公共方法
	  * @param none
	  * @return none
	  */
	 public function session(){
	 	if(session('?name')){
	 		return 1;
	 	}
	 	else{
	 		return 2;
	 	}
	 }
	/*
	 * 建立连表分页的公共方法
	 * @param string $biao 表名 $xian 显示条数 $pagexian 显示页数
	 * @return 二维数组
	 */
	 public function pages($biao,$xian,$pagexian,$where){
    	$b=D($biao);
    	import('ORG.Util.Page');
    	$num=$b->count();
    	$page=new Page($num,$xian);
    	$page->rollPage=$pagexian;
    	$pageshow=$page->show();
    	$data=$b->relation(true)->where($where.'1')->limit($page->firstRow.','.$page->listRows)->select();
    	$fenye['page']=$pageshow;
    	$fenye['data']=$data;
    	return $fenye;
	 }
	/*
		 * 建立一个用于上传文件的方法
		 *@param none
		 *@return 二维数组
		 */
		public function upload(){
    		import('ORG.Net.UploadFile');
	    	$upload=new UploadFile();
	    	$upload->saveRule = 'time';
	    	$upload->savePath='./Public/Images/';
	    	$upload->thumb=true;
	    	$upload->thumbMaxWidth='200';
	    	$upload->thumbMaxHeight='200';
	    	$upload->thumbPath='./Public/Images/suo/';
	    	if(!$upload->upload()) {// 上传错误提示错误信息
	        	$this->error($upload->getErrorMsg());
	    	}
	    	$ifm=$upload->getUploadFileInfo();
	    	return $ifm;
	    } 
	}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">