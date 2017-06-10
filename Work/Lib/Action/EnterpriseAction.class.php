<?php
/*
 * 建立企业信息功能模块
 * @data 2015/10/15
 * @author 高龙
 */
	class EnterpriseAction extends Action{
		public function qiye(){
			if($this->_post('jiansuo')){
				$qiye=$this->_post('qiye');
				$enterprise=D('enterprise');
				$result=$enterprise->where("e_name like '%$qiye%'")->select();
				$this->assign('data',$result);
				if(session('?name')){
						$this->display();
					}
					else{
						$this->success('请您先登录','__APP__/Index/login');
					} 
			}
			else{
				$fenye=A('Public');
				$result=$fenye->page('enterprise',3,3);
				$data=$result['data'];
				$page=$result['page'];
				$this->assign('data',$data);
				$this->assign('page',$page);
				if(session('?name')){
						$this->display();
					}
					else{
						$this->success('请您先登录','__APP__/Index/login');
					} 
			}
		}
		public function add(){
			if($this->_post('sub')){
				$upload=R('Public/upload');
				$enterprise=D('enterprise');
				$enterprise->create();
				$enterprise->e_img=$upload[0]['savename'];
				$result=$enterprise->add();
				if($result){
					$this->success('添加成功','__URL__/qiye');
				}
				else{
					$this->error('添加失败','__URL__/qiye');
				}
			}
			else{
				$this->display();
			}
		}
		public function update(){
			$id=$this->_get('id');
			$enterprise=D('enterprise');
			if($this->_post('sub')){
				if($_FILES['files']['name']){
					$result=$enterprise->where("e_id=$id")->find();
					$name=$result['e_img'];
					@unlink("./Public/Images/$name");
					@unlink("./Public/Images/suo/thumb_$name");
					$upload=R('Public/upload');
					$enterprise->create();
					$enterprise->e_img=$upload[0]['savename'];
					$result=$enterprise->where("e_id=$id")->save();
					if($result){
						$this->success('修改成功','__URL__/qiye');
					}
					else{
						$this->error('修改失败','__URL__/qiye');
					}
				}
				else{
					$enterprise->create();
					$result=$enterprise->where("e_id=$id")->save();
					if($result){
						$this->success('修改成功','__URL__/qiye');
					}
					else{
						$this->error('修改失败','__URL__/qiye');
					}
				}
			}
			else{
				$result=$enterprise->where("e_id=$id")->find();
				$this->assign('data',$result);
				$this->display();
			}
		}
		public function duoshan(){
			$id=$this->_post('check');
			$enterprise=D('enterprise');
			foreach($id as $v){
				$result=$enterprise->where("e_id=$v")->find();
				$name=$result['e_img'];
				@unlink("./Public/Images/$name");
				@unlink("./Public/Images/suo/thumb_$name");
				$result=$enterprise->where("e_id=$v")->delete();
			}
			if($result){
				$this->success('删除成功','__URL__/qiye');
			}
			else{
				$this->error('删除失败','__URL__/qiye');
			}
		}
	}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">