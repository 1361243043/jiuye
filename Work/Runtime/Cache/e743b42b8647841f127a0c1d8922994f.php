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
	<div class="lefttop"><span></span>通讯录</div>
    
    <dl class="leftmenu">
        
    <dd>
    <div class="title">
    <span><img src="__PUBLIC__/Hou/images/leftico01.png" /></span>管理信息
    </div>
    	<ul class="menuson">
        <li><cite></cite><a href="__APP__/Class/banji" target="rightFrame" name="jing">班级表</a><i></i></li>
        <li><cite></cite><a href="__APP__/Grade/nianji" target="rightFrame">年级表</a><i></i></li>
   
        <li><cite></cite><a href="__APP__/Member/huiyuan" target="rightFrame">会员表</a><i></i></li>
        <li><cite></cite><a href="__APP__/Membertype/membertype" target="rightFrame">会员类型表</a><i></i></li>
        <li><cite></cite><a href="__APP__/Student/xuesheng" target="rightFrame">学生信息表</a><i></i></li>
        <li><cite></cite><a href="__APP__/Enterprise/qiye" target="rightFrame">企业信息用户表</a><i></i></li>
        <li><cite></cite><a href="__APP__/User/geren" target="rightFrame">个人信息用户表</a><i></i></li>
        <li><cite></cite><a href="__APP__/Advise/jianyi" target="rightFrame">个人建议表</a><i></i></li>
        <li><cite></cite><a href="__APP__/Donate/juanzeng" target="rightFrame">捐赠表</a><i></i></li>
        <li><cite></cite><a href="__APP__/Invite/zhaopin" target="rightFrame">招聘表</a><i></i></li>
        <li><cite></cite><a href="__APP__/Applyjob/qiuzhi" target="rightFrame">求职表</a><i></i></li>
        <li><cite></cite><a href="__APP__/Serve/jiuye" target="rightFrame">就业服务</a><i></i></li>
        </ul>    
    </dd>
    <dd>
    <div class="title">
    <span><img src="__PUBLIC__/Hou/images/leftico02.png" /></span>管理员中心
    </div>
    <ul class="menuson">
        <li><cite></cite><a href="__APP__/Manage/one" target="rightFrame">个人信息</a><i></i></li>
        <li><cite></cite><a href="__APP__/Manage/two" target="rightFrame">其它管理员信息</a><i></i></li>
        </ul>     
    </dd> 
    
    
    
    
    
    
    
    
    </dl>
    
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
<script type="text/javascript">
	$("a").click(
		function(){
			$.get('__URL__/ysession',function(data){
				
				if(data == '<meta http-equiv="content-type" content="text/html; charset=utf-8">1'){
				
				}
				if(data == '<meta http-equiv="content-type" content="text/html; charset=utf-8">2'){
					$("a").attr("href","__URL__/shixiao");
				}
			});
		}
	);
</script>
</body>
</html>