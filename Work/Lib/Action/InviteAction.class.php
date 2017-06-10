<?php
/*
 * 建立捐赠功能模块
 * @data 2015/10/17
 * @author 高龙
 */
	class InviteAction extends Action{
		public function zhaopin(){
			R('Public/session');
			$invite=M('invite');
			if($_GET['iname'] != '' && $_GET['iname'] != 'a'){
				$iname=$this->_get('iname');
				$where="i_name='$iname' and ";
			}
			if($_GET['rname'] != '' && $_GET['rname'] != 'a'){
				$rname=$this->_get('rname');
				$where=$where."i_reward='$rname' and ";
			}
			if($_GET['num'] != '' && $_GET['num'] != 'a'){
				$num=$this->_get('num');
				$where=$where."i_num='$num' and ";
			}
			

			$page=A('Public');
			$result=$page->page('invite',3,3,$where);
			$data=$result['data'];
			$page=$result['page'];
			$this->assign('data',$data);
			$this->assign('page',$page);	
			$result=$invite->order('i_name desc')->select();
			$this->assign('gongsi',$result);
			$results=$invite->group("i_reward")->select();
			$this->assign('shifou',$results);
			$resultss=$invite->group("i_num")->select();
			$this->assign('reshu',$resultss);
			if(session('?name')){
				$this->display();
			}
			else{
				$this->success('请您先登录','__APP__/Index/login');
			} 
		}
		public function see(){
			if($_POST['sub']){
				$this->success('正在返回','__URL__/zhaopin');
			}
			else{
				$id=$this->_get('id');
				$invite=M('invite');
				$result=$invite->where("i_id=$id")->find();
				$this->assign('data',$result);
				$this->display();
			}
		}
		public function duoshan(){
			$id=$this->_post('check');
			$invite=M('invite');
			foreach($id as $v){
				$result=$invite->where("i_id=$v")->delete();
			}
			if($result){
				$this->success('删除成功','__URL__/zhaopin');
			}
			else{
				$this->error('删除失败','__URL__/zhaopin');
			}
		}
		public function lianxi(){
			$a=M('invite');
			$b=$a->
			print_r($b);
		}
	}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">