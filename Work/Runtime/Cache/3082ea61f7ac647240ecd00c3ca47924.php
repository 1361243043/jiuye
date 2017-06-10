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
    <li><label>名称</label><input name="e_name" type="text" value='<?php echo ($data["e_name"]); ?>' class="dfinput" /><i></i></li>
    <li><label>地址</label><input name="e_add" type="text" value='<?php echo ($data["e_add"]); ?>' class="dfinput" /><i></i></li>
    <li><label>简介</label><input name="e_intro" type="text" value='<?php echo ($data["e_intro"]); ?>' class="dfinput" /><i></i></li>
    <li><label>照片</label>
    	<img src='__PUBLIC__/Images/<?php echo ($data["e_img"]); ?>' width='50px' />
    <input name="files" type="file" class="dfinput" /><i></i></li>
    <li><label>联系方式</label><input name="e_tel" type="text" value='<?php echo ($data["e_tel"]); ?>' class="dfinput" /><i></i></li>
    <li><label>邮箱</label><input name="e_mil" type="text" value='<?php echo ($data["e_mil"]); ?>' class="dfinput" /><i></i></li>
    <li><label>账号</label><input name="e_user" type="text" value='<?php echo ($data["e_user"]); ?>' class="dfinput" /><i></i></li>
    <li><label>密码</label><input name="e_pwd" type="text" value='<?php echo ($data["e_pwd"]); ?>' class="dfinput" /><i></i></li>
    <li><label>&nbsp;</label><input name="sub" type="submit" class="btn" value="确认修改"/></li>
    </ul>
    </form>
    
    </div>


<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>