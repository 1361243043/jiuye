<?php
/*
 * 建立管理员中心功能模块
 * @data 2015/10/14
 * @author 高龙
 */
	class ManageAction extends Action{
		public function one(){
			$name=session('name');
			$manage=D('manage');
			$result=$manage->where("m_name='$name'")->find();
			R('Public/session');
			$this->assign('data',$result);
			$this->display();
		}
		public function updateone(){
			$id=$this->_get('id');
			$manage=D('manage');
			if($this->_post('sub')){
				$manage->create();
				$result=$manage->where("m_id=$id")->save();
				if($result){
					$this->success('修改成功','__URL__/one');
				}
				else{
					$this->error('修改失败','__URL__/one');
				}
			}
			else{
				$result=$manage->where("m_id=$id")->find();
				$this->assign('data',$result);
				$this->display();
			}
		}
		public function two(){
			R('Public/session');
			$name=session('name');
			$manage=D('manage');
			$result=$manage->where("m_name='$name'")->find();
			if($result['m_jb'] == 1){
				$result=A('Public');
				$data=$result->page('manage',3,3);
				$manage=$data['data'];
				$page=$data['page'];
				$this->assign('data',$manage);
				$this->assign('page',$page);
				$this->display();
			}
			else{
				$this->success('对不起您没有权限','__URL__/one');
			}
		}
		public function add(){
			if($this->_post('sub')){
				$manage=D('Manage');
				if($manage->create()){
					$result=$manage->add();
					if($result){
						$this->success('添加成功','__URL__/two');
					}
					else{
						$this->error('添加失败','__URL__/two');
					}
				}
				else{
					$result=$manage->getError();
					$this->success("$result",'__URL__/two');
				}
			}
			else{
				$this->display();
			}
		}
		public function duoshan(){
			$id=$this->_post('check');
			$manage=D('manage');
			foreach($id as $v){
				$result=$manage->where("m_id=$v")->delete();
			}
			if($result){
				$this->success('删除成功','__URL__/two');
			}
			else{
				$this->error('删除失败','__URL__/two');
			}
		}
	}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">