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
    <th>编号</th>
    <th>捐赠人</th>
    <th>金额</th>
    <th>捐赠对象</th>
    <th>时间</th>
    <th>联系方式</th>
    <th>显示</th>
    <th>备注</th>
    <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
    <td>
    	<input type='checkbox' name='check[]' value="<?php echo ($vo["d_id"]); ?>" />
    </td>
    <td><?php echo ($vo["d_id"]); ?></td>
    <td><?php echo ($vo["d_name"]); ?></td>
    <td><?php echo ($vo["d_money"]); ?></td>
    <td><?php echo ($vo["t_type"]); ?></td>
    <td><?php echo ($vo["d_time"]); ?></td>
    <td><?php echo ($vo["d_tel"]); ?></td>
    <td><?php echo ($vo["d_shifou"]); ?></td>
    <td><?php echo ($vo["d_remarks"]); ?></td>
    <td>
    	<img src="__PUBLIC__/Hou/images/t02.png" width='10px' />
    	<a href='__URL__/update/id/<?php echo ($vo["d_id"]); ?>'>修改</a>
    </td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
    </table>
    </form>
    <div class="pagin" style="display:inline">
        <ul>
        <li><center><?php echo ($page); ?></center></li>
        </ul>
    </div>
   	<center>
    	<form action='' method='post'>
    		捐赠人:<input type='text' name='cname' class="dfinput" style="width:80px;height:20px" />
    		<input type='submit' name='jiansuo' value='检索' />
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