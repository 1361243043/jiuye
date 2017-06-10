<?php
/*
 * 建立求职信息模块
 * @data 2015/10/18
 * @author 高龙
 */
	//建立求职信息功能模块控制器
	class ApplyjobAction extends Action{
		/*
		 * 建立显示求职的方法
		 * @param none
		 * @return none
		 */
		public function qiuzhi(){
			$session=A('Public');
			$result=$session->session();
			if($result == 1){
				$watch=M('applyjob');
				if($_GET['name'] != '' && $_GET['name'] != 'a'){
					$name=$this->_get('name');
					$where="aj_name like '%$name%' and ";
				}
				if($_GET['work'] != '' && $_GET['work'] != 'a'){
					$work=$this->_get('work');
					$where=$where."aj_post='$work' and ";
				}
				

				$page=A('Public');
				$result=$page->page('applyjob',3,3,$where);
				$data=$result['data'];
				$page=$result['page'];
				$this->assign('data',$data);
				$this->assign('page',$page);
				$result=$watch->group('aj_post')->select();
				$this->assign('post',$result);	
				$this->display();
			}
			else{
				$this->success('请您先登录再查看','__APP__/Index/login');
			}
			
		}
		
		/*
		 * 建立多删的方法
		 * @param none
		 * @return none
		 */
		public function duoshan(){
			$id=$this->_post('check');
			$watch=M('applyjob');
			foreach($id as $v){
				$result=$watch->where("aj_id=$v")->delete();
			}
			if($result){
				$this->success('删除成功','__URL__/qiuzhi');
			}
			else{
				$this->_error('删除失败','__URL__/qiuzhi');
			}
		}
		
		/*
		 * 建立查看更多的方法
		 * @param none
		 * @return none
		 */
		public function see(){
			$id=$this->_get('id');
			$wacht=M('applyjob');
			$result=$wacht->where("aj_id=$id")->find();
			$this->assign('data',$result);
			$this->display();
		}
	}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">