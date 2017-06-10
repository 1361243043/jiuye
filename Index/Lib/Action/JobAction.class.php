<?php
/*
 * 建立找工作功能模块
 * @data 2015/10/23
 * @author 高龙
 */
	//建立本功能模块的控制器
	class JobAction extends Action{
		/*
		 * 建立显示招聘信息的方法
		 * @param none
		 * @return none
		 */
		public function job(){
			
				if($_GET['name']){
					$id=1;
					$this->assign('id',$id);
					$name=$this->_get('name');
					$where="i_name like '%$name%' and ";
				}
				
				$page=A('Public');
				$invite=$page->page('invite',6,3,$where);
				$data=$invite['data'];
				$page=$invite['page'];
				$this->assign('data',$data);
				$this->assign('page',$page);
				$this->display();
		}
		
		/*
		 * 建立一个能查看具体信息的方法
		 * @param none
		 * @return none
		 */
		public function see(){
			$result=R('Public/session');
			if($result){
				$id=$this->_get('id');
				$invite=M('invite');
				$result=$invite->where("i_id=$id")->find();
				$this->assign('data',$result);
				$this->display();
			}
			else{
				$this->success('请您先登录','__APP__/Index/index');
			}
		}
	}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">