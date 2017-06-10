<?php
/*
 * 建立个人信息功能模块
 * @data 2015/10/20
 * @author 高龙
 */
	class UserAction extends Action{
		/*
		 * 建立显示个人信息的方法
		 * @param none
		 * @return none
		 */
		public function geren(){
			
			$invite=M('user');
			if($_GET['uname'] != '' && $_GET['uname'] != 'a'){
				$iname=$this->_get('uname');
				$where="u_name like '%$iname%' and ";
			}
			

			$page=A('Public');
			$result=$page->page('user',3,3,$where);
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
		
		/*
		 * 建立多删的方法
		 * @param none
		 * @return none
		 */
		public function duoshan(){
			$id=$this->_post('check');
			$user=M('user');
			foreach($id as $v){
				$result=$user->where("u_id=$v")->delete();
			}
			if($result){
				$this->success('删除成功','__URL__/geren');
			}
			else{
				$this->error('删除失败','__URL__/geren');
			}
		}
		
		public function lianxi(){
			$biao=M('donate');
			$result=$biao->where('1')->find();
			echo '<pre>';
				print_r($result);
			echo '</pre>';
		}
	}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">