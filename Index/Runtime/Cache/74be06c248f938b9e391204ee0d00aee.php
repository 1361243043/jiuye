<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBLIC__/Hou/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="__PUBLIC__/Hou/js/jquery.js"></script>

<script type="text/javascript">
$(function(){	
	//导航切换
	$(".menuson li").click(function(){
		$(".menuson li.active").removeClass("active")
		$(this).addClass("active");
	});
	
	$('.title').click(function(){
		var $ul = $(this).next('ul');
		$('dd').find('ul').slideUp();
		if($ul.is(':visible')){
			$(this).next('ul').slideUp();
		}else{
			$(this).next('ul').slideDown();
		}
	});
})	
</script>


</head>

<body style="background:#f0f9fd;">
	<div class="lefttop"><span></span>用户管理中心</div>
    
    <dl class="leftmenu">
        
   
    <dd>
    <div class="title">
    <span><img src="__PUBLIC__/Hou/images/leftico02.png" /></span>企业管理中心
    </div>
    <ul class="menuson">
        <li><cite></cite><a href="__APP__/Enterprise/qiye" target="rightFrame">企业信息</a><i></i></li>
        <li><cite></cite><a href="__APP__/Enterprise/zhaopin" target="rightFrame">发布招聘</a><i></i></li>
        <li><cite></cite><a href="__APP__/Enterprise/juanzeng" target="rightFrame">捐赠申请</a><i></i></li>
        <li><cite></cite><a href="__APP__/Enterprise/huiyuan" target="rightFrame">会员申请</a><i></i></li>
        <li><cite></cite><a href="__APP__/Enterprise/jianyi" target="rightFrame">个人建议</a><i></i></li>
        </ul>     
    </dd> 
    <dd>
    <div class="title">
    <span><img src="__PUBLIC__/Hou/images/leftico02.png" /></span>个人管理中心
    </div>
    <ul class="menuson">
        <li><cite></cite><a href="#">编辑内容</a><i></i></li>
        <li><cite></cite><a href="#">发布信息</a><i></i></li>
        <li><cite></cite><a href="#">档案列表显示</a><i></i></li>
        </ul>     
    </dd> 
    
    
   
    

    
    </dl>
    
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>