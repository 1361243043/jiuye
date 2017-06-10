<?php
/*
 * 建立会员功能模块
 * @data 2015/10/13
 * @author 高龙
 */
	class MemberAction extends Action{
		public function huiyuan(){
			
			
			if($_GET['mname'] != '' && $_GET['mname'] != 'a'){
				$mname=$this->_get('mname');
				$where="m_name like '%$mname%' and ";
			}
			$fenye=A('Public');
			$member=$fenye->pages('Member',3,3,$where);
			$data=$member['data'];
			$page=$member['page'];
			$this->assign('data',$data);
			$this->assign('page',$page);
			if(session('?name')){
				$this->display();
			}
			else{
				$this->success('请您先登录','__APP__/Index/login');
			} 	
		}

		 public function duoshan(){
		 	$id=$this->_post('check');
		 	$member=D('Member');
		 	foreach($id as $v){
		 		$result=$member->where("m_id=$v")->delete();
		 	}
		 	if($result){
		 		$this->success('删除成功','__URL__/huiyuan');
		 	}
		 	else{
		 		$this->error('删除失败','__URL__/huiyuan');
		 	}
		 }
		 public function update(){
		 	$id=$this->_get('id');
		 	if($this->_post('sub')){
		 		$member=M('member');
		 		$member->create();
		 		$result=$member->where("m_id=$id")->save();
		 		if($result){
		 			$this->success('修改成功','__URL__/huiyuan');
		 		}
		 		else{
		 			$this->error('修改失败','__URL__/huiyuan');
		 		}
		 	}
		 	else{
		 		$member=M('member');
		 		$result=$member->where("m_id=$id")->find();
		 		$this->assign('date',$result);
		 		
		 		//实例化会员类型表
		 		$mtype = M('membertype');
		 		
		 		//查询所有的数据
		 		$results = $mtype->select();
		 		
		 		//把数据映射到模板文件中
		 		$this->assign('leixing',$results);
		 		
		 		//包含模板文件
		 		$this->display();
		 	}
		 }
		 
		 /*
		  * 建立一个用于添加的会员的方法
		  * @param none
		  * @return none
		  * 
		  */
		 public function add(){
		 	$member=M('member');
		 	if($_POST['sub']){
		 		
		 	}
		 	else{
		 		$membertype=M('membertype');
		 		$result=$membertype->select();
		 		$this->assign('data',$result);
		 		$this->display();
		 	}
		 }
		 
		 /*
		  * 建立一个查看会员详细信息的方法
		  * @param none
		  * @return none
		  */
		 public function see(){
		 	//接收id号
		 	$id = $this->_get('id');
		 	
		 	//实例化会员表
		 	$member = D('Member');
		 	
		 	//设立数组条件
		 	$map['m_id'] = array('eq',$id);
		 	
		 	//根据条件查询详细数据
		 	$date = $member->relation(true)->where($map)->find();
		 	
		 	//把查询出来的数据映射到模板文件中
		 	$this->assign('date',$date);
		 	
		 	//包含模板文件
		 	$this->display();
		 }
		 
	//此控制器类的结束符！！	
	}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">