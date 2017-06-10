<?php 
/*
 * @desc 建立会员类型功能模块
 * @date 2015/12/27
 * @author 高龙
 */
	class MembertypeAction extends Action{
		/*
		 * 建立一个显示会员类型的方法
		 * @param none
		 * @return none
		 */
		public function membertype(){
			//实例化公共类
			$Page = A('Public');
			
			//调用用于分页的方法
			$result = $Page->page('membertype',3,3);
			
			//接收表数据返回来的数组
			$date = $result['data'];
			
			//接收要显示的分页的格式
			$page = $result['page'];
			
			//将数据和分页的格式映射到模板中去
			$this->assign('date',$date);
			
			$this->assign('page',$page);
			
			//包含模板
			$this->display();
		}
		
		/*
		 * 建立用于添加会员类型的表
		 * @param none
		 * @return none
		 */
		public function add(){
			//判断是否点击了提交按钮
			if($_POST['sub']){
				//实例化会员类型表
				$m = M('membertype');
				
				//自动创建数据
				$m->create();
				
				//调用方法添加数据
				$result = $m->add();
				
				//判断数据是否成功
				if($result){
					$this->success('添加成功','__URL__/membertype');
				}
				else{
					$this->error('添加失败','__URL__/membertype');
				}
			}
			else{
				//包含模板
				$this->display();
			}
		}
		
		/*
		 * 建立一个用于多删的方法
		 * @param none
		 * @return none
		 */
		public function duoshan(){
			//接收传过来的id号
			$id = $this->_post('check');
			
			//实例化会员类型表
			$m = M('membertype');
			
			//循环删除数据表里的数据
			foreach ($id as $v){
				$result = $m->where("mt_id=$v")->delete();
			}
			
			//判断是否删除成功
			if($result){
				$this->success('删除成功','__URL__/membertype');
			}
			else{
				$this->error('删除失败','__URL__/membertype');
			}
		}
		
		/*
		 * 建立修改会员类型的方法
		 * @param none
		 * @return none
		 */
		public function update(){
			//接收所要修改的id号
			$id = $this->_get('id');
			
			//实例化会员类型表
			$m = M('membertype');
			
			//判断是否按了提交按钮
			if($_POST['sub']){
				//自动创建数据
				$m->create();
				
				//设立修改的条件
				$map['mt_id'] = array('eq',$id);

				//根据条件书写修改语句
				$result = $m->where($map)->save();
				
				//判断是否修改成功
				if($result){
					$this->success('修改成功','__URL__/membertype');
				}
				else{
					$this->error('修改失败','__URL__/membertype');
				}
				
			}
			else{
				//查询表中的数据
				$date = $m->where("mt_id = $id")->find();
				
				//将查询出来的数据映射到模板中去
				$this->assign('date',$date);
				
				//包含模板
				$this->display();
			}
		}
		
	//此功能模块类的结束符	
	}
?>