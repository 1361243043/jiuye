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
    <li><label>就业生</label><input name="s_name" type="text" value="<?php echo ($data["s_name"]); ?>" class="dfinput" /><i></i></li>
    <li><label>就业城市</label><input name="s_city" type="text" value="<?php echo ($data["s_city"]); ?>" class="dfinput" /><i></i></li>
    <li><label>就业公司</label><input name="s_company" type="text" value="<?php echo ($data["s_company"]); ?>" class="dfinput" /><i></i></li>
    <li><label>福利</label><input name="s_requite" type="text" value="<?php echo ($data["s_requite"]); ?>" class="dfinput" /><i></i></li>
    <li><label>就业照片</label>
    <img src='__PUBLIC__/Images/<?php echo ($data["s_img"]); ?>' width='50px' />
    <input name="files" type="file" class="dfinput" /><i></i></li>
    <li><label>就业时间</label><input name="s_time" type="text" value="<?php echo ($data["s_time"]); ?>" class="dfinput" /><i>格式必须为1994/10/23</i></li>
    <li><label>在职状态</label><input name="s_now" type="text" value="<?php echo ($data["s_now"]); ?>" class="dfinput" /><i></i></li>
    <li><label>工资待遇</label><input name="s_money" type="text" value="<?php echo ($data["s_money"]); ?>" class="dfinput" /><i></i></li>
    <li><label>工作历程</label><input name="s_progerss" type="text" value="<?php echo ($data["s_progerss"]); ?>" class="dfinput" /><i></i></li>
    <li><label>在职岗位</label><input name="s_gangwei" type="text" value="<?php echo ($data["s_gangwei"]); ?>" class="dfinput" /><i></i></li>
    <li><label>求助信号</label><input name="s_help" type="text" value="<?php echo ($data["s_help"]); ?>" class="dfinput" /><i></i></li>
    <li><label>备注</label><input name="s_remarkes" type="text" value="<?php echo ($data["s_remarkes"]); ?>" class="dfinput" /><i></i></li>
    <li><label>&nbsp;</label><input name="sub" type="submit" class="btn" value="确认修改"/></li>
    </ul>
    </form>
    
    </div>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>