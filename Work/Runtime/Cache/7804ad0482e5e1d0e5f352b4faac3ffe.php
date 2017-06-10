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
    <th>用户名称</th>
    <th>会员类型</th>
    <th>注册时间</th>
    <th>到期时间</th>
    <th>联系方式</th>
    <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
    <td>
    	<input type='checkbox' name='check[]' value="<?php echo ($vo["m_id"]); ?>" />
    </td>
    <td><?php echo ($vo["m_id"]); ?></td>
    <td><?php echo ($vo["m_name"]); ?></td>
    <td><?php echo ($vo["mt_name"]); ?></td>
    <td><?php echo ($vo["m_timestart"]); ?></td>
    <td><?php echo ($vo["m_timeend"]); ?></td>
    <td><?php echo ($vo["m_tel"]); ?></td>
    <td>
    	<img src="__PUBLIC__/Hou/images/t02.png" width='10px' />
    	<a href='__URL__/update/id/<?php echo ($vo["m_id"]); ?>'>修改</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
    	<a href='__URL__/see/id/<?php echo ($vo["m_id"]); ?>'>更多>></a>
    </td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
    </table>
    </form>
    <ul >
    	<li><center><?php echo ($page); ?></center></li>
    </ul>
    <center>
    	<form action='' method='get'>
    		会员名:<input type='text' name='mname' class="dfinput" style="width:200px;height:20px" />
    		<input type='submit' name='jiansuo' value='检索' />
    	</form>
    </center>
      
    <div class="tip">
    	<div class="tiptop"><span>提示信息</span><a></a></div>
        
      <div class="tipinfo">
        <span><img src="__PUBLIC__/Hou/images/ticon.png" /></span>
        <div class="tipright">
        <p>是否确认对信息的修改 ？</p>
        <cite>如果是请点击确定按钮 ，否则请点取消。</cite>
        </div>
        </div>
        
        <div class="tipbtn">
        <input name="" type="button"  class="sure" value="确定" />&nbsp;
        <input name="" type="button"  class="cancel" value="取消" />
        </div>
    
    </div>
    
    
    
    
    </div>
    
    <div class="tip">
    	<div class="tiptop"><span>提示信息</span><a></a></div>
        
      <div class="tipinfo">
        <span><img src="__PUBLIC__/Hou/images/ticon.png" /></span>
        <div class="tipright">
        <p>是否确认对信息的修改 ？</p>
        <cite>如果是请点击确定按钮 ，否则请点取消。</cite>
        </div>
        </div>
        
        <div class="tipbtn">
        <input name="" type="button"  class="sure" value="确定" />&nbsp;
        <input name="" type="button"  class="cancel" value="取消" />
        </div>
    
    </div>
    
<script type="text/javascript">
	$('.imgtable tbody tr:odd').addClass('odd');
	</script>
<script src="__PUBLIC__/Hou/js/duoxuan.js" type='text/javascript'></script> 
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body> 
</html>