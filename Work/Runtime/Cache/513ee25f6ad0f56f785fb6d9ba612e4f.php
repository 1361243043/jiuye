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
        	<input type='submit' value='删除' id='duoshan' >
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
    <th>招聘公司</th>
    <th>人数</th>
    <th>悬赏</th>
    <th>招聘介绍</th>
    <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
    <td>
    	<input type='checkbox' name='check[]' value="<?php echo ($vo["i_id"]); ?>" />
    </td>
    <td><?php echo ($vo["i_id"]); ?></td>
    <td><?php echo ($vo["i_name"]); ?></td>
    <td><?php echo ($vo["i_num"]); ?></td>
    <td><?php echo ($vo["i_reward"]); ?></td>
    <td><?php echo ($vo["i_into"]); ?></td>
    <td>
    	<a href='__URL__/see/id/<?php echo ($vo["i_id"]); ?>'>&gt;&gt;更多</a>
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
    	企业:<select name='iname'>
    		<option value=a>--请选择--</option>
    		<?php if(is_array($gongsi)): $i = 0; $__LIST__ = $gongsi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo["i_name"]); ?>'><?php echo ($vo["i_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
    	</select>&nbsp;&nbsp;&nbsp;&nbsp;
    	悬赏:<select name='rname'>
    		<option value=a>--请选择--</option>
    		<?php if(is_array($shifou)): $i = 0; $__LIST__ = $shifou;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo["i_reward"]); ?>'><?php echo ($vo["i_reward"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
    	</select>&nbsp;&nbsp;&nbsp;&nbsp;
    	人数<select name='num'>
    		<option value=a>--请选择--</option>
    		<?php if(is_array($reshu)): $i = 0; $__LIST__ = $reshu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo["i_num"]); ?>'><?php echo ($vo["i_num"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>									
    	</select>
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