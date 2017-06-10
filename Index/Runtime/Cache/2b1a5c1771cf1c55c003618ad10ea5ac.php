<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>快速注册 - 临沂信息港人才网</title>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="/favicon.ico" />
<link href="__PUBLIC__/Qian/templates/default/css/global.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/Qian/templates/default/css/list-global.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/Qian/templates/default/css/member-style.css" rel="stylesheet" type="text/css">
<script src="__PUBLIC__/Qian/templates/default/js/jquery.js" type='text/javascript' language="javascript"></script>
<script src="__PUBLIC__/Qian/templates/default/js/jquery.validate.min.js" type='text/javascript' language="javascript"></script>
<script type='text/javascript' src="__PUBLIC__/Qian/templates/default/js/jquery.dialog.js" ></script>
<script type="text/javascript" language="javascript" src="__PUBLIC__/Qian/templates/default/js/autoMail.js"></script>
</head>
<body>
<link href="__PUBLIC__/Qian/templates/default/css/global.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
//顶部部登录
$.get("/plus/ajax_user.php", {"act":"top_loginform"},
function (data,textStatus)
{			
$(".top_loginform").html(data);
}
); 
</script> 
<div class="header">
  <div class="header-bd clearfix">
	<div class="logo">
	<h1><a href="/"><img src="__PUBLIC__/Qian/data/images/logo.gif" alt="临沂信息港人才网" border="0" align="absmiddle" /></a></h1>
      <h2></h2>
    </div>
 <div class="head-btn"> <a href="__APP__/Oneman/qiuzhi" class="per-reg" title="免费登记求职"><span>1</span><em>免费登记求职</em></a> <a href="__APP__/Enterprise/zhaopin" class="com-reg" title="免费发布招聘"><span>1</span><em>免费发布招聘</em></a> </div>  </div>
</div>
<div class="nav-main">
  <div class="nav-bd">
  	     <ul>		<li><a href="__APP__/Index/index/id/1" target="_self" id="cur"><span>首  页</span></a></li>		<li><a href="__APP__/Job/job" target="_blank" ><span>找工作</span></a></li>		<li><a href="__APP__/Pinren/pin" target="_blank" ><span>聘人才</span></a></li>		<li><a href="__APP__/Donate/juanzeng" target="_self" ><span>捐赠</span></a></li>		<li><a href="__APP__/Serve/jiuye" target="_self" ><span>就业服务</span></a></li>		<li><a href="http://job.ly169.cn/news/" target="_self" ><span>新闻资讯</span></a></li>		<li><a href="__APP__/User/user" target="_blank" ><span>用户中心</span></a></li>		<li><a href="" target="_blank" ><span>微招聘</span></a></li>      </ul>
  </div>
</div><div class="container">
  <div class="reg-warp clearfix shadow">
    <h4 class="tit-per" title="简单4步，轻松聘人才！"></h4>
    <form  method="post" action="" enctype="multipart/form-data">
      <input name="member_type" type="hidden" id="member_type" value="2" />
	   <div class="reg-box">
        <dl>
           <dt>用户类型：</dt>
		                       <dd><strong>企业用户注册</strong><span>（切换至 <a href="__URL__/geren">个人用户</a> 注册）</span></dd>
		                     
                     <dt>用户账号：</dt>
          <dd>
            <input name="e_user" id="username" value=""  type="text" class="input-1" autocomplete="off" size="28" />
           <br/>
           <span style="color:#f00">请以q开头 填写手机号</span>
          </dd>
          <dt>登录密码：</dt>
          <dd>
            <input name="e_pwd" id="password" value="" type="password" onBlur="AuthPasswd(this.value);" onKeyUp="AuthPasswd(this.value);" class="input-1" size="28" />
            <br/>
            <span style="color:#f00;">密码请填写8位数</span>
          </dd>
          </dd>
           <dd class="psw-dd clearfix">
            <p class="mima_qd" id="password1_strength"> <span class="mm_strength"><em>密码强度</em>：<i class="password_qd"><span class="password_bg"
                                id="strength_L">&nbsp;</span><span class="password_bg" id="strength_M">&nbsp;</span><span
                                    class="password_bg none" id="strength_H">&nbsp;</span></i><em id="pw_check_info"></em></span> </p>
          </dd>
          
          <dt>重复密码：</dt>
          <dd>
            <input name="epwd" id="password2" value="" type="password" class="input-1" size="28" />
            <br/>
            <span style="color:#f00;">密码请填写8位数</span>
          </dd>
          
           <dt>联系方式：</dt>
          <dd>
            <input name="e_tel" id="password" value="" type="text" onBlur="AuthPasswd(this.value);" onKeyUp="AuthPasswd(this.value);" class="input-1" size="28" />
          </dd>
          
           <dt>企业邮箱：</dt>
          <dd>
            <input name="e_mil" id="password" value="" type="text"  class="input-1" size="28" />
          </dd>
          
           <dt>企业图片：</dt>
          <dd>
            <input name="files" id="password" value="" type="file" onBlur="AuthPasswd(this.value);" onKeyUp="AuthPasswd(this.value);" class="input-1" size="28" />
          </dd>
          
          <dt>企业名称：</dt>
          <dd>
            <input name="e_name" id="password" value="" type="text" onBlur="AuthPasswd(this.value);" onKeyUp="AuthPasswd(this.value);" class="input-1" size="28" />
          </dd>
          
           <dt>企业地址：</dt>
          <dd>
            <textarea name="e_add" id="companyprofile"   style="width:350px; height:90px;line-height:160%; font-size:12px"  onpropertychange="if(this.value.length>200){this.value=this.value.slice(0,200)}">
                	
                </textarea>
          </dd>
          
           <dt>企业简介：</dt>
          <dd>
            <textarea name="e_intro" id="companyprofile"   style="width:350px; height:90px;line-height:160%; font-size:12px"  onpropertychange="if(this.value.length>200){this.value=this.value.slice(0,200)}">
                	
                </textarea>
          </dd>
          
                    <dt>认证码：</dt>
          <dd>
            <input name="yanma" id="postcaptcha" type="text" class="input-1" value="" size="10" style="width:100px"  />
            <a href="#" title="点击更换验证码"><img src="__APP__/Public/ver/" id="imgsrc" alt="点击更换验证码"/></a></dd>
					    <dt>&nbsp;</dt>
          <dd>
            <label>
            <span class="agree"><a id="btnAgreeContent" href="javascript:void(0)">《临沂信息港人才网用户注册协议》</a></span>
            <div id="agreeContent" style="display: none;">
              <div style=" width:570px; height: 350px; overflow-y: scroll; line-height: 22px;  margin-bottom: 10px;">
<h3>临沂信息港人才网会员协议 </h3>
　　临沂信息港人才网，仅提供求职、招聘、培训信息发布及其他与此相关联之服务。求职者、招聘单位以及因其他任何目的进入本网站的访问者接受本协议书条款，注册成为企业会员，并遵守本协议所述之条款使用本网站所提供之服务。如果你不接受本声明之条款，请勿使用本网站。接受本声明之条款，你将遵守本协议之规定。&nbsp; <h4 class="font14b">1.信息的发布</h4>
　　不得发布任何违反有关法律规定信息；<br />
　　不得发布任何与本网站求职、招聘、培训目的不适之信息；<br />
　　不得发布任何不完整、虚假的信息；<br />
　　用户对所发布的任何信息承担全部法律责任。 <br />
<h4 class="font14b">2.信息的使用</h4>
　　招聘单位仅可就招聘目的使用求职者之简历信息；<br />
　　求职者仅可因应聘某职位，使用招聘单位发布之招聘信息；<br />
　　本网站提供的其他信息，仅与其相应内容有关的目的而被使用；<br />
　　不得将任何本网站的信息用作任何商业目的。 <br />
<h4 class="font14b">3.信息的公开</h4>
　　临沂信息港人才网所登录的任何信息，均有可能被任何本网站的访问者浏览，也可能被错误使用。本网站对此将不予承担任何责任。 <br />
<h4 class="font14b">4.信息的准确性</h4>
　　任何在本网站发布的信息，均必须符合合法、准确、及时、完整的原则。但本网站将不能保证所有由第三方提供的信息，或本网站自行采集的信息完全准确。使用者了解，对这些信息的使用，需要经过进一步核实。本网站对访问者未经自行核实误用本网站信息造成的任何损失不予承担任何责任。 <br />
<h4 class="font14b">5.信息更改与删除</h4>
　　除了信息的发布者外，任何访问者不得更改或删除他人发布的任何信息。本网站有权根据其判断保留修改或删除任何不适信息之权利。 <br />
<h4 class="font14b">6.版权、商标权</h4>
　　本网站的图形、图像、文字及其程序等均属临沂信息港人才网之版权，受商标法及相关知识产权法律保护，未经临沂信息港人才网书面许可，任何人不得下载、复制、再使用。在本网发布信息之商标，归其相应的商标所有权人，受商标法保护。 <br />
<h4 class="font14b">7、注册信息使用</h4>
　　注册会员所提供的个人资料将会被临沂信息港人才网统计、汇总，在我们的严格管理下，为临沂信息港人才网的广告商及合作者提供依据。临沂信息港人才网会不定期地通过注册会员留下的电子邮件同该会员保持联系。&nbsp; <br />
　　临沂信息港人才网承诺：在未经访问者授权同意的情况下，临沂信息港人才网不会将访问者的个人资料泄露给第三方。但以下情况除外。<br />
　　1 ) 根据执法单位之要求或为公共之目的向相关单位提供个人资料；<br />
　　2 ) 由于你将用户密码告知他人或与他人共享注册帐户，由此导致的任何个人资料泄露；<br />
　　3 ) 由于计算机2000年问题、黑客攻击、计算机病毒侵入或发作、因政府管制而造成的暂时性关闭等影响网络正常经营之不可抗力而造成的个人资料泄露、丢失、被盗用或被窜改等；&nbsp;<br />
　　4 ) 由于与临沂信息港人才网链接的其他网站所造成之个人资料泄露及由此而导致的任何法律争议和后果；<br />
　　5 ) 为免除访问者在生命、身体或财产方面之急迫危险。 <br />
<h4 class="font14b">8.自责</h4>
　　所有使用本网站的用户，对使用本网站信息和在本网站发布信息的被使用，承担完全法律责任。本网站对任何因使用本网站而产生的第三方之间的纠纷，不负任何责任。 <br />
<h4 class="font14b">9.服务终止</h4>
　　本网站有权在预先通知或不予通知的情况下终止任何免费服务。 <br />
<h4 class="font14b">10.争议处理</h4>
　　本网站因正常的系统维护、系统升级，或者因网络拥塞而导致网站不能访问，本网站不承担任何责任。 <br />
<h4 class="font14b">11.免责条款</h4>
　　本网并无随时监视此网址，但保留对其实施实时监视的权利。对于他方输入的，不是本网发布的材料，本网概不负任何法律责任。应聘信息发布方必须对其存入简历中心的个人简历及材料的格式、内容的准确性和合法性独立承担一切法律责任。招聘信息的发布方对其在职位数据库公布的材料独立承担一切法律责任。 <br />
　　本网不保证对某一种职位描述会有一定数目的使用者来浏览，也不保证会有一位特定的使用者来浏览。对于其他网址链接在本网址的内容，本网概不负法律责任。
                </div>
            </div>
            </label>
          </dd>
          <dd>
            <input name="sub"  type="submit" value="立即注册" class="submit-1" />
        </dl>
      </div>
    </form>
   
    <div style="height:20px" class="clear"></div>
  </div>
</div>
<script type="text/javascript">
 //验证
$(document).ready(function() {
	$('#email').autoMail({
		emails:['qq.com','163.com','vip.163.com','126.com','sina.com','sohu.com','yahoo.cn','gmail.com','hotmail.com','139.cn','188.com','21cn.com','live.cn']
	});
 $("#Form1").validate({
//debug: true,
// onsubmit:false,
//onfocusout :true,
submitHandler:function(form){
		$("#reg").hide();
		$("#waiting").show();
		var tsTimeStamp= new Date().getTime();
		$.post("/plus/ajax_user.php", { "username": $("#username").val(),"password": $("#password").val(),"member_type": $("#member_type").val(),"email":$("#email").val(),"postcaptcha": $("#postcaptcha").val(),"time":tsTimeStamp,"act":"do_reg"},
	 	function (data,textStatus)
	 	 {
			if (data=="err")
			{
			$("#waiting").hide();
			$("#reg").show();
			$("#username").attr("value","");
			$("#email").attr("value","");
			alert("注册失败");
			}
			else
			{  
				$("body").append(data);
			}
	 	 })
//$(form).ajaxSubmit();
},
success: function(label) {
				label.text(" ").addClass("success");
			},
   rules:{
   username:{
    required: true,
	userName : true,
	nomobile : true,
	byteRangeLength : [3, 18],
	remote:{     
		url:"/plus/ajax_user.php",     
		type:"post",    
		data:{"usname":function (){return $("#username").val()},"act":"check_usname","time":function (){return new Date().getTime()}}     
		}
   },
   email:{
    required: true,
	email:true,
	remote:{     
		url:"/plus/ajax_user.php",     
		type:"post",    
		data:{"email":function (){return $("#email").val()},"act":"check_email","time": new Date().getTime()}     
		}
   },
       postcaptcha:{
	IScaptchastr:true,
    required: true,
	remote:{     
	url:"/include/imagecaptcha.php",     
	type:"post",    
	data:{"postcaptcha":function (){return $("#postcaptcha").val()},"act":"verify","time":function (){return new Date().getTime()}}     
	}
   },
      password:{
    required: true,
	minlength:6,
    maxlength:18
   },
   password2:{
   required: true,
	 equalTo:"#password"
   }
	},
    messages: {
    username: {
    required: "请填写用户名",
	remote: jQuery.format("用户名已经存在或者不合法")	
   },
    email: {
    required: "请填写电子邮箱",
	email: jQuery.format("电子邮箱格式错误"),
	remote: jQuery.format("email已经存在")	
   },
        postcaptcha: {
    required: "请填写验证码",
	remote: jQuery.format("验证码错误")	
   },
       password: { 
    required: "请填写密码",
    minlength: jQuery.format("填写不能小于{0}个字符"),
	maxlength: jQuery.format("填写不能大于{0}个字符")
   },
   password2: {
   required: "请填写密码",
    equalTo: "两次输入的密码不同"
   }
  },
  errorPlacement: function(error, element) {
    if ( element.is(":radio") )
        error.appendTo( element.parent().next().next() );
    else if ( element.is(":checkbox") )
        error.appendTo ( element.next());
    else
        error.appendTo(element.parent());
	}
    });
	 //中文字两个字节
	jQuery.validator.addMethod("byteRangeLength", function(value, element,	param) {
	var length = value.length;
	for (var i = 0; i < value.length; i++) {
			if (value.charCodeAt(i) > 127) {
			length++;
			}
		}
	return this.optional(element)	|| (length >= param[0] && length <= param[1]);
	}, "确保的值在3-18个字节之间(1个中文字算2个字节)");
	 //字符验证
	jQuery.validator.addMethod("userName", function(value, element) {
	return this.optional(element) || /^[\u0391-\uFFE5\w]+$/.test(value);
	}, "用户名只能包括中文、英文字母、数字和下划线");
	jQuery.validator.addMethod("nomobile", function(value, element) { 
    var tel = /^(13|15|18)\d{9}$/;
	var $cstr= true;
	if (tel.test(value)) $cstr= false;
	return $cstr || this.optional(element); 
}, "用户名不能是手机号");
	jQuery.validator.addMethod("IScaptchastr", function(value, element) {
	var str="点击获取验证码";
	var flag=true;
	if (str==value)
	{
	flag=false;
	}
	return  flag || this.optional(element) ;
	}, "请填写验证码");
/////验证码部分
function imgcaptcha(inputID,imgdiv)
{  
		$("#imgclick").click(function()
		{
			$("#imgsrc").attr("src",$("#imgsrc").attr("src")+"1");
			$(inputID).val("");
			$("#Form1").validate().element("#postcaptcha");	
		});  
		$("#imgsrc").click(function()
		{
			$("#imgsrc").attr("src",$("#imgsrc").attr("src")+"1");
			$(inputID).val("");
			$("#Form1").validate().element("#postcaptcha");	
		});  
} 
imgcaptcha("#postcaptcha","#imgdiv");
//验证码结束
});   
$('#btnAgreeContent').click(function () {   
		    var txt=$('#agreeContent').html(); 
			dialog("用户服务协议","text:"+txt,"600px","auto",""); 
        }); 
		//pwd
function AuthPasswd(string) {  
    if (string.length >= 6) {
        if (/[a-zA-Z]+/.test(string) && /[0-9]+/.test(string) && /\W+\D+/.test(string)) {
            noticeAssign(1);
        } else if (/[a-zA-Z]+/.test(string) || /[0-9]+/.test(string) || /\W+\D+/.test(string)) {
            if (/[a-zA-Z]+/.test(string) && /[0-9]+/.test(string)) {
                noticeAssign(-1);
            } else if (/\[a-zA-Z]+/.test(string) && /\W+\D+/.test(string)) {
                noticeAssign(-1);
            } else if (/[0-9]+/.test(string) && /\W+\D+/.test(string)) {
                noticeAssign(-1);
            } else {
                noticeAssign(0);
            }
        }
    } else {
        noticeAssign(2);
    }
}
//当用户放开键盘或密码输入框失去焦点时,根据不同的级别显示不同的颜色   
function noticeAssign(num) {
    var O_color = "#eeeeee";
    var L_color = "#FF4040";
    var M_color = "#FF9900";
    var H_color = "#33CC00";
    var info = "";
    switch (num) {
        case 1:
            Lcolor = Mcolor = Hcolor = H_color;
            info = "强";
            break;
        case 0:
            Lcolor = L_color;
            Mcolor = Hcolor = O_color;
            info = "弱";
            break;
        case -1:
            Lcolor = Mcolor = M_color;
            Hcolor = O_color;
            info = "中";
            break;
        default:
            Mcolor = Hcolor = Lcolor = O_color
            info = "";
    }
    $("#strength_L").css("background", Lcolor);
    $("#strength_M").css("background", Mcolor);
    $("#strength_H").css("background", Hcolor);
    $("#pw_check_info").html(info); //密码强度提示信息
    return;
} 
    </script> 
<div class="footer-main">
  <div class="footer-bd clearfix">
    <div class="footer">
      <p class="ft-nav"><a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://job.ly169.cn');" href="javascript:">设为首页</a>&nbsp;|&nbsp;<a href="javascript:" onclick="window.external.addFavorite(parent.location.href,document.title);">加入收藏</a> &nbsp;|&nbsp;<a href="http://job.ly169.cn/explain/explain-show.php?id=1" target="_blank">联系我们</a>&nbsp;|&nbsp;<a href="http://job.ly169.cn/explain/explain-show.php?id=2" target="_blank">隐私声明</a>&nbsp;|&nbsp;<a href="http://job.ly169.cn/explain/explain-show.php?id=3" target="_blank">免责声明</a>&nbsp;|&nbsp;<a href="http://job.ly169.cn/explain/explain-show.php?id=4" target="_blank">会员协议</a>&nbsp;|&nbsp;<a href="http://job.ly169.cn/explain/explain-show.php?id=5" target="_blank">付款方式</a>&nbsp;|&nbsp;<a href="http://www.ly169.cn/ad/rencai/" target="_blank">广告报价</a>&nbsp;|&nbsp;<a href="http://job.ly169.cn/hrtools/hrtools-list.php">人才工具箱</a>&nbsp;&nbsp;<span>客服QQ：<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2796581737&amp;site=qq&amp;menu=yes" class="qq" target="_blank">2796581737</a></span></p>
      <div class="copyright">广告热线：0539-8123960&nbsp;&nbsp;商务合作：0539-8901877&nbsp;&nbsp;技术服务：0539-8907877<br />    本站信息均由求职者、招聘者自由发布，不承担因内容的合法性及真实性所引起的一切争议和法律责任<br />Copyright &copy; Ly169.cn All RightsReserved&nbsp;版权所有 中国联合网络通信有限公司临沂市分公司　<a href="http://www.ly169.cn">临沂信息港</a><br /><a href="http://www.miibeian.gov.cn/">鲁ICP备08108228号</a>&nbsp;增值电信业务经营许可证编号：<a href="http://www.ly169.cn/xkzh.html">A2.B1.B2-20090003</a>&nbsp;原联通网络文化经营许可证：<a href="http://www.ly169.cn/xkzh2.html">文网文[2003]0068号</a>&nbsp;<br /><script type="text/javascript" src="http://www.ly169.cn/tongji/rencai.js"></script>
        <a href="http://www.miibeian.gov.cn/" target="_blank" class="underline"> </a> 
		 </div>
    </div>
    <div class="contact-app">
      <div class="app-box">手机版<br />
        <img height="90" src="__PUBLIC__/Qian/data/images/app-mobile.jpg" width="90"><br>手机扫一扫</div>
    </div>
  </div>
</div>
</body>
</html>