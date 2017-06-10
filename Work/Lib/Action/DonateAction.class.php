<?php
/*
 * 建立捐赠功能模块
 * @data 2015/10/16
 * @author 高龙
 */
	class DonateAction extends Action{
		public function juanzeng(){
			if($this->_post('jiansuo')){
				if($_POST['cname']){
					$name=$this->_post('cname');
					$donate=M('donate');
					$result=$donate->where("d_name like '%$name%'")->select();
					$this->assign('data',$result);
					if(session('?name')){
						$this->display();
					}
					else{
						$this->success('请您先登录','__APP__/Index/login');
					}   
				}
				else{
					$this->success('检索条件不能为空','__URL__/juanzeng');
				}
			}
			else{
				$page=A('Public');
				$result=$page->pages('Donate',3,3);
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
				$donate=M('donate');
				$donate->create();
				$result=$donate->add();
				if($result){
					$this->success('添加成功','__URL__/juanzeng');
				}
				else{
					$this->error('添加失败','__URL__/juanzeng');
				}
			}
			else{
				$type=M('typedonate');
				$result=$type->select();
				$this->assign('type',$result);
				$this->display();
			}
		}
		public function update(){
			$id=$this->_get('id');
			$donate=M('donate');
			if($this->_post('sub')){
				$donate->create();
				$result=$donate->where("d_id=$id")->save();
				if($result){
					$this->success('修改成功','__URL__/juanzeng');
				}
				else{
					$this->error('修改失败','__URL__/juanzeng');
				}
			}
			else{
				$donates=D('Donate');
				$result=$donates->relation(true)->where("d_id=$id")->find();
				$this->assign('donate',$result);
				$typedonate=M('typedonate');
				$type=$typedonate->select();
				$this->assign('type',$type);
				$this->display();
			}
		}
		public function duoshan(){
			$id=$this->_post('check');
			$donate=M('donate');
			foreach($id as $v){
				$result=$donate->where("d_id=$v")->delete();	
			}
			if($result){
				$this->success('删除成功','__URL__/juanzeng');
			}
			else{
				$this->error('删除失败','__URL__/juanzeng');
			}
		}
	}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">