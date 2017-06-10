<?php
/*
 * 建立显示就业服务的功能模块
 * @data 2015/10/26
 * @author 高龙
 */
	//建立本功能模块的控制器
	class ServeAction extends Action{
		/*
		 * 建立显示就业服务的方法
		 * @param none
		 * @return none
		 */
		public function jiuye(){
			
				
				//判断并接受传过来的学生姓名
				if($_GET['name']){
					$id=1;
					$this->assign('id',$id);
					$name=$this->_get('name');
					$where="s_name like '%$name%' and ";
				}
				
				//判断并接受传过来的城市名称
				if($_GET['city']){
					$id=1;
					$this->assign('id',$id);
					$city=$this->_get('city');
					$where=$where."s_city='$city' and ";
				}
				
				//判断并接受传过来的岗位名称
				if($_GET['gangwei']){
					$id=1;
					$this->assign('id',$id);
					$gangwei=$this->_get('gangwei');
					$where=$where."s_gangwei='$gangwei' and ";
				}
				
				
				//查询数据并分页
				$page=A('Public');
				$result=$page->page('serve',6,3,$where);
				$data=$result['data'];
				$page=$result['page'];
				$this->assign('data',$data);
				$this->assign('page',$page);
				
				//实例化就业 服务表
				$serve=M('serve');
				
				//查询城市并以此分组和排序
				$result=$serve->group('s_city')->order('s_city desc')->select();
				$this->assign('city',$result);
				
				//查询职位并以此分组和排序
				$result=$serve->group('s_gangwei')->order('s_gangwei desc')->select();
				$this->assign('gangwei',$result);
				
				//关联模板
				$this->display();
			
		}
		
		/*
		 * 显示更多的就业服务的信息
		 * @param none
		 * @return none
		 */
		public function see(){
			$rsult=R('Public/session');
			if($rsult){
				$id=$this->_get('id');
				$serve=M('serve');
				$rsult=$serve->where("s_id=$id")->find();
				$this->assign('data',$rsult);
				$huiyuan=R('Public/huiyuan');
				if($huiyuan['shifou']){
					if($huiyuan['time']){
						$this->display();
					}
					else{
						$this->error('对不起您的会员期限已过！！无权查看','__URL__/huiyuan');
					}
				}
				else{
					$this->error('对不起您不是会员！！无权查看','__URL__/huiyuan');
				}
			}
			else{
				$this->error('请您先登录','__APP__/Index/index');
			}
		}

		/*
		 * 建立开通会员的方法
		 * @param none
		 * @return none
		 */
		public function huiyuan(){
			$result=R('Public/session');
			if($result){
				$this->display();
			}
			else{
				$this->error('请您先登录','__APP__/Index/index');
			}
		}
	}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8">