<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改页面</title>
<link href="__PUBLIC__/Hou/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li>首页</li>
    <li>会员表</li>
    <li>修改页面</li>
    </ul>
    </div>
    
    <div class="formbody">
    
    <div class="formtitle"><span>基本信息</span></div>
    <form action='' method='post'>
    <ul class="forminfo">
    <li><label>用户名称</label><input name="m_name" type="text" class="dfinput" value="<?php echo ($date["m_name"]); ?>" /><i></i></li>
    <li><label>会员类型</label>
    	<select name='mt_id'>
    		<?php if(is_array($leixing)): $i = 0; $__LIST__ = $leixing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["mt_id"]); ?>" 
    				<?php if($date["mt_id"] == $vo["mt_id"] ): ?>selected='selected'<?php endif; ?>
    			> <?php echo ($vo["mt_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
    	</select>
    <i></i></li>
    <li><label>注册时间</label><input name="m_timestart" type="text" class="dfinput" value="<?php echo ($date["m_timestart"]); ?>" /><i>时间格式必须为2016-09-04</i></li>
    <li><label>到期时间</label><input name="m_timeend" type="text" class="dfinput" value="<?php echo ($date["m_timeend"]); ?>" /><i>时间格式必须为2016-09-04</i></li>
    <li><label>联系方式</label><input name="m_tel" type="text" class="dfinput" value="<?php echo ($date["m_tel"]); ?>" /><i></i></li>
    <li><label>备注</label>
    	<textarea name='m_remarks'>
    		<?php echo ($date["m_remarks"]); ?>
    	</textarea>
    <i></i></li>
    <li><label>是否审核</label>
    	<?php if($date["m_shifou"] == 1): ?>是<input type='radio' name='m_shifou' value=1 checked='checked' />
    		否<input type='radio' name='m_shifou' value=0 />
    	<?php else: ?>
    		是<input type='radio' name='m_shifou' value=1  />
    		否<input type='radio' name='m_shifou' value=0 checked='checked' /><?php endif; ?>
    <i></i></li>
    <li><label>&nbsp;</label><input name="sub" type="submit" class="btn" value="确认修改"/></li>
    </ul>
    </form>
    
    </div>


<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>