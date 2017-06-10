<?php
/*
 * 建立个人中心功能模块
 * @data 2015/10/22
 * @author 高龙
 */
	//建立本功能模块的控制器
	class OnemanAction extends Action{
		/*
		 * 建立显示个人信息的方法
		 * @param none
		 * @return none
		 */
		public function geren(){
			$uname=session('uname');
			$result=R('Public/session');
			if($result){
				$result=R('Public/qs');
				if($result){
					$this->success('对不起！您没有权限','__APP__/Index/index/id/1');
				}
				else{
					$user=M('user');
					$result=$user->where("u_name='$uname'")->find();
					$this->assign('data',$result);
					$member=M('member');
					$shifou=$member->where("m_name='$uname'")->getField('m_shifou');
					$this->assign('huiyuan',$shifou);
					$this->display();
				}
			}
			else{
				$this->success('请您先登录','__APP__/Index/index');
			}
		}
		
		/*
		 * 建立个人信息修改方法
		 * @param none
		 * @return none
		 */
		public function updategeren(){
			$id=$this->_get('id');
			$user=M('user');
			if($_POST['sub']){
				$user->create();
				$result=$user->where("u_id=$id")->save();
				if($result){
					$this->success('修改成功','__URL__/geren');
				}
				else{
					$this->error('修改失败','__URL__/geren');
				}
			}
			else{
				$result=$user->where("u_id=$id")->find();
				$this->assign('data',$result);
				$this->display();
			}
		}
		
		/*
		 * 建立个人建议方法
		 * @param none
		 * @return none
		 */
		public function jianyi(){
			$advise=M('advise');
			if($_POST['sub']){
				$advise->create();
				$result=$advise->add();
				if($result){
					$this->success('提交成功','__URL__/geren');
				}
				else{
					$this->error('提交失败','__URL__/geren');
				}
			}
			else{
				$this->display();
			}
		}
		
		/*
		 * 建立捐赠的方法
		 * @param none
		 * @return none
		 */
		public function juanzeng(){
			if($this->_post('sub')){
					$donate=M('donate');
					$donate->create();
					$result=$donate->add();
					if($result){
						$this->success('申请成功','__URL__/geren');
					}
					else{
						$this->error('申请失败','__URL__/geren');
					}
				}
				else{
					$type=M('typedonate');
					$result=$type->select();
					$this->assign('type',$result);
					$this->display();
				}	
		}
		
		/*
		 * 建立求职方法
		 * @param none
		 * @return none
		 */
		public function qiuzhi(){
			$uname=session('uname');
			$applyjob=M('applyjob');
			if($_POST['sub']){
				$applyjob->create();
				$applyjob->aj_user=$uname;
				$result=$applyjob->add();
				if($result){
					$this->success('申请成功','__URL__/geren');
				}
				else{
					$this->error('申请失败','__URL__/geren');
				}
			}
			else{
				$this->display();
			}
		}
		
		/*
		 * 建立就业反馈表
		 * @param none
		 * @return none
		 */
		public function fankui(){
			$serve=M('serve');
			if($_POST['sub']){
				$upload=R('Public/upload');
				$serve->create();
				$serve->s_img=$upload[0]['savename'];
				$result=$serve->add();
				if($result){
					$this->success('反馈成功','__URL__/geren');
				}
				else{
					$this->error('反馈失败','__URL__/geren');
				}
			}
			else{
				$this->display();
			}
		}
		
	/*
		 * 建立会员申请模块
		 * @param none
		 * @return none
		 */
		public function huiyuan(){
			$member=M('member');
			$uname=session('uname');
			if($_POST['sub']){
				$member->create();
				$member->m_name=$uname;
				$result=$member->add();
				if($result){
					$this->success('申请已提交管理员','__URL__/geren');
				}
				else{
					$this->error('申请提交失败','__URL__/geren');
				}
			}
			else{
				$membertype=M('membertype');
				$result=$membertype->select();
				$this->assign('type',$result);
				$this->display();
			}
			
		}
		
		/*
		 * 建立查看求职的方法
		 * @param none
		 * @return none
		 */
		public function sqiuzhi(){
			$uname=session('uname');
			$result=R('Public/session');
			if($result){
				$applyjob=M('applyjob');
				$result=$applyjob->where("aj_user='$uname'")->find();
				$this->assign('data',$result);
				$this->display();
			}
			else{
				$this->error('请您先登录','__APP__/Index/index');
			}
		}
		
		/*
		 * 建立修改我的求职的方法
		 * @param none
		 * @return none
		 */
		public function updateqz(){
			$id=$this->_get('id');
			$applyjob=M('applyjob');
			if($_POST['sub']){
				$applyjob->create();
				$result=$applyjob->where("aj_id=$id")->save();
				if($result){
					$this->success('修改成功','__URL__/geren');
				}
				else{
					$this->error('修改失败','__URL__/geren');
				}
			}
			else{
				$result=$applyjob->where("aj_id=$id")->find();
				$this->assign('data',$result);
				$this->display();
			}
		}
		
		/*
		 * 建立删除我的求职的方法
		 * @param none
		 * @return none
		 * 
		 */
		public function deleteqz(){
			$id=$this->_get('id');
			$applyjob=M('applyjob');
			$result=$applyjob->where("aj_id=$id")->delete();
			if($result){
				$this->success('删除成功','__URL__/geren');
			}
			else{
				$this->error('删除失败','__URL__/geren');
			}
		}
		
		/*
		 * 建立一个修改密码的方法
		 * @param none
		 * @return none
		 * 
		 */
		public function updatemima(){
			//接收传过来的id号
			$id=$this->_get('id');
			
			//判断是否点击修改
			if($_POST['sub']){
				//验证两次密码是否一致
				if($_POST['upwd'] == $_POST['u_pwd']){
					$this->error('密码不能重复','__URL__/updatemima');
				}
				else{
					//实例化自定义类
					$user=D('User');

					//进行自动创建并修改
					if($user->create()){
						$result=$user->where("u_id=$id")->save();
						if($result){
							$this->success('修改成功 请重新登录','__APP__/Index/tuichu');
						}
						else{
							$this->error('修改失败','__URL__/updatemima');
						}
					}
					else{
						$error=$user->getError();
						$this->error($error,'__URL__/updatemima');
					}
				}
			}
			else{
				//包含模板
				$this->display();
			}
		}
		
		/*
		 * 建立验证旧密码是否存在的方
		 * @param none
		 * @return none
		 */
		public function jmima(){
			//接收传过来的旧密码
			$pwd=$this->_get('pwd');
			
			//查询旧密码是否存在
			$user=M('user');
			$result=$user->where("u_pwd='$pwd'")->find();
			if($result){
				echo '正确';
			}
			else{
				echo '密码不存在';
			}
		}
		
		/*
		 * 建立一个用于返回会员金额的方法
		 * @param none
		 * @retur none
		 */
		public function jine(){
			//接收会员类型的id号
			$id=$this->_get('id');
			
			//根据id号查找金额
			if($id == 'a'){
				echo '不存在';
			}
			else{
				$membertype=M('membertype');
				$result=$membertype->where("mt_id=$id")->getField('mt_money');
				echo '金额:'.$result;
			}
			
		}
		
	/*
		 * 建立一个用于填写密保的方法
		 * @param none
		 * @return none
		 */
		public function mibao(){
			//接收用户名
			$uname=session('uname');
			
			//判断是否提交数据
			if($_POST['sub']){
				//实例化自定义基类
				$mibao=D('Mibao');
				
				//进行自动验证并添加数据
				if($mibao->create()){
					$mibao->m_user=$uname;
					$result=$mibao->add();
					if($result){
						$this->success('填写成功','__URL__/geren');
					}
					else{
						$this->error('填写失败','__URL__/mibao');
					}
				}
				else{
					$error=$mibao->getError();
					$this->error($error,'__URL__/mibao');
				}
			}
			else{
				//把用户名映射到模板中去
				$this->assign('uname',$uname);
				
				//包含该模板
				$this->display();	
			}
		}
		
	/*
		 * 建立一个查看我的密保的方法
		 * @param none
		 * @return none
		 */
		public function smibao(){
			//接收用户名
			$uname=session('uname');
			
			//判断有没有登陆
			$result=R('Public/session');
			if($result){
				//实例化表类
				$mibao=M('mibao');
				
				//查询该用户的密保问题并映射到模板
				$result=$mibao->where("m_user='$uname'")->find();
				$this->assign('data',$result);
				
				//包含该模板
				$this->display();
			}
			else{
				$this->error('请先登陆','__APP__/Index/index');
			}
		}
		
	/*
		 * 建立修改密保的方法
		 * @param none
		 * @return none
		 */
		public function umibao(){
			//接收id号
			$id=$this->_get('id');
			
			//判断有没有提交数据
			if($_POST['sub']){
				//实例化自定义基类
				$mibao=D('Mibao');
				
				//自定义创建数据并修改
				if($mibao->create()){
					$result=$mibao->where("m_id=$id")->save();
					if($result){
						$this->success('修改成功','__URL__/smibao');
					}
					else{
						$this->error('修改失败','__URL__/smibao');
					}
				}
				else{
					$error=$mibao->getError();
					$this->error($error,'__URL__/smibao');
				}
			}
			else{
				//实例化基类
				$mibao=M('mibao');
				
				//查找数据并映射到模板中
				$result=$mibao->where("m_id=$id")->find();
				$this->assign('data',$result);
				
				//包含模板
				$this->display();
			}
		}
		
		/*
		 * 建立删除密保的方法
		 * @param none
		 * @return none
		 */
		public function dmibao(){
			//接收传过来的id号
			$id=$this->_get('id');
			
			//实例化基类并删除数据
			$mibao=M('mibao');
			$result=$mibao->where("m_id=$id")->delete();
			
			//判断删除是否成功并跳转
			if($result){
				$this->success('删除成功','__URL__/geren');
			}
			else{
				$this->error('删除失败','__URL__/geren');
			}
		}
	}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">