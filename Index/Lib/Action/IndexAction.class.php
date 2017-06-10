<?php
/*
 * 建立首页功能模块
 * @data 2105/10/20
 * @author 高龙
 */
	//建立本功能模块的控制器
class IndexAction extends Action {
    
	/*
	 * 建立进入网页首页的方法
	 * @param none
	 * @return none
	 */
	public function index(){
		$result=R('Public/session');
		if($result){
			$id=$this->_get('id');
		}
		$uname=session('uname');
		$qs=R('Public/qs');
		if($qs){
			$enterprise=M('enterprise');
			$ename=$enterprise->where("e_user='$uname'")->getField('e_name');
			$this->assign('uname',$ename);
			$member=M('member');
			$huiyuan=$member->where("m_name='$uname'")->getField('m_shifou');
			$this->assign('huiyuan',$huiyuan);
		}
		else{
			$user=M('user');
			$nicheng=$user->where("u_name='$uname'")->getField('u_nicheng');
			$this->assign('uname',$nicheng);
			$member=M('member');
			$huiyuan=$member->where("m_name='$uname'")->getField('m_shifou');
			$this->assign('huiyuan',$huiyuan);
		}
		$this->assign('id',$id);
		$invite=M('invite');
		$result=$invite->select();
		$this->assign('qiye',$result);
		$this->assign('qiye2',$result);
		$applyjob=M('applyjob');
		$qiuzhi=$applyjob->select();
		$this->assign('quizhi',$qiuzhi);
    	$this->display();
    }
    
    /*
     * 建立首页登录的方法
     * @data 2015/10/20
     * @author 高龙
     */
    public function login(){
    	$uname=$this->_post('uname');
    	$pwd=$this->_post('pwd');
 		$user=substr($uname,0,1);
 		if($user == 'q'){
 			$enterprise=M('enterprise');
 			$result=$enterprise->where("e_user='$uname' and e_pwd=$pwd")->find();
 			if($result){
 				session('uname',$uname);
 				session('pwd',$pwd);
 				$this->success('登录成功','__APP__/User/user');
 			}
 			else{
 				$this->success('登录失败','__APP__/User/user');
 			}
 		}
 		else{
 			$user=M('user');
 			$result=$user->where("u_name='$uname' and u_pwd=$pwd")->find();
 			if($result){
 				session('uname',$uname);
 				session('pwd',$pwd);
 				$this->success('登录成功','__APP__/User/user');
 			}
 			else{
 				$this->success('登录失败','__APP__/User/user');
 			}
 		}	
    }
    
    /*
     * 建立安全退出的方法
     * @param none
     * @return none
     */
    public function tuichu(){
    	session(null);
    	$this->success('退出成功','__URL__/index');  
    }
    
    /*
     * 建立个人注册的方法
     * @param none
     * @return none
     */
    public function geren(){
    	$user=M('user');
    	if($_POST['sub']){
    		$uname=$this->_post('u_name');
    		$name=substr($uname,0,1);
    		if($name == 's'){
	    		if($_POST['u_pwd'] == $_POST['upwd']){
	    			if(session('verify') == md5($this->_post('yanma'))){
	    				$user=D('User');
	    				if($user->create()){
	    					$result=$user->add();
	    					if($result){
	    						$this->success('注册成功',"__URL__/nicheng/uname/".$uname."");
	    					}
	    					else{
	    						$this->error('注册失败','__URL__/index');
	    					}
	    				}
	    				else{
	    					$name=$user->getError();
	    					$this->error($name,'__URL__/geren');
	    				}
	    			}
	    			else{
	    				$this->error('验证码错误','__URL__/geren');
	    			}
	    		}
	    		else{
	    			$this->error('两次密码不一致','__URL__/geren');
	    		}
    		}
    		else{
    			$this->error('请以s开头填写账号','__URL__/geren');
    		}
    	}
    	else{
    		$this->display();
    	}
    }
    
    /*
     * 建立企业注册的方法
     * @param none
     * @return none
     */
    public function qiye(){
    	if($_POST['sub']){
    		$uname=$this->_post('e_user');
    		$user=substr($uname,0,1);
    		if($user == 'q'){
    			if($_POST['e_pwd'] == $_POST['epwd']){
    				if(session('verify') == md5($this->_post('yanma'))){
    					$enterprise=D('Enterprise');
    					$result=R('Public/upload');
    					if($enterprise->create()){
    						$enterprise->e_img=$result[0]['savename'];
    						$result=$enterprise->add();
    						if($result){
								$uname=$_POST['u_name'];
    							$this->success('注册成功','__URL__/index');
    						}
    						else{
    							$this->error('注册失败','__URL__/index');
    						}
    					}
    					else{
    						$result=$enterprise->getError();
    						$this->error($result,'__URL__/qiye');
    					}
    				}
    				else{
    					$this->error('验证码错误','__URL__/qiye');
    				}
    			}
    			else{
    				$this->error('两次密码不一致','__URL__/qiye');
    			}
    		}
    		else{
    			$this->error('请以q开头填写账号','__URL__/qiye');
    		}
    	}
    	else{
    		$this->display();
    	}
    }
    
    /*
     * 建立用于填写个人昵称和个性签名的方法
     * @param none
     * @return none
     */
    public function nicheng(){
    	//接收用户名
    	$uname=$_GET['uname'];
    	
    	//判断有没有填写昵称和个性签名
    	if($_POST['sub']){
    		//实例化表类
    		$user=M('user');
    		
    		//添加个性签名和昵称
    		$xiugai['u_nicheng']=$this->_post('u_nicheng');
    		$xiugai['u_gexin'] =$this->_post('u_gexin');
    		//进行添加
    		$result=$user->where("u_name='$uname'")->save($xiugai);
    		if($result){
    			$this->success('写入成功','__APP__/Oneman/geren');
    		}
    		else{
    			$this->error('写入失败','__URL__/nicheng');
    		}
    	}
    	else{
    		$this->display();
    	}
    }
    
    /*
     * 建立一个用于防止密码丢失的方法
     * @param none
     * @return none
     * 
     */
    public function wangji(){
    	if($_POST['sub']){
    		//验证该用户是否存在
    		$mibao=M('mibao');
    		$uname=$this->_post('user');
    		$user=$mibao->where("m_user='$uname'")->find();
    		if($user){
    			//验证密保问题是否正确
    			$where['m_cname']=$this->_post('cname');
    			$where['m_fname']=$this->_post('fname');
    			$result=$mibao->where($where)->find();
    			if($result){
    				//验证两次密码是否一致
    				if($_POST['pwd'] == $_POST['pwds']){
    					//验证是企业还是学生
    					$uname=$this->_post('user');
    					$user=substr($uname,0,1);
    					if($user == 'q'){
    						//实例化基类
    						$enterprise=D('Enterprise');

    						//验证密码是否为8位数
    						$enterprise->create();
    						$error=$enterprise->getError();
    						if($error){
    							$this->error($error,'__URL__/wangji');
    						}
    						else{
    							//进行修改密码
	    						$where['e_pwd']=$this->_post('pwd');
	    						$use['e_user']=$this->_post('user');
	    						
	    						$result=$enterprise->where($use)->save($where);
	    						if($result){
	    							$this->success('操作成功','__URL__/index');
	    						}
	    						else{
	    							$this->error('操作失败','__URL__/wangji');
	    							
	    						}
    						}
    						
    					}
    					else{
    						//实例化自定义类
    						$user=D('User');
    						
    						//验证密码是否为8位数
    						$user->create();
    						$error=$user->getError();
    						if($error){
    							$this->error($error,'__URL__/wangji');	
    						}
    						else{
	    						//修改密码
	    						$where['u_pwd']=$this->_post('pwd');
	    						$where1['u_name']=$this->_post('user');
	    						$result=$user->where($where1)->save($where);
	    						if($result){
	    							$this->success('操作成功','__URL__/index');
	    						}
	    						else{
	    							$this->error('操作失败','__URL__/wangji');
	    						}
    						}
    						
    						
    					}
    				}
    				else{
    					$this->error('两次密码不一致','__URL__/wangji');
    				}
    			}
    			else{
    				$this->error('密保问题错误','__URL__/wangji');
    			}
    		}
    		else{
    			$this->error('该用户名不存在','__URL__/index');
    		}
    	}
    	else{
    		$this->display();
    	}
    }
}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">