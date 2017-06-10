<?php
/*
 * 建立捐赠显示的功能模块
 * @data 2015/10/25
 * @author 高龙
 */
	//建立本功能模块的控制器
	class DonateAction extends Action{
		/*
		 * 建立显示捐赠信息的方法
		 * @param none
		 * @return none
		 */
		public function juanzeng(){
			
				if($_GET['name']){
					$this->id();
					$name=$this->_get('name');
					$where="d_name like '%$name%' and ";
				}
				
				if($_GET['money']){
					$this->id();
					$money=$this->_get('money');
					$where=$where."d_money=$money and ";
				}
				
				$donate=M('donate');
				$page=A('Public');
				$result=$page->page('donate',6,3,$where);
				$data=$result['data'];
				$page=$result['page'];
				$this->assign('data',$data);
				$this->assign('page',$page);
				$result=$donate->group('d_money')->order('d_money desc')->select();
				$this->assign('money',$result);
				$this->display();
			
			
		}
		
		/*
		 * 建立显示查看更多信息的方法
		 * @param none
		 * @return none 
		 */
		public function see(){
			$result=R('Public/session');
			if($result){
				$id=$this->_get('id');
				$donate=D('Donate');
				$result=$donate->relation(true)->where("d_id=$id")->find();
				$this->assign('data',$result);
				$this->display();
			}
			else{
				$this->error('请您先登录','__APP__/Index/index');
			}
		}
		
		/*
		 * 建立一个用于往模板映射id号的方法(此id号是用来判断是否检索的)
		 * @param none
		 * @return none
		 */
		public function id(){
			$id=1;
			$this->assign('id',$id);
		}
	}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">