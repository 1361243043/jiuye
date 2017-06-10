<?php
/*
 * 建立登陆和首页模块
 * @datta 2015/10/13
 * @author 高龙
 */

class IndexAction extends Action {
	/*
		建立用于登陆的方法
		@param none
	*/
    public function login(){
		if($this->_post('sub')){
			$name=$this->_post('name');
			$pwd=$this->_post('pwd');
			$manage=M('manage');
			$result=$manage->where("m_name='$name' && m_pwd=$pwd")->select();
			if($result){
				session('name',$name);
				$this->success('登陆成功','__URL__/shouye');
			}
			else{
				$this->error('登陆失败','__URL__/login');
			}
		}
		else{
			$this->display();
		}
    }

	/*
		建立判断是否登陆的方法
	*/
    public function shouye(){
    	if(session('?name')){
    		$this->display();
    	}
    	else{
    		$this->success('请你先登录','__URL__/login');
    	}
    }

	/*
		建立用于判断是超级管理还是普通管理的方法
	*/
	public function top(){
		$uname=session('name');
		$manage=M('manage');
		$result=$manage->where("m_name = '$uname'")->getField('m_jb');
		if($result == 1){
			$this->assign('jb','超级管理');
		}
		else{
			$this->assign('jb','普通管理');
		}
		$this->assign('uname',$uname);
		$this->display();
	}

	/*
		建立用于安全退出的方法
	*/
	public function tuichu(){
		session(null);
		$this->success('退出成功','__URL__/login');
	}
	public function shixiao(){
		$this->display();
	}

	/*
		验证session是否已经过期
		@param none
		@return int
	*/
	public function ysession(){
		if(session('?name')){
			echo 1;
		}
		else{
			
			echo 2;
		}
		
	}
}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">