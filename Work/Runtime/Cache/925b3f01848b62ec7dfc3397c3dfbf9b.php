<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBLIC__/Hou/css/style.css" rel="stylesheet" type="text/css" />
<style rel="stylesheet" type="text/css">
	.current{display:inline}
</style>
<script type="text/javascript" src="__PUBLIC__/Hou/js/jquery.js"></script>
<script language="javascript">
$(function(){	
	//导航切换
	$(".imglist li").click(function(){
		$(".imglist li.selected").removeClass("selected")
		$(this).addClass("selected");
	})	
})	
</script>
<script type="text/javascript">
$(document).ready(function(){
  $(".click").click(function(){
  $(".tip").fadeIn(200);
  });
  
  $(".tiptop a").click(function(){
  $(".tip").fadeOut(200);
});

  $(".sure").click(function(){
  $(".tip").fadeOut(100);
});

  $(".cancel").click(function(){
  $(".tip").fadeOut(100);
});

});
</script>
</head>


<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">图片列表</a></li>
    </ul>
    </div>
    
    <div class="rightinfo">
    <form action="__URL__/duoshan" method='post'>
    <div class="tools">
    
    	<ul class="toolbar">
        <li><span><img src="__PUBLIC__/Hou/images/t01.png" /></span>
        	<a href='__URL__/add'>添加</a>
        </li>
        <li><span><img src="__PUBLIC__/Hou/images/t02.png" /></span>
        	<input type='button' id='fanxuan' value='反选' />
        </li>
        <li><span><img src="__PUBLIC__/Hou/images/t03.png" /></span>
        	<input type='submit' value='删除' id='duoshan' />
        </li>
        <li><span><img src="__PUBLIC__/Hou/images/t04.png" /></span>统计</li>
        </ul>
        
        
        <ul class="toolbar1">
        <li><span><img src="__PUBLIC__/Hou/images/t05.png" /></span>设置</li>
        </ul>
    
    </div>
    
    
    <table class="imgtable">
    
    <thead>
    <tr>
    <th>
    	<input type='checkbox' name='checks' />
    </th>
    <th width="100px;">头像</th>
    <th>编号</th>
    <th>姓名</th>
    <th>城市</th>
    <th>公司</th>
    <th>在职状态</th>
    <th>在职岗位</th>
    <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
    <td>
    	<input type='checkbox' name='check[]' value="<?php echo ($vo["s_id"]); ?>" />
    </td>
    <td>
    	<img src="__PUBLIC__/Images/suo/thumb_<?php echo ($vo["s_img"]); ?>" width='50px' />
    </td>
    <td><?php echo ($vo["s_id"]); ?></td>
    <td><?php echo ($vo["s_name"]); ?></td>
    <td><?php echo ($vo["s_city"]); ?></td>
    <td><?php echo ($vo["s_company"]); ?></td>
    <td><?php echo ($vo["s_now"]); ?></td>
    <td><?php echo ($vo["s_gangwei"]); ?></td>
    <td>
    	<a href='__URL__/update/id/<?php echo ($vo["s_id"]); ?>'>修改</a>&nbsp;&nbsp;
    	<a href='__URL__/see/id/<?php echo ($vo["s_id"]); ?>'>&gt;&gt;更多</a>
    </td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
    </table>
    </form>
    <div class="pagin">
        <ul>
        <li><center><?php echo ($page); ?></center></li>
        </ul>
    </div>
    <center>
    	<form action='' method='get'>
    		学生:<input type='text' name='sname' class="dfinput" style="width:50px;height:25px" />&nbsp;&nbsp;&nbsp;&nbsp;
    		城市:<select name='city'  >
    			<option value='a'>--请选择--</option>
    			<?php if(is_array($city)): $i = 0; $__LIST__ = $city;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo["s_city"]); ?>'><?php echo ($vo["s_city"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
    		</select>&nbsp;&nbsp;&nbsp;&nbsp;
    		公司:<select name='company'  >
    			<option value='a'>--请选择--</option>
    			<?php if(is_array($company)): $i = 0; $__LIST__ = $company;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo["s_company"]); ?>'><?php echo ($vo["s_company"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
    		</select>&nbsp;&nbsp;&nbsp;&nbsp;
    		<input type='submit' name='jiansuo'  value='检索' />
    	</form>
    </center>
    
<script type="text/javascript">
	$('.imgtable tbody tr:odd').addClass('odd');
</script>
<script type='text/javascript'>
	$('option').click(
		function(){
			var $grade=this.value;
			$.get('__URL__/clas',{grade:$grade},
				function(data){
				$('#banji').html(data);
			}		
			);
		}		
	);
</script>
<script src="__PUBLIC__/Hou/js/duoxuan.js" type='text/javascript'></script>   
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>