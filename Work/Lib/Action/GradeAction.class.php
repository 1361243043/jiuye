<?php
/*
 * 建立年级功能模块
 * @data 2015/10/15
 * @author 高龙
 */
	class GradeAction extends Action{
		public function nianji(){
			$class=A('Public');
			$data=$class->page('grade',3,3);
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
		public function add(){
		if($this->_post('sub')){
				$class=D('grade');
				$class->create();
				$result=$class->add();
				if($result){
					$this->success('添加成功','__URL__/nianji');
				}
				else{
					$this->error('添加失败','__URL__/nianji');
				}
			}
			else{
				$this->display();
			}
		}
			public function update(){
			if($this->_post('sub')){
				$id=$this->_get('id');
				$class=M('grade');
				$class->create();
				$result=$class->where("g_id=$id")->save();
				if($result){
					$this->success('修改成功','__URL__/nianji');
				}
				else{
					$this->error('修改失败','__URL__/nianji');
				}
			}
			else{
				$id=$this->_get('id');
				$class=D('grade');
				$result=$class->where("g_id=$id")->find();
				$this->assign('name',$result);
				$this->display();
			}
		}
		public function  duoshan(){
			$class=M('grade');
			$banhao=$this->_post('check');
			foreach($banhao as $v){
				$result=$class->where("g_id=$v")->delete();
			}
			if($result){
				$this->success('删除成功','__URL__/nianji');
			}
		}
	}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">