<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>会员登录</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="/favicon.ico" />
<meta name="author" content="临沂信息港人才网" />
<meta name="copyright" content="job.ly169.cn" />
<link href="__PUBLIC__/Qian/templates/default/css/user.css" rel="stylesheet" type="text/css" />
<script src="__PUBLIC__/Qian/templates/default/js/jquery.js" type='text/javascript' language="javascript"></script>
<script type="text/javascript">
$(document).ready(function()
{
//
$("#username").focus(function(){
	if ($("#username").val()=="用户名/邮箱/手机号")
	{
	$("#username").val('');
	$("#username").css("color","");
	}  
});
$("#passwordtxt").focus(function(){
	$("#passwordtxt").hide();
	$("#password").show();
	$('#password').trigger("focus");
});
//
$(".but-login").hover(function(){$(this).addClass("but-login-hover")},function(){$(this).removeClass("but-login-hover")});
//验证
$("form[id=Formlogin]").submit(function(e) {
e.preventDefault();
	if ($("#username").val()=="" || $("#username").val()=="用户名/邮箱/手机号")
	{			
		$(".login_err").html("请填写：用户名 / 邮箱 / 手机号");	
		$(".login_err").show();
	}
	else if($("#password").val()=="")
	{	
	$(".login_err").html("请填写密码！");
	$(".login_err").show();
	}
		else
	{
		$("#reg").hide();
		$("#waiting").show();
		 if($("#expire").attr("checked")==true)
		 {
		 var expire=$("#expire").val();
		 }
		 else
		 {
		 var expire="";
		 }
		$.post("/plus/ajax_user.php", {"username": $("#username").val(),"password": $("#password").val(),"expire":expire,"url":"","postcaptcha":$("#postcaptcha").val(),"time": new Date().getTime(),"act":"do_login"},
	 	function (data,textStatus)
	 	 {
			if (data=="err" || data=="errcaptcha")
			{			
				$("#reg").show();
				$("#waiting").hide();
				$("#password").attr("value","");
				$(".login_err").show();	
				if (data=="err")
				{
				errinfo="帐号或者密码错误";
				}
				else if(data=="errcaptcha")
				{
				$("#imgdiv img").attr("src",$("#imgdiv img").attr("src")+"1");
				errinfo="验证码错误";
				}
				$(".login_err").html(errinfo);
			}
			else
			{
				$("body").append(data);
			}
	 	 })		
	}
	return false;
});
//
//验证码部分
//
});
</script>
</head>
<body>
<div class="head_top">
	<div class="head_top_box">
			<div class="head_top_box_left link_lan"><span id="top_loginform"></span></div>
			<div class="head_top_box_right link_bk">
			<div class="lia t_so" id="t_so">
搜索
<div class="op_search" id="op_search"> 
	<div class="stit" ><div>搜索</div></div>
	<div class="sform">
	<form action="" method="get" name="topsearch">
	  <input name="key" type="text" id="top-search-key" class="key"/>
	  <div class="sutleft">
	  <input type="button" value="搜职位" class="but70 top-search-button"  id="QS_jobslist"/>
	  </div>
	  <div class="sutright">
	  <input type="button" value="搜简历" class="but70 top-search-button" id="QS_resumelist"/>
	   </div>	   
	   <div class="clear"></div>
	   </form>
	</div>
</div>
</div>
<a href="/wap/"  class="lia t_m">手机频道</a>
<a href="http://job.ly169.cn/help/" class="lia">帮助</a>
<a href="/" class="lia">网站首页</a>
<a href="/plus/shortcut.php" style="color:#FF3300" class="lia">保存到桌面</a>
<script type="text/javascript">
//顶部部登录
$.get("/plus/ajax_user.php", {"act":"top_loginform"},
function (data,textStatus)
{			
$("#top_loginform").html(data);
}
);
//
var headHeight=$(".header").height()+10;
    var nav=$(".nav");
    $(window).scroll(function(){
        if($(this).scrollTop()>headHeight){
            nav.addClass("navFix");
            }
        else{
            nav.removeClass("navFix");
            }
});
//
$("#t_so").hover(
function(){
$("#t_so").css("position","relative");
$("#op_search").show();
},
function(){
$("#op_search").hide();
$("#t_so").css("position","");	
}
);
$(".top-search-button").click(function()
{
	$("body").append('<div id="pageloadingbox">页面加载中....</div><div id="pageloadingbg"></div>');
	$("#pageloadingbg").css("opacity", 0.5);
	$.get("/plus/ajax_search_location.php", {"act":$(this).attr('id'),"key":$("#top-search-key").val()},
			function (data,textStatus)
			 {
				 window.location.href=data;
			 }
		);
});
</script>			</div>
			<div class="clear"></div>
	</div>
</div>
<div class="head">
	<div class="head_logo">
		<a href="/"><img src="/data/images/logo.gif" alt="临沂信息港人才网" border="0" align="absmiddle" /></a>
	</div>
	<div class="head_logo_right">
	<div class="city"> </div>
			</div>
	<div class="clear"></div>
</div><div class="login-box">
  <div class="leftimg"></div>  
  <div class="rightbox">
  <form id="Formlogin" name="Formlogin" method="post">
    <div class="tit">欢迎登录</div>	
	<div class="tit-right link_lan"><a href="/user/user_reg.php?act=form&type=2">个人注册</a> | <a href="/user/user_reg.php?act=form&type=1">企业注册</a></div>
	<div class="clear"></div>
	<div class="login_err"></div>
	    <div class="input-box">
		<input name="username" type="text"  class="txtinput input-img-user" id="username"   maxlength="30" value="用户名/邮箱/手机号" style="color:#999999"/>
	</div>
	<div class="input-box">
		<input name="passwordtxt" type="text"  class="txtinput input-img-pwd" id="passwordtxt"   maxlength="30" value="密码" style="color:#999999"/>
		<input name="password" type="password"  class="txtinput input-img-pwd" id="password"   maxlength="30" value=""  style="display:none" />
	</div>
		<div class="expire">
		<label><input type="checkbox" name="expire" id="expire" value="7" />一周内自动登录</label>
	</div>
	<div class="expire-right link_lan">
	<a href="/user/user_getpass.php">忘记密码？</a>
	</div>
	<div class="clear"></div>
	<div class="input-box" id="reg">
		<input type="submit" name="submitlogin"  id="login" class="but-login" value="登 录" />
	</div>
	<div class="input-box-waiting" id="waiting">
		正在登录中...
	</div>
	    <div class="input-box" style="height:30px;">
	或者你也可以用以下网站帐号登录
	</div>
	<div class="input-box">
						<div class="login_connectbox">
			<a href="/user/connect_qq_client.php" ><img src="/templates/default/images/75.gif" align="absmiddle" title="用qq帐号登录"  border="0"/></a>
			</div>
												<div class="clear"></div>
	</div>
		</form>
  </div>
  <div class="clear"></div>
</div>
<div class="footer-main">
  <div class="footer-bd clearfix">
    <div class="footer">
      <p class="ft-nav"><a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://job.ly169.cn');" href="javascript:">设为首页</a>&nbsp;|&nbsp;<a href="javascript:" onclick="window.external.addFavorite(parent.location.href,document.title);">加入收藏</a> &nbsp;|&nbsp;<a href="http://job.ly169.cn/explain/explain-show.php?id=1" target="_blank">联系我们</a>&nbsp;|&nbsp;<a href="http://job.ly169.cn/explain/explain-show.php?id=2" target="_blank">隐私声明</a>&nbsp;|&nbsp;<a href="http://job.ly169.cn/explain/explain-show.php?id=3" target="_blank">免责声明</a>&nbsp;|&nbsp;<a href="http://job.ly169.cn/explain/explain-show.php?id=4" target="_blank">会员协议</a>&nbsp;|&nbsp;<a href="http://job.ly169.cn/explain/explain-show.php?id=5" target="_blank">付款方式</a>&nbsp;|&nbsp;<a href="http://job.ly169.cn/hrtools/hrtools-list.php">人才工具箱</a>&nbsp;&nbsp;<span>客服QQ：<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2796581737&amp;site=qq&amp;menu=yes" class="qq" target="_blank">2796581737</a></span></p>
      <div class="copyright">广告热线：0539-8123960&nbsp;&nbsp;商务合作：0539-8901877&nbsp;&nbsp;技术服务：0539-8907877<br />    本站信息均由求职者、招聘者自由发布，不承担因内容的合法性及真实性所引起的一切争议和法律责任<br />Copyright &copy; Ly169.cn All RightsReserved&nbsp;版权所有 中国联合网络通信有限公司临沂市分公司　<a href="http://www.ly169.cn">临沂信息港</a><br /><a href="http://www.miibeian.gov.cn/">鲁ICP备08108228号</a>&nbsp;增值电信业务经营许可证编号：<a href="http://www.ly169.cn/xkzh.html">A2.B1.B2-20090003</a>&nbsp;原联通网络文化经营许可证：<a href="http://www.ly169.cn/xkzh2.html">文网文[2003]0068号</a>&nbsp;<br />
        <a href="http://www.miibeian.gov.cn/" target="_blank" class="underline"> </a> 
		 </div>
    </div>    
  </div>
</div>
</body>
</html>