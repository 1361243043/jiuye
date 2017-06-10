<?php
/*
 * 建立用户中心功能模块
 * @data 2015/10/21
 * @author 高龙
 * 
 */
	//建立本功能模块的控制器
	class UserAction extends Action{
		public function user(){
			$uname=session('uname');
			$name=substr($uname,0,1);
			$result=R('Public/session');
			if($result){
				if($name == 'q'){
					$welcome='欢迎您'.$uname.'进入个人中心';
					$this->success($welcome,'__APP__/Enterprise/qiye');
				}
				if($name == 's'){
					$welcome='欢迎您'.$uname.'进入个人中心';
					$this->success($welcome,'__APP__/Oneman/geren');
				}
			}
			else{
				$this->success('请先登陆 再进入','__APP__/Index/index');
			}
			
		}
	}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">