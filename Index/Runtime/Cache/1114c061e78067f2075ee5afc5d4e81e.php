<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>招聘人才</title>
<meta name="author" content="临沂信息港人才网" />
<link href="__PUBLIC__/Qian/templates/default/css/user.css" rel="stylesheet" type="text/css" />
</head>
<body>
<link href="__PUBLIC__/Qian/templates/default/css/global.css" rel="stylesheet" type="text/css" />

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
    <ul>		<li><a href="__APP__/Index/index/id/1" target="_self" ><span>首  页</span></a></li>		<li><a href="__URL__/qiye" target="_blank" ><span>企业中心</span></a></li>		      </ul>
    <div class="tel">客服电话：0539-8123960</div>
  </div>
</div><div class="page_location link_bk">
当前位置：<a href="/">首页</a>&nbsp;>>&nbsp;<a href="personal_index.php">会员中心</a>&nbsp;>>&nbsp;创建简历&nbsp;>>&nbsp;第五步 - 工作经历
</div>
<table width="985" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:8px;" >
  <tr>
    <td width="173" valign="top" class="link_bk">
	<script src="__PUBLIC__/Qian/templates/default/js/jquery.dialog.js" type='text/javascript' ></script>
<script type="text/javascript">
$(document).ready(function()
{
//
$('#chk').click(function(){$("#form1 :checkbox").attr('checked',$("#chk").attr('checked'))});
$("#preview").click(function(){
	dialog("请选择要预览的简历","id:previewbox","400px","auto","");
});
$(".left_menu_bg").click(function(){
		var tb=$(this).next();
		var tb_display=tb.css("display");
		if (tb_display=="block")
		{
		tb.css("display","none");
		$(this).find("img").attr("src","__PUBLIC__/Qian/templates/default/images/06.gif");
		}
		else
		{
		tb.css("display","block");
		$(this).find("img").attr("src","__PUBLIC__/Qian/templates/default/images/07.gif");
		}
	});
	
	$("input[type='text'],input[type='password']").focus(function(){
	$(this).css("border-color","#0066CC #9DCEFF #9DCEFF #0066CC");
	});
	$("input[type='text'],input[type='password']").blur(function(){
	$(this).css("border-color","");
	});

});
</script>


	</td>
    <td valign="top">
	<div class="user_right_box">
		<div class="user_right_top_tit_bg">		
		  <h1>发布招聘信息</h1>
		</div>
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="22" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="4" >
            <tr>
              <td height="50" bgcolor="#F5FAFC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:14px; color:#0033CC">发布招聘信息</span> <span style="color: #666666">(带<strong  style="color:#FF0000">*</strong>的为必填)</span>
			  
			  	  			  </td>
              </tr>            
          </table>
		              <table width="100%" border="0" cellspacing="0" cellpadding="4" style="margin-bottom:150px; line-height:180%;">
			<form id="Form1" name="Form1" method="post" action="" ><tr>
           
                </tr>
				 <tr>
                <td width="242" height="23" align="right" valign="top"><strong  style="color:#FF0000">*</strong>公司名称：</td>
                <td>
				<div>
				<input name="i_name" type="text"  style="height:30px" class="input_text_200 date_input" id="start" maxlength="18" />
                    <span style="color:#666666"></span>
					</div>
					</td>
              </tr>
              <tr>
                <td width="242" height="23" align="right" valign="top"><strong  style="color:#FF0000">*</strong>招聘人数：</td>
                <td>
				<div>
				
				<input name="i_num" type="text" class="input_text_200 date_input" id="endtime" maxlength="18"  style="height:30px" />
                    <span style="color:#666666"></span>
						</div>
					</td>
              </tr>
              <tr>
                <td width="242" height="23" align="right" valign="top"><strong  style="color:#FF0000">*</strong>悬赏：</td>
                <td width="836">
                	是<input type='radio' name='i_reward' value='是' />
                	否<input type='radio' name='i_reward' value='否' />
                </td>
              </tr>
              <tr>
                <td width="242" height="23" align="right" valign="top"><strong  style="color:#FF0000">*</strong>工作经验：</td>
                <td width="836">
                	需要<input type='radio' name='i_jinyan' value='需要' />
                	不需要<input type='radio' name='i_jinyan' value='不需要' />
                </td>
              </tr>
              <tr>
                <td width="242" height="23" align="right" valign="top"><strong  style="color:#FF0000">*</strong>性别要求：</td>
                <td width="836">
                	不限<input type='radio' name='i_sexyq' value='不限' />
                	男<input type='radio' name='i_sexyq' value='男' />
                	女<input type='radio' name='i_sexyq' value='女' />
                </td>
              </tr>
               <tr>
                <td width="242" height="23" align="right" valign="top"><strong  style="color:#FF0000">*</strong>联系方式：</td>
                <td width="836">
                	<input type='text' name='i_tel' />
                </td>
              </tr>
              
              <tr>
                <td width="242" height="23" align="right" valign="top"><strong  style="color:#FF0000">*</strong>到期时间：</td>
                <td>
				<div>
				
				<input name="i_time" type="text" class="input_text_200 date_input" id="endtime" maxlength="18"  style="height:30px" />
                    <span style="color:#666666">时间格式为：2013/12/23</span>
						</div>
					</td>
              </tr>
              
              <tr>
                <td width="242" height="23" align="right" valign="top">招聘简介：</td>
                <td><textarea name="i_into" id="companyprofile"   style="width:350px; height:90px;line-height:160%; font-size:12px"  onpropertychange="if(this.value.length>200){this.value=this.value.slice(0,200)}">
                	
                </textarea>
                  <br />
                </td>
              </tr>
			     <tr>
                <td width="242" height="23" align="right" valign="top">公司地址：</td>
                <td><textarea name="i_dizhi"  id="achievements"  style="width:350px; height:90px; line-height:160%; font-size:12px;"  onpropertychange="if(this.value.length>200){this.value=this.value.slice(0,200)}">
                	
                </textarea>
                  <br /></td>
              </tr>
              <tr>
                <td height="60" align="center" >
				
				<input name="pid" type="hidden" id="pid" value="184973" />
				 
				 
				</td>
                <td height="60"  >
				 				 <input type="submit" name="sub" value="发布"   class="user_submit"/>                  
                &nbsp;
                
				 				
                  <br /></td>
              </tr></form>
            </table>
			</td>
          
        </tr>
      </table>
        </div>
    </td>
  </tr>
</table>
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