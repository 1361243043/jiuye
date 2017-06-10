<?php
/*
 * 建立班级管理功能模块
 * @data 2015/10/13
 * @author 高龙
 */
	class ClassAction extends Action{
		public function banji(){
			$class=A('Public');
			$data=$class->page('class',3,3);
			$page=$data['page'];
			$shuju=$data['data'];
			$this->assign('data',$shuju);
			$this->assign('page',$page);
			if(session('?name')){
				$this->display();
			}
			else{
				$this->success('请您先登录','__APP__/Index/login');
			}
		}
		public function  duoshan(){
			$class=M('class');
			$banhao=$this->_post('check');
			foreach($banhao as $v){
				$result=$class->where("c_id=$v")->delete();
			}
			if($result){
				$this->success('删除成功','__URL__/banji');
			}
		}
		public function  add(){
			if($this->_post('sub')){
				$class=D('class');
				$class->create();
				$result=$class->add();
				if($result){
					$this->success('添加成功','__URL__/banji');
				}
				else{
					$this->error('添加失败','__URL__/banji');
				}
			}
			else{
				$this->display();
			}
		}
		public function update(){
			if($this->_post('sub')){
				$id=$this->_get('id');
				$class=M('class');
				$class->create();
				$result=$class->where("c_id=$id")->save();
				if($result){
					$this->success('修改成功','__URL__/banji');
				}
				else{
					$this->error('修改失败','__URL__/banji');
				}
			}
			else{
				$id=$this->_get('id');
				$class=D('class');
				$result=$class->where("c_id=$id")->find();
				$this->assign('name',$result);
				$this->display();
			}
		}
	}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">