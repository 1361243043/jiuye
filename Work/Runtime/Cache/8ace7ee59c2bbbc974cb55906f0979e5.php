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
    <li><label>学生</label><input name="s_name" type="text" value="<?php echo ($data["s_name"]); ?>" class="dfinput" /><i></i></li>
    <li><label>性别 </label>
    	
    <?php if($sex == '男'): ?>男<input name="s_sex" type="radio" value='男' checked='checked' />
    	女<input name="s_sex" type="radio" value='女' />
    <?php else: ?>
    	男<input name="s_sex" type="radio" value='男'  />
    	女<input name="s_sex" type="radio" value='女' checked='checked' /><?php endif; ?>
    
    
    
    <i></i></li>
    <li><label>出生日期</label><input name="s_bir" type="text" value="<?php echo ($data["s_bir"]); ?>" class="dfinput" /><i>格式必须为1994/10/23</i></li>
    <li><label>手机号</label><input name="s_tel" type="text" value="<?php echo ($data["s_tel"]); ?>" class="dfinput" /><i></i></li>
    <li><label>qq号</label><input name="s_qq" type="text" value="<?php echo ($data["s_qq"]); ?>" class="dfinput" /><i></i></li>
    <li><label>头像</label>
    <img src='__PUBLIC__/Images/<?php echo ($data["s_img"]); ?>' width='50px' />
    <input name="files" type="file" class="dfinput" /><i></i></li>
    <li><label>身份证号</label><input name="s_zj" type="text" value="<?php echo ($data["s_zj"]); ?>" class="dfinput" /><i></i></li>
    <li><label>年级</label><input name="g_id" type="text" value="<?php echo ($data["g_id"]); ?>" class="dfinput" /><i></i></li>
    <li><label>班级</label><?php echo ($data["c_name"]); ?>
    <select name='c_id'>
    	<option value="<?php echo ($data["c_id"]); ?>">--请选择--</option>
    	<?php if(is_array($class)): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["c_id"]); ?>"><?php echo ($vo["c_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
    </select>
    <i></i></li>
    <li><label>邮箱</label><input name="s_mil" type="text" value="<?php echo ($data["s_mil"]); ?>" class="dfinput" /><i>格式必须为123@qq.com</i></li>
    <li><label>&nbsp;</label><input name="sub" type="submit" class="btn" value="确认修改"/></li>
    </ul>
    </form>
    
    </div>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>