<?php
/*
 * 建立企业中心功能模块
 * @data 2015/10/21
 * @author 高龙
 */
	//建立本功能模块的控制器
	class EnterpriseAction extends Action{
		/*
		 * 建立显示企业的方法
		 * @param none
		 * @return none
		 */
		public function qiye(){
			$uname=session('uname');
			$result=R('Public/session');
			if($result){
				$result=R('Public/qs');
				if($result){
					$enterprise=M('enterprise');
					$result=$enterprise->where("e_user='$uname'")->find();
					$this->assign('data',$result);
					$member=M('member');
					$shifou=$member->where("m_name='$uname'")->getField('m_shifou');
					$this->assign('huiyuan',$shifou);
					$this->display();
				}
				else{
					$this->success('对不起您没有权限','__APP__/Index/index/id/1');
				}
			}
			else{
				$this->success('请 先登录','__APP__/Index/index');
			}
			
		}
		
		
		/*
		 * 建立修改企业信息的方法
		 * @param none
		 * @return none
		 */
		public function updateqiye(){
			$id=$this->_get('id');
			$enterprise=D('enterprise');
			if($this->_post('sub')){
				if($_FILES['files']['name']){
					$result=$enterprise->where("e_id=$id")->find();
					$name=$result['e_img'];
					@unlink("./Public/Images/$name");
					@unlink("./Public/Images/suo/thumb_$name");
					$upload=R('Public/upload');
					$enterprise->create();
					$enterprise->e_img=$upload[0]['savename'];
					$result=$enterprise->where("e_id=$id")->save();
					if($result){
						$this->success('修改成功','__URL__/qiye');
					}
					else{
						$this->error('修改失败','__URL__/qiye');
					}
				}
				else{
					$enterprise->create();
					$result=$enterprise->where("e_id=$id")->save();
					if($result){
						$this->success('修改成功','__URL__/qiye');
					}
					else{
						$this->error('修改失败','__URL__/qiye');
					}
				}
			}
			else{
				$result=$enterprise->where("e_id=$id")->find();
				$this->assign('data',$result);
				$this->display();
			}
		}
		
		/*
		 * 建立企业用于招聘的方法
		 * @param none
		 * @return none
		 */
		public function zhaopin(){
				$uname=session('uname');
				$invite=M('invite');
				if($_POST['sub']){
					$invite->create();
					$invite->i_user=$uname;
					$result=$invite->add();
					if($result){
						$this->success('发布成功','__URL__/qiye');
					}
					else{
						$this->error('发布失败','__URL__/qiye');
					}
				}
				else{
					$this->display();
				}
			
		}
		
		/*
		 * 建立用于捐赠的方法
		 * @param none
		 * @return none
		 */
		public function juanzeng(){
			
				if($this->_post('sub')){
					$donate=M('donate');
					$donate->create();
					$result=$donate->add();
					if($result){
						$this->success('申请成功','__URL__/qiye');
					}
					else{
						$this->error('申请失败','__URL__/qiye');
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
		 * 建立个人建议功能模块
		 * @param none
		 * @return none
		 */
		public function geren(){
			$advise=M('advise');
			if($_POST['sub']){
				$advise->create();
				$result=$advise->add();
				if($result){
					$this->success('提交成功','__URL__/qiye');
				}
				else{
					$this->error('提交失败','__URL__/qiye');
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
					$this->success('申请已提交管理员','__URL__/qiye');
				}
				else{
					$this->error('申请提交失败','__URL__/qiye');
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
		 * 建立查看招聘信息的方法
		 * @param none
		 * @return none
		 */
		public function szhaopin(){
			$result=R('Public/session');
			if($result){
				$uname=session('uname');
				$invite=M('invite');
				$result=$invite->where("i_user='$uname'")->find();
				$this->assign('data',$result);
				$this->display();
			}
			else{
				$this->error('请先登录','__APP__/Index/index');
			}
		}
		
		/*
		 * 建立修改企业招聘的方法
		 * @param none
		 * @return none
		 */
		public function updatezp(){
			$id=$this->_get('id');
			$invite=M('invite');
			if($_POST['sub']){
				$invite->create();
				$result=$invite->where("i_id=$id")->save();
				if($result){
					$this->success('修改成功','__URL__/qiye');
				}
				else{
					$this->error('修改失败','__URL__/qiye');
				}
			}
			else{
				$result=$invite->where("i_id=$id")->find();
				$this->assign('data',$result);
				$this->display();
			}
		}
		
		/*
		 * 建立删除我的招聘的方法
		 * @param none
		 * @return none
		 */
		public function deletezp(){
			$id=$this->_get('id');
			$invite=M('invite');
			$result=$invite->where("i_id=$id")->delete();
			if($result){
				$this->success('删除成功','__URL__/qiye');
			}
			else{
				$this->error('删除失败','__URL__/qiye');
			}
		}
		
		/*
		 * 建立修改密码的方法
		 * @param none
		 * @return none
		 */
		public function updatemima(){
			//接收传过来的id号
			$id=$this->_get('id');
			
			if($_POST['sub']){
				if($_POST['epwd'] == $_POST['e_pwd'] ){
					$this->error('两次密码不能一致','__URL__/updatemima');	
				}
				else{
					//实例化自定义类
					$enterprise=D('Enterprise');
					
					//进行自动创建并进行修改
					if($enterprise->create()){
						$result=$enterprise->where("e_id=$id")->save();
						if($result){
							$this->success('修改成功 请重新登录','__APP__/Index/tuichu');
						}
						else{
							$this->error('修改失败','__URL__/qiye');
						}
					}
					else{
						$cuowu=$enterprise->getError();
						$this->error($cuowu,'__URL__/updatemima');
					}
				}	
			}
			else{
				//根据传过来id号查找所需要修改的密码并把密码映射到模板中
				$enterprise=M('enterprise');
				$pwd=$enterprise->where("e_id=$id")->getField('e_pwd');
				$this->assign('pwd',$pwd);
				
				//包含该方法的模板
				$this->display();
			}
		}
		
		/*
		 * 建立验证旧密码是否正确
		 * @param none
		 * @return none
		 */
		public function jmima(){
			//接收传过来的旧密码
			$pwd=$this->_get('pwd');
			
			//查询是否存在改密码
			$enterprise=M('enterprise');
			$result=$enterprise->where("e_pwd='$pwd'")->find();
			if($result){
				echo '正确';
			}
			else{
				echo '密码不存在';
			}
		}
		
		/*
		 * 建立返回会员类型金额的方法
		 * @param none
		 * @return none
		 */
		public function jine(){
			//接收传过来的id号
			$id=$this->_get('id');
			
			//判断是否是id号
			if($id == 'a'){
				echo '不存在';
			}
			else{
				//根据id号查询金额
				$membertype=M('membertype');
				$jine=$membertype->where("mt_id=$id")->getField('mt_money');
				echo '金额:'.$jine;
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
						$this->success('填写成功','__URL__/qiye');
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
				$this->success('删除成功','__URL__/qiye');
			}
			else{
				$this->error('删除失败','__URL__/qiye');
			}
		}
	}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">