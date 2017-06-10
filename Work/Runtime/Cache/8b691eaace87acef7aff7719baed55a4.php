<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBLIC__/Hou/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">表单</a></li>
    </ul>
    </div>
    
    <div class="formbody">
    
    <div class="formtitle"><span>基本信息</span></div>
    <form action='' method='post' enctype='multipart/form-data'>
    <ul class="forminfo">
    <li><label>捐赠人</label><input name="d_name" type="text" value='<?php echo ($donate["d_name"]); ?>' class="dfinput" /><i></i></li>
    <li><label>捐赠金额</label><input name="d_money" type="text" value='<?php echo ($donate["d_money"]); ?>' class="dfinput" /><i></i></li>
    <li><label>捐赠对象</label>
    <select name='t_id'>
    	<option value='<?php echo ($donate["t_id"]); ?>'>--请选择--</option>
    	<?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo["t_id"]); ?>'
    			<?php if($vo["t_type"] == $donate["t_type"] ): ?>selected='selected'<?php endif; ?>
    		><?php echo ($vo["t_type"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
    </select>
    <i></i></li>
    <li><label>捐赠时间</label><input name="d_time" type="text" value='<?php echo ($donate["d_time"]); ?>' class="dfinput" /><i>格式必须为2015-09-09</i></li>
    <li><label>联系方式</label><input name="d_tel" type="text" value='<?php echo ($donate["d_tel"]); ?>' class="dfinput" /><i></i></li>
    <li><label>显示</label>
    <?php if($donate["d_shifou"] == 1 ): ?>显示<input type='radio' value=1 name='d_shifou' checked='checked' />
    	不显示<input type='radio' value=0 name='d_shifou'> 
    <?php else: ?>
    	显示<input type='radio' value=1 name='d_shifou' >
    	不显示<input type='radio' value=0 name='d_shifou' checked='checked' /><?php endif; ?>
    
    <i></i></li>
    <li><label>备注</label><input name="d_remarks" type="text" value='<?php echo ($donate["d_remarks"]); ?>' class="dfinput" /><i></i></li>
    <li><label>&nbsp;</label><input name="sub" type="submit" class="btn" value="确认修改"/></li>
    </ul>
    </form>
    
    </div>


<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>