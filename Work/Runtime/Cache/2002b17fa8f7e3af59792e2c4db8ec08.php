<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBLIC__/Hou/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="__PUBLIC__/Hou/js/jquery.js"></script>
<script type="text/javascript">
$(function(){	
	//顶部导航切换
	$(".nav li a").click(function(){
		$(".nav li a.selected").removeClass("selected")
		$(this).addClass("selected");
	})	
})	
</script>


</head>

<body style="background:url(__PUBLIC__/Hou/images/topbg.gif) repeat-x;">

    <div class="topleft">
    <a href="main.html" target="_parent"><img src="__PUBLIC__/Hou/images/logo.png" title="系统首页" /></a>
    </div>
        
    <ul class="nav">
		
    </ul>
            
    <div class="topright">    
    <ul>
    <li><span><img src="__PUBLIC__/Hou/images/help.png" title="帮助"  class="helpimg"/></span><a href="#"></a></li>
     <li><a href="__URL__/tuichu" target="_parent">安全退出</a></li>
   <li></li>
   <li></li>
   <li></li>
    </ul>
     
    <div class="user" style="width:300px">
    <span><?php echo ($uname); ?></span>
    <i>级别</i>
    <b style="width:60px"><?php echo ($jb); ?></b>
    </div>    
    
    </div>

<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>