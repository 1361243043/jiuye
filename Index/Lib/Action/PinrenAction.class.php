<?php
/*
 * 建立招聘人才的功能模块
 * @data 2015/10/23
 * @author 高龙
 */
	//建立本功能模块的控制器
	class PinrenAction extends Action{
		/*
		 * 建立显示求职信息的方法
		 * @param none
		 * @return none
		 */
		public function pin(){
			
				if($_GET['post']){
					$id=1;
					$this->assign('id',$id);
					$post=$this->_get('post');
					$where="aj_post='$post' and ";
				}
				if($_GET['money']){
					$id=1;
					$this->assign('id',$id);
					$money=$this->_get('money');
					$where=$where."aj_money='$money' and ";
				}
				
				$page=A('Public');
				$result=$page->page('applyjob',6,3,$where);
				$data=$result['data'];
				$page=$result['page'];
				$this->assign('data',$data);
				$this->assign('page',$page);
				$applyjob=M('applyjob');
				$result=$applyjob->group('aj_post')->order('aj_post desc')->select();
				$this->assign('post',$result);
				$money=$applyjob->group('aj_money')->order('aj_money desc')->select();
				$this->assign('money',$money);
				$this->display();
			
		}
		
		/*
		 * 建立显示具体信息的方法
		 * @param none
		 * @return none
		 * 
		 */
		public function see(){
			$result=R('Public/session');
			if($result){
				$id=$this->_get('id');
				$applyjob=M('applyjob');
				$result=$applyjob->where("aj_id=$id")->find();
				$this->assign('data',$result);
				$this->display();
			}
			else{
				$this->success('请先登陆','__APP__/Index/index');
			}
		}
	}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">