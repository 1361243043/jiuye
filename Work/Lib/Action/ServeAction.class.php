<?php
/*
 * 建立就业服务功能模块
 * @data 2015/10/19
 * @author 高龙
 */
		/*
		 * 建立显示就业服务功能模块的控制器
		 */
		class ServeAction extends Action{
			/*
			 * 建立显示就业服务的方法
			 * @param none
			 * @return none
			 */
			public function jiuye(){
			
				$serve=M('serve');
				if($_GET['sname'] != '' && $_GET['sname'] != 'a'){
					$sname=$this->_get('sname');
					$where="s_name like '%$sname%' and ";
				}
				if($_GET['city'] != '' && $_GET['city'] != 'a'){
					$city=$this->_get('city');
					$where=$where."s_city='$city' and ";
				}
				if($_GET['company'] != '' && $_GET['company'] != 'a'){
					$company=$this->_get('company');
					$where=$where."s_company='$company' and ";
				}
				
	
				$page=A('Public');
				$result=$page->page('serve',3,3,$where);
				$data=$result['data'];
				$page=$result['page'];
				$this->assign('data',$data);
				$this->assign('page',$page);
				$result=$serve->order('s_city desc')->group('s_city')->select();
				$this->assign('city',$result);
				$result=$serve->order("s_company desc")->group('s_company')->select();
				$this->assign('company',$result);	
				if(session('?name')){
					$this->display();
				}
				else{
					$this->success('请您先登录','__APP__/Index/login');
				} 
				

			}
		 
			/*
			 * 建立查看的方法
			 * @param none
			 * @return none
			 */
			public function see(){
				$id=$this->_get('id');
				$biao=M('serve');
				$result=$biao->where("s_id=$id")->find();
				$this->assign('data',$result);
				$this->display();
			}
			
			/*
			 * 建立添加的方法
			 * @param none
			 * @return none
			 */
			public function add(){
				if($this->_post('sub')){
					$upload=A('Public');
					$result=$upload->upload();
					$student=M('serve');
					$student->create();
					$student->s_img=$result[0]['savename'];
					$jieguo=$student->add();
					if($jieguo){
						$this->success('添加成功','__URL__/jiuye');
					}
					else{
						$this->error('添加失败','__URL__/jiuye');
					}
				}
				else{
					$this->display();
				}
			}
			
			/*
			 * 建立修改的方法
			 * @param none
			 * @return none
			 */
			public function update(){
				$id=$this->_get('id');
				if($this->_post('sub')){
					if($_FILES['files']['name']){
						$student=M('serve');
						$data=$student->where("s_id=$id")->find();
						$name=$data['s_img'];
						@unlink("./Public/Images/$name");
	    				@unlink("./Public/Images/suo/thumb_$name");
	    				$upload=R('Public/upload');
	    				$student->create();
	    				$student->s_img=$upload[0]['savename'];
	    				$result=$student->where("s_id=$id")->save();
	    				if($result){
	    					$this->success('修改成功','__URL__/jiuye');
	    				}
	    				else{
	    					$this->error('修改失败','__URL__/jiuye');
	    				}
					}
					else{
						$student=M('serve');
						$student->create();
						$result=$student->where("s_id=$id")->save();
						if($result){
							$this->success('修改成功','__URL__/jiuye');
						}
						else{
							$this->error('修改失败','__URL__/jiuye');
						}
					}
				}
				else{
					$student=M('serve');
					$data=$student->where("s_id=$id")->find();
					$this->assign('data',$data);
					$this->display();
				}
			}
			
			/*
			 * 建立多删的方法
			 * @param none
			 * @return none
			 */
			public function duoshan(){
				$id=$this->_post('check');
				$serve=M('serve');
				foreach($id as $v){
					$result=$serve->where("s_id=$v")->find();
					$name=$result['s_img'];
					@unlink("./Public/Images/$name");
					@unlink("./Public/Images/thumb_$name");
					$jieguo=$serve->where("s_id=$v")->delete();
				}
				if($jieguo){
					$this->success('删除成功','__URL__/jiuye');
				}
				else{
					$this->error('删除失败','__URL__/jiuye');
				}
			}
		}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">