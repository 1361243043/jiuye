<?php
/*
 * 建立公共功能模块
 * @data 2015/10/21
 * @author 高龙
 */
	//建立本功能模块的控制器
	class PublicAction extends Action{
		
	 /*
		  * 建立验证码的公共方法
		  * @param none
		  * @return none
		  */
		 public function ver(){
		 	import('ORG.Util.Image');
			Image::buildImageVerify();
		 }
		
		/*
		 * 建立session验证的方法
		 * @param none
		 * @return none
		 */
		public function session(){
			$uname=session('uname');
			if($uname){
				return 1;
			}
			else{
				return 0;
			}
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

	    /*
	     * 建立一个用于区分企业和学生的方法
	     * @param none
	     * @return none
	     */
	    public function qs(){
	    	$uname=session('uname');
	    	$name=substr($uname,0,1);
	    	if($name == 'q'){
	    		return 1;
	    	}
	    	else{
	    		return 0;
	    	}
	    }
		    
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
		  * 建立一个用于判断是不是会员的方法
		  * @param none
		  * @return none
		  */
		 public function huiyuan(){
		 	$huiyuan=session('uname');
		 	$member=M('member');
		 	$result=$member->where("m_name='$huiyuan'")->find();
		 	$shifou=$result['m_shifou'];
		 	$timeend=$result['m_timeend'];
		 	$time=date('Y-m-d');
		 	if($time <= $timeend){
		 		$hui['time']=1;
		 	}
		 	if($shifou){
		 		$hui['shifou']=1;
		 	}
		 	return $hui;
		 }
		
	}
?>