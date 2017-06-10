<?php
/*
 *建立个人建议功能模块
 *@data 2015/10/16
 *@author 高龙 
 */
	class AdviseAction extends Action{
		public function jianyi(){
			$session=A('Public');
			$result=$session->session();
			if($result == 1){
				$fenye=A('Public');
				$result=$fenye->page('advise',3,3);
				$data=$result['data'];
				$page=$result['page'];
				$this->assign('data',$data);
				$this->assign('page',$page);
				$this->display();
			}
			else{
				$this->success('请您先登录再查看','__APP__/Index/login');
			}
		}
		public function duoshan(){
			$id=$this->_post('check');
			$advise=D('advise');
			foreach($id as $v){
				$result=$advise->where("a_id=$v")->delete();
			}
			if($result){
				$this->success('删除成功','__URL__/jianyi');
			}
			else{
				$this->success('删除失败','__URL__/jianyi');
			}		
		}
	}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">