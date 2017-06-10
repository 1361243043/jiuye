<?php
/*
 * 建立学生信息功能模块
 * @data 2015/10/14
 * @author 高龙
 * 
 */
	class StudentAction extends Action{
		public function xuesheng(){
			$session=A('Public');
			$session->session();
			if($this->_post('jiansuo')){
				if($this->_post('sname') != ''){
					$name=$this->_post('sname');
					$cha="s_name like '%$name%' and ";
				}
				if($this->_post('cid') != '' && $this->_post('cid') != 1){
					$cid=$this->_post('cid');
					$cha=$cha."c_id=$cid and ";
				}
				$student=D('Student');
				$result=$student->relation(true)->where($cha."1")->select();
				$this->assign('data',$result);
			}
			else{
				$result=$session->pages('Student',3,3);
				$data=$result['data'];
				$page=$result['page'];
				$this->assign('data',$data);
				$this->assign('page',$page);
			}
			$grade=D('grade');
			$result=$grade->select();
			$this->assign('grade',$result);
			if(session('?name')){
				$this->display();
			}
			else{
				$this->success('请您先登录','__APP__/Index/login');
			} 
		}
		public function add(){
			if($this->_post('sub')){
				$upload=A('Public');
				$result=$upload->upload();
				$student=D('student');
				$student->create();
				$student->s_img=$result[0]['savename'];
				$jieguo=$student->add();
				if($jieguo){
					$this->success('添加成功','__URL__/xuesheng');
				}
				else{
					$this->error('添加失败','__URL__/xuesheng');
				}
			}
			else{
				$class=D('class');
				$result=$class->select();
				$this->assign('class',$result);
				$this->display();
			}
		}
		public function update(){
			$id=$this->_get('id');
			if($this->_post('sub')){
				if($_FILES['files']['name']){
					$student=D('student');
					$data=$student->where("s_id=$id")->find();
					$name=$data['s_img'];
					@unlink("./Public/Images/$name");
    				@unlink("./Public/Images/suo/thumb_$name");
    				$upload=R('Public/upload');
    				$student->create();
    				$student->s_img=$upload[0]['savename'];
    				$result=$student->where("s_id=$id")->save();
    				if($result){
    					$this->success('修改成功','__URL__/xuesheng');
    				}
    				else{
    					$this->error('修改失败','__URL__/xuesheng');
    				}
				}
				else{
					$student=D('student');
					$student->create();
					$result=$student->where("s_id=$id")->save();
					if($result){
						$this->success('修改成功','__URL__/xuesheng');
					}
					else{
						$this->error('修改失败','__URL__/xuesheng');
					}
				}
			}
			else{
				$student=D('Student');
				$data=$student->relation(true)->where("s_id=$id")->find();
				$sex=$data['s_sex'];
				$cid=$data['c_id'];
				$this->assign('cid',$cid);
				$this->assign('sex',$sex);
				$this->assign('data',$data);
				$class=D('class');
				$result=$class->select();
				$this->assign('class',$result);
				$this->display();
			}
		}
		public function duoshan(){
			$id=$this->_post('check');
			$student=D('student');
			foreach($id as $v){
				$data=$student->where("s_id=$v")->find();
				$name=$data['s_img'];
				@unlink("./Public/Images/$name");
				@unlink("./Public/Images/suo/thumb_$name");
				$result=$student->where("s_id=$v")->delete();
			}
			if($result){
				$this->success('删除成功','__URL__/xuesheng');
			}
			else{
				$this->error('删除失败','__URL__/xuesheng');
			}
		}
		public function ajax(){
			$grade=$this->_get('grade');
			if($grade == 1){
				echo '没有此年级';
			}
			else{
				$class=D('class');
				$result=$class->where("g_name='$grade'")->select();
				$banji="<select name='cid'><option value=1>--请选择--</option>";
				foreach($result as $vo){
					$banji=$banji."<option value=".$vo['c_id'].">".$vo['c_name']."</option>";
				}
				$banji=$banji."</select>";
				echo $banji;	
			}
		}
	}
	
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">