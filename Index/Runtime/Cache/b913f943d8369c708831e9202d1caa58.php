<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>企业资料管理 - 企业会员中心 - 临沂信息港人才网</title>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="/favicon.ico" />

<link href="__PUBLIC__/Qian/templates/default/css/user.css" rel="stylesheet" type="text/css" />
<script src="__PUBLIC__/Qian/templates/default/js/jquery.js" type='text/javascript' language="javascript"></script>
<script src="__PUBLIC__/Qian/templates/default/js/jquery.idTabs.min.js" type='text/javascript' language="javascript"></script>
<script src="__PUBLIC__/Qian/templates/default/js/jquery.validate.min.js" type='text/javascript' language="javascript"></script>
<script src="__PUBLIC__/Qian/templates/default/js/jquery.user.selectlayer.js" type='text/javascript' language="javascript"></script>
<script src="__PUBLIC__/Qian/templates/default/js/jquery.vtip-min.js" type='text/javascript' language="javascript"></script>
<script src="__PUBLIC__/Qian/data/cache_classify.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function()
{
	//范例展开
	$("#model").click(function(){	$("#cp").toggle()});
	//菜单层
	showmenulayer("#district_cn","#menu3","#district","#sdistrict",QS_city);
	showmenu("#nature_cn","#menu1","#nature","#Form1","#nature");
	showmenu("#trade_cn","#menu2","#trade","#Form1","#trade");	
	showmenu("#scale_cn","#menu4","#scale","#Form1","#scale");
	showmenu("#street_cn","#menu_street","#street","#Form1","#street");
	showmenu("#officebuilding_cn","#menu_officebuilding","#officebuilding","#Form1","#officebuilding");	
	//道路
	$("#street_alphabet a").click(function()
	{
		$("#streetkey").val('');
		$("#street_alphabet a").removeClass("select");
		$(this).addClass("select");
		var x=$(this).attr('id');
		$.get("/plus/ajax_street.php", {"act":"alphabet","x":x,"listtype":"li"},
			function (data,textStatus)
			{	
				$("#street_showtit").html("首字母为：<b>"+x+"</b>");
				$("#street_showli").html(data);
				$("#street_showli >li").hover(
				function()
				{
				$(this).css("background-color","#DAECF5");
				},
				function()
				{
				$(this).css("background-color","");
				}
				);
			}
		);		
	});
	$("#streetkeyso").click(function()
	{
		var str=$("#streetkey").val();
		$("#street_alphabet a").removeClass("select");
			$.get("/plus/ajax_street.php", {"act":"key","listtype":"li","key":str},
				function (data,textStatus)
				{	
					$("#street_showtit").html("搜索结果：");
					$("#street_showli").html(data);
					$("#street_showli >li").hover(
					function()
					{
					$(this).css("background-color","#DAECF5");
					},
					function()
					{
					$(this).css("background-color","");
					}
					);
				}
			);	
	});
	//写字楼
	$("#officebuilding_alphabet a").click(function()
	{
		$("#officebuildingkey").val('');
		$("#officebuilding_alphabet a").removeClass("select");
		$(this).addClass("select");
		var x=$(this).attr('id');
		$.get("/plus/ajax_officebuilding.php", {"act":"alphabet","x":x,"listtype":"li"},
			function (data,textStatus)
			{	
				$("#officebuilding_showtit").html("首字母为：<b>"+x+"</b>");
				$("#officebuilding_showli").html(data);
				$("#officebuilding_showli >li").hover(
				function()
				{
				$(this).css("background-color","#DAECF5");
				},
				function()
				{
				$(this).css("background-color","");
				}
				);
			}
		);		
	});
	$("#officebuildingkeyso").click(function()
	{
		var str=$("#officebuildingkey").val();
		$("#officebuilding_alphabet a").removeClass("select");
			$.get("/plus/ajax_officebuilding.php", {"act":"key","listtype":"li","key":str},
				function (data,textStatus)
				{	
					$("#officebuilding_showtit").html("搜索结果：");
					$("#officebuilding_showli").html(data);
					$("#officebuilding_showli >li").hover(
					function()
					{
					$(this).css("background-color","#DAECF5");
					},
					function()
					{
					$(this).css("background-color","");
					}
					);
				}
			);	
	});
	
});
//验证
$(document).ready(function() {
 $("#Form1").validate({
 //debug: true,
// onsubmit:false,
//onfocusout :true,
   rules:{
   companyname:{
    required: true,
	minlength:4
   },
   nature:"required",
   trade:"required",
   district:"required",
   scale: "required",
   contact:{
   required: true,
   minlength:2
    },
   telephone:{
   required: true,
	minlength:7
   },
	   email: {
	   required:true,
	   email:true
	   },
	   address: {
	   required:true,
	    minlength:8
	   },
	   contents: {
	   required:true,
	    minlength:30,
		maxlength:2000
	   }
	},
    messages: {
    companyname: {
    required: "请输入公司名称",
    minlength: jQuery.format("公司名称不能小于{0}个字符")
   },
   nature: {
    required: jQuery.format("请选择企业性质")
   },
   trade: {
    required: jQuery.format("请选择所属行业")
   },
   district: {
    required: jQuery.format("请选择所在地区")
   },
    scale: {
    required: jQuery.format("请选择企业规模")
   },
   contact:{
    required:jQuery.format("请输入联系人"),
	minlength:jQuery.format("联系人不能小于{0}个字符")
   },
   telephone: {
    required: jQuery.format("请填写联系电话"),
	minlength:jQuery.format("联系电话不能小于{0}个字符")
   },
   email: {
    required: jQuery.format("请填写电子邮箱"),
	email: jQuery.format("请正确填写电子邮箱")
   },
   address: {
    required: jQuery.format("请填写联系地址"),
	minlength: jQuery.format("请详细填写联系地址")
   },
   contents: {
    required: jQuery.format("请填写公司简介"),
	minlength: jQuery.format("请填写公司简介，不能小于{0}个字符"),
	maxlength:jQuery.format("公司简介不能大于{0}个字符，省略一下吧")
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
});
</script>
<frameset rows="88,*" cols="*" frameborder="no" border="0" framespacing="0">
  <frame src="top.html" name="topFrame" scrolling="no" noresize="noresize" id="topFrame" title="topFrame" />
  <frameset cols="187,*" frameborder="no" border="0" framespacing="0">
    <frame src="left.html" name="leftFrame" scrolling="no" noresize="noresize" id="leftFrame" title="leftFrame" />
    <frame src="index.html" name="rightFrame" id="rightFrame" title="rightFrame" />
 </frameset>
<body>
<link href="__PUBLIC__/Qian/templates/default/css/global.css" rel="stylesheet" type="text/css">
<div class="site-nav">
  <div class="site-nav-bd">
    <div class="login-info top_loginform">
      <div class="topLoading">数据正在加载，请稍候</div>
    </div>
    <div class="quick-menu"><a href="/wap/" class="mobile-icon">手机版</a> | <a href="/help/" class="lia">帮助中心</a> | <a href="/" class="lia">网站首页</a> | <a href="/plus/shortcut.php" style="color:#FF3300" class="lia">保存到桌面</a></div>
  </div>
</div>
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
      <h2>找工作</h2>
    </div>
    <div class="head-btn"> <a href="/user/user_reg.php?act=form&type=2" class="per-reg" title="免费登记简历"><span>1</span><em>免费登记简历</em></a> <a href="/user/user_reg.php?act=form&type=1" class="com-reg" title="免费发布招聘"><span>1</span><em>免费发布招聘</em></a> </div>
  </div>
</div>
<div class="nav-main">
  <div class="nav-bd">
    <ul>		<li><a href="http://job.ly169.cn/index.php" target="_self" ><span>首  页</span></a></li>		<li><a href="http://job.ly169.cn/jobs/jobs-list.php" target="_blank" ><span>找工作</span></a></li>		<li><a href="http://job.ly169.cn/resume/resume-list.php" target="_blank" ><span>聘人才</span></a></li>		<li><a href="http://job.ly169.cn/simple/simple-list.php" target="_self" ><span>微招聘</span></a></li>		<li><a href="http://job.ly169.cn/company/index.php" target="_self" ><span>黄页</span></a></li>		<li><a href="http://job.ly169.cn/news/" target="_self" ><span>新闻资讯</span></a></li>		<li><a href="http://job.ly169.cn/jobs/map-search.php" target="_blank" ><span>地图招聘</span></a></li>		<li><a href="http://bm.ly169.cn/HomeTutor/" target="_blank" ><span>家教</span></a></li>      </ul>
    <div class="tel">客服电话：0539-8123960</div>
  </div>
</div><div class="page_location link_bk"> 当前位置：<a href="/">首页</a>&nbsp;>>&nbsp;<a href="company_index.php">会员中心</a>&nbsp;>>&nbsp;公司信息&nbsp;>>基本信息 </div>
<table width="985" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:8px;" >
  <tr>
    <td width="173" valign="top" class="link_bk"> <script src="./templates/default/js/jquery.dialog.js" type='text/javascript' ></script>
<script type="text/javascript">
$(document).ready(function()
{
//
	$('#chk').click(function(){$("#form1 :checkbox").attr('checked',$("#chk").attr('checked'))});
	$(".left_menu_btop").css("display","block");
	//$("#info .left_menu_btop").css("display","block");
	//$("#info .left_menu_img img").attr("src","./templates/default/images/07.gif");
	$(".left_menu_bg").click(function(){
		var tb=$(this).next();
		var tb_display=tb.css("display");
		if (tb_display=="block")
		{
		tb.css("display","none");
		$(this).find("img").attr("src","./templates/default/images/06.gif");
		}
		else
		{
		tb.css("display","block");
		$(this).find("img").attr("src","./templates/default/images/07.gif");
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
<div class="left_menu_home"><a href="company_index.php" style="color:#990000">中心首页</a>
<a href="company_info.php?act=company_profile" style="color:#990000"  onClick="return confirm('无法预览，因为还没有填写企业信息，现在去填写吗？')">预览企业</a>
</div>
<div class="left_menu_box" id="info">
<div class="left_menu_bg">
	<div class="left_menu_tit">公司信息</div>
	<div class="left_menu_img"><img src="./templates/default/images/07.gif"  border="0" /></div>
	<div class="clear"></div>
</div>
<div class="left_menu_btop">
		<ul>
		<li><a href="company_info.php?act=company_profile">基本信息</a></li>
		<li><a href="company_info.php?act=company_auth">营业执照</a></li>
		<li><a href="company_info.php?act=company_logo">企业Logo</a></li>
		<li><a href="company_info.php?act=company_map">电子地图</a></li>
		<li><a href="company_info.php?act=company_news">公司新闻</a></li>
		<li><a href="company_info.php?act=company_img">公司图片</a></li>
		<div class="clear"></div>
		</ul>
</div>
</div>
<div class="left_menu_box" id="index">
	<div class="left_menu_bg">
		<div class="left_menu_tit">职位管理</div>
		<div class="left_menu_img"><img src="./templates/default/images/07.gif"  border="0" /></div>
		<div class="clear"></div>
	</div>
	<div class="left_menu_btop">
	<ul>
			<li><a href="company_jobs.php?act=addjobs" >发布职位</a></li>
			<li><a href="company_jobs.php?act=jobs">职位管理</a></li>	
			<div class="clear"></div>		
	  </ul>
	</div>
</div>



<div class="left_menu_box" id="recruitment">
<div class="left_menu_bg">
	<div class="left_menu_tit">招聘管理</div>
	<div class="left_menu_img"><img src="./templates/default/images/07.gif"  border="0" /></div>
	<div class="clear"></div>
</div>
<div class="left_menu_btop">
<ul>
		<li><a href="http://job.ly169.cn/resume/resume-list.php"  target="_blank">搜索人才</a></li>
		<li><a href="company_recruitment.php?act=down_resume_lsit">已下载简历</a></li>
		<li><a href="company_recruitment.php?act=apply_jobs">收到的简历</a></li>		
		<li><a href="company_recruitment.php?act=interview_lsit">面试邀请</a> </li>
		<li><a href="company_recruitment.php?act=favorites_list">人&nbsp;&nbsp;才&nbsp;&nbsp;库</a> </li>
		<div class="clear"></div>
	</ul>
</div>
</div>



<!--<div class="left_menu_box" id="jobfair">
<div class="left_menu_bg">
	<div class="left_menu_tit">招聘会</div>
	<div class="left_menu_img"><img src="./templates/default/images/07.gif"  border="0" /></div>
	<div class="clear"></div>
</div>
<div class="left_menu_btop">
<ul>
		<li><a href="company_jobfair.php?act=jobfair">预定展位</a></li>
		<li><a href="company_jobfair.php?act=mybooth">我的预定</a></li>	
		<div class="clear"></div>	
	</ul>
</div>
</div>-->
<!--<div class="left_menu_box" id="index">
	<div class="left_menu_bg">
		<div class="left_menu_tit">猎头职位</div>
		<div class="left_menu_img"><img src="./templates/default/images/07.gif"  border="0" /></div>
		<div class="clear"></div>
	</div>
	<div class="left_menu_btop">
	<ul>
			<li><a href="company_hunterjobs.php?act=add_hunterjobs" >发布职位</a></li>
			<li><a href="company_hunterjobs.php?act=hunterjobs">职位管理</a></li>	
			<li><a href="http://job.ly169.cn/hunter/manager-resume-list.php" >经理人简历</a></li>
			<li><a href="company_hunterjobs.php?act=down_resume_list">已下载简历</a></li>	
			<div class="clear"></div>		
	  </ul>
	</div>
</div>-->


<div class="left_menu_box" id="promotion">
	<div class="left_menu_bg">
		<div class="left_menu_tit">企业推广<div class="hot"></div></div>
		<div class="left_menu_img"><img src="./templates/default/images/07.gif"  border="0" /></div>
		<div class="clear"></div>
	</div>
	<div class="left_menu_btop">
	<ul>
			<li><a href="company_promotion.php?act=tpl">选择模版</a></li>
						<li><a href="company_promotion.php?act=promotion&promotionid=1">推荐职位</a></li>
						<li><a href="company_promotion.php?act=promotion&promotionid=2">紧急招聘</a></li>
						<li><a href="company_promotion.php?act=promotion&promotionid=3">职位置顶</a></li>
						<li><a href="company_promotion.php?act=promotion&promotionid=4">职位变色</a></li>
						<div class="clear"></div>
	  </ul>
	</div>
</div>



<div class="left_menu_box" id="service">
<div class="left_menu_bg">
	<div class="left_menu_tit">服务中心</div>
	<div class="left_menu_img"><img src="./templates/default/images/07.gif"  border="0" /></div>
	<div class="clear"></div>
</div>
<div class="left_menu_btop">
		<ul>
		
				<li><a href="company_service.php?act=setmeal_list">申请服务</a></li>	
		<li><a href="company_service.php?act=setmeal_report">消费明细</a></li>
		<li><a href="company_service.php?act=order_list">订单管理</a></li>
			
		<li><a href="company_service.php?act=feedback">意见建议</a></li>
		<div class="clear"></div>
		</ul>

</div>
</div>	
<div class="left_menu_box" id="user" style="border-bottom:1px;">
	<div class="left_menu_bg">
		<div class="left_menu_tit">账户管理</div>
		<div class="left_menu_img"><img src="./templates/default/images/07.gif"  border="0" /></div>
		<div class="clear"></div>
	</div>
	<div class="left_menu_btop">
		<ul>
		<li><a href="company_user.php?act=userprofile">个人资料</a></li>
		<li><a href="company_user.php?act=buddy">好友列表</a></li>
		<li><a href="company_user.php?act=pm&new=1">消息管理</a></li>
		<li><a href="company_user.php?act=user_email">邮箱认证</a></li>
				<li><a href="company_user.php?act=user_status">账户状态</a></li>
		<li><a href="company_user.php?act=password_edit">密码修改</a></li>
		
		<li><a href="company_user.php?act=login_log">登录日志</a></li>
	
		<li><a href="http://job.ly169.cn/user/login.php?act=logout">安全退出</a></li>
		<div class="clear"></div>
		</ul>
	</div>
</div> </td>
    <td valign="top"><div class="user_right_box">
        <div class="user_right_top_tit_bg">
          <h1>企业基本信息</h1>
        </div>
        <form id="Form1" name="Form1" method="post" action="?act=company_profile_save"  >
          <table width="100%" border="0" cellpadding="4" cellspacing="0"  style="margin-top:10px;">
            <tr>
              <td width="90" height="30" align="right"   ><span style="color:#FF3300; font-weight:bold">*</span>公司名称：</td>
              <td  ><input name="companyname" type="text" class="input_text_200" id="companyname" maxlength="30"  style="width:350px;" value="" /></td>
            </tr>
            <tr>
              <td height="30" align="right"  ><span style="color:#FF3300; font-weight:bold">*</span>企业性质：</td>
              <td  ><div>
                  <input type="text" value="请选择企业性质"  readonly="readonly" name="nature_cn" id="nature_cn" class="input_text_200 input_text_200_selsect"/>
                  <input name="nature" id="nature" type="hidden" value="" />
                  <div id="menu1" class="menu">
                    <ul>
                                            <li id="46" title="国有企业">国有企业</li>
                                            <li id="47" title="民营企业">民营企业</li>
                                            <li id="48" title="中外合资">中外合资</li>
                                            <li id="49" title="外商独资">外商独资</li>
                                            <li id="50" title="股份制企业">股份制企业</li>
                                            <li id="51" title="上市公司">上市公司</li>
                                            <li id="52" title="行政机关">行政机关</li>
                                            <li id="53" title="事业单位">事业单位</li>
                                            <li id="54" title="其他">其他</li>
                                            <li id="234" title="集体企业">集体企业</li>
                                            <li id="235" title="社会团体">社会团体</li>
                                            <li id="236" title="跨国企业">跨国企业</li>
                                            <li id="237" title="集体事业">集体事业</li>
                                            <li id="238" title="乡镇企业">乡镇企业</li>
                                            <li id="239" title="私营企业">私营企业</li>
                                          </ul>
                  </div>
                </div></td>
            </tr>
            <tr>
              <td height="30" align="right"  ><span style="color:#FF3300; font-weight:bold;">*</span>所属行业：</td>
              <td  ><div>
                  <input type="text" value="请选择所属行业"  readonly="readonly" name="trade_cn" id="trade_cn" class="input_text_200 input_text_200_selsect"/>
                  <input name="trade" id="trade" type="hidden" value="" />
                  <div id="menu2" class="dmenu shadow">
                    <ul>
                                            <li id="1" title="互联网电子商务">互联网电子商务</li>
                                            <li id="2" title="计算机业（软件数据库)">计算机业（软件数据库)</li>
                                            <li id="3" title="计算机业（硬件网络）">计算机业（硬件网络）</li>
                                            <li id="4" title="电子微电子技术">电子微电子技术</li>
                                            <li id="5" title="通讯电信业">通讯电信业</li>
                                            <li id="6" title="家电业">家电业</li>
                                            <li id="7" title="批发零售(超市、专卖店)">批发零售(超市、专卖店)</li>
                                            <li id="8" title="贸易、商务、进出口">贸易、商务、进出口</li>
                                            <li id="9" title="电气">电气</li>
                                            <li id="10" title="电力能源矿产业">电力能源矿产业</li>
                                            <li id="11" title="石油化工业">石油化工业</li>
                                            <li id="12" title="生物工程制药环保">生物工程制药环保</li>
                                            <li id="13" title="机械制造机电设备重工业">机械制造机电设备重工业</li>
                                            <li id="14" title="汽车摩托车">汽车摩托车</li>
                                            <li id="15" title="仪器仪表电工设备">仪器仪表电工设备</li>
                                            <li id="16" title="广告公关设计">广告公关设计</li>
                                            <li id="17" title="媒体影视制作新闻出版">媒体影视制作新闻出版</li>
                                            <li id="18" title="艺术文化传播">艺术文化传播</li>
                                            <li id="19" title="快消品（食品饮料粮油）">快消品（食品饮料粮油）</li>
                                            <li id="20" title="纺织品业（服饰家纺）">纺织品业（服饰家纺）</li>
                                            <li id="21" title="咨询业（顾问会计法律）">咨询业（顾问会计法律）</li>
                                            <li id="22" title="金融业（投资、证券）">金融业（投资、证券）</li>
                                            <li id="23" title="建筑房地产物业管理装潢">建筑房地产物业管理装潢</li>
                                            <li id="24" title="餐饮娱乐酒店">餐饮娱乐酒店</li>
                                            <li id="25" title="运输物流快递">运输物流快递</li>
                                            <li id="26" title="旅游业">旅游业</li>
                                            <li id="27" title="办公设备文化体育">办公设备文化体育</li>
                                            <li id="28" title="印刷包装造纸">印刷包装造纸</li>
                                            <li id="29" title="生产制造加工">生产制造加工</li>
                                            <li id="30" title="教育培训科研院所">教育培训科研院所</li>
                                            <li id="31" title="医疗保健卫生服务">医疗保健卫生服务</li>
                                            <li id="32" title="人才交流中介">人才交流中介</li>
                                            <li id="33" title="协会社团政府公用事业社区服务">协会社团政府公用事业社区服务</li>
                                            <li id="34" title="农林牧、副渔业">农林牧、副渔业</li>
                                            <li id="35" title="其他">其他</li>
                                            <li id="471" title="不限">不限</li>
                                          </ul>
                  </div>
                </div></td>
            </tr>
            <tr>
              <td height="30" align="right" ><span style="color:#FF3300; font-weight:bold">*</span>所在地区：</td>
              <td  ><div>
                  <input type="text" value="请选择所在地区"  readonly="readonly" name="district_cn" id="district_cn" class="input_text_200 input_text_200_selsect"/>
                  <input name="district" id="district" type="hidden" value="" />
                  <input name="sdistrict" id="sdistrict" type="hidden" value="" />
                  <div id="menu3" class="dmenu shadow">
                    <ul>
                                            <li id="16" title="兰山">兰山</li>
                                            <li id="538" title="罗庄">罗庄</li>
                                            <li id="539" title="河东">河东</li>
                                            <li id="540" title="费县">费县</li>
                                            <li id="541" title="兰陵">兰陵</li>
                                            <li id="542" title="蒙阴">蒙阴</li>
                                            <li id="543" title="平邑">平邑</li>
                                            <li id="544" title="临沭">临沭</li>
                                            <li id="545" title="郯城">郯城</li>
                                            <li id="546" title="莒南">莒南</li>
                                            <li id="547" title="沂南">沂南</li>
                                            <li id="548" title="沂水">沂水</li>
                                            <li id="549" title="开发区">开发区</li>
                                            <li id="550" title="高新区">高新区</li>
                                            <li id="551" title="临港区">临港区</li>
                                            <li id="552" title="不限">不限</li>
                                          </ul>
                  </div>
                  <div id="menu3_s" class="dmenu shadow" style="display:none"></div>
                </div></td>
            </tr>
            <tr>
              <td height="30" align="right"  >所在道路：</td>
              <td  ><div>
                  <input type="text" value="未标注道路"  readonly="readonly" name="street_cn" id="street_cn" class="input_text_200 input_text_200_selsect"/>
                  <input name="street" id="street" type="hidden" value="" />
                  <div id="menu_street" class="somenu shadow">
                    <div class="sobox">
                      <div class="tit">提示：如您公司所在的道路无法在下方找到，请略过此项或反馈给网站管理员</div>
                      <div class="left">按字母检索：</div>
                      <div class="right link_bk" id="street_alphabet"> <a href="javascript:void(0);" id="a">A</a> <a href="javascript:void(0);" id="b">B</a> <a href="javascript:void(0);" id="c">C</a> <a href="javascript:void(0);" id="d">D</a> <a href="javascript:void(0);" id="e">E</a> <a href="javascript:void(0);" id="f">F</a> <a href="javascript:void(0);" id="g">G</a> <a href="javascript:void(0);" id="h">H</a> <a href="javascript:void(0);" id="j">J</a> <a href="javascript:void(0);" id="k">K</a> <a href="javascript:void(0);" id="l">L</a> <a href="javascript:void(0);" id="m">M</a> <a href="javascript:void(0);" id="n">N</a> <a href="javascript:void(0);" id="o">O</a> <a href="javascript:void(0);" id="p">P</a> <a href="javascript:void(0);" id="q">Q</a> <a href="javascript:void(0);" id="r">R</a> <a href="javascript:void(0);" id="s">S</a> <a href="javascript:void(0);" id="t">T</a> <a href="javascript:void(0);" id="w">W</a> <a href="javascript:void(0);" id="x">X</a> <a href="javascript:void(0);" id="y">Y</a> <a href="javascript:void(0);" id="z">Z</a> </div>
                      <div class="clear"></div>
                      <div class="left"  style=" padding-top:10px;">按关键字检索：</div>
                      <div class="right">
                        <div class="inputbox">
                          <input name="key" id="streetkey"type="text" />
                        </div>
                        <div class="inputsub"><a href="javascript:void(0);" id="streetkeyso">确定</a></div>
                        <div class="clear"></div>
                      </div>
                    </div>
                    <div class="clear"></div>
                    <div class="showli">
                      <div class="left" id="street_showtit">热门道路：</div>
                      <div class="right">
                        <ul id="street_showli">
                                                    <li id="240" title="蒙山大道">蒙山大道</li>
                                                    <li id="241" title="工业大道">工业大道</li>
                                                    <li id="242" title="临西九路">临西九路</li>
                                                    <li id="371" title="通达路">通达路</li>
                                                    <li id="372" title="解放路">解放路</li>
                                                    <li id="373" title="西外环路">西外环路</li>
                                                    <li id="374" title="湖西路">湖西路</li>
                                                    <li id="375" title="临册路">临册路</li>
                                                    <li id="376" title="南大路">南大路</li>
                                                    <li id="377" title="滨河路">滨河路</li>
                                                    <li id="378" title="滨河东路">滨河东路</li>
                                                    <li id="379" title="香港路">香港路</li>
                                                    <li id="380" title="沃尔沃路">沃尔沃路</li>
                                                    <li id="381" title="杭州路">杭州路</li>
                                                    <li id="382" title="联邦路">联邦路</li>
                                                    <li id="383" title="沂河路">沂河路</li>
                                                    <li id="384" title="北京东路">北京东路</li>
                                                    <li id="385" title="火炬路">火炬路</li>
                                                    <li id="386" title="双月园路">双月园路</li>
                                                    <li id="387" title="南环路">南环路</li>
                                                  </ul>
                      </div>                      
                    </div>
                    <div class="clear"></div>
                  </div>
                </div></td>
            </tr>
            <tr>
              <td height="30" align="right"  >所在写字楼：</td>
              <td  ><div>
                  <input type="text" value="未标注写字楼"  readonly="readonly" name="officebuilding_cn" id="officebuilding_cn" class="input_text_200 input_text_200_selsect"/>
                  <input name="officebuilding" id="officebuilding" type="hidden" value="" />
                  <div id="menu_officebuilding" class="somenu shadow">
                    <div class="sobox">
                      <div class="tit">提示：如您公司所在的写字楼无法在下方找到，请略过此项或反馈给网站管理员</div>
                      <div class="left">按字母检索：</div>
                      <div class="right link_bk" id="officebuilding_alphabet"> <a href="javascript:void(0);" id="a">A</a> <a href="javascript:void(0);" id="b">B</a> <a href="javascript:void(0);" id="c">C</a> <a href="javascript:void(0);" id="d">D</a> <a href="javascript:void(0);" id="e">E</a> <a href="javascript:void(0);" id="f">F</a> <a href="javascript:void(0);" id="g">G</a> <a href="javascript:void(0);" id="h">H</a> <a href="javascript:void(0);" id="j">J</a> <a href="javascript:void(0);" id="k">K</a> <a href="javascript:void(0);" id="l">L</a> <a href="javascript:void(0);" id="m">M</a> <a href="javascript:void(0);" id="n">N</a> <a href="javascript:void(0);" id="o">O</a> <a href="javascript:void(0);" id="p">P</a> <a href="javascript:void(0);" id="q">Q</a> <a href="javascript:void(0);" id="r">R</a> <a href="javascript:void(0);" id="s">S</a> <a href="javascript:void(0);" id="t">T</a> <a href="javascript:void(0);" id="w">W</a> <a href="javascript:void(0);" id="x">X</a> <a href="javascript:void(0);" id="y">Y</a> <a href="javascript:void(0);" id="z">Z</a>                        
                      </div>
                      <div class="clear"></div>
                      <div class="left"  style=" padding-top:16px;">按关键字检索：</div>
                      <div class="right">
                        <div class="inputbox">
                          <input name="key" id="officebuildingkey"type="text" />
                        </div>
                        <div class="inputsub"><a href="javascript:void(0);" id="officebuildingkeyso">确定</a></div>
                        <div class="clear"></div>
                      </div>                     
                    </div>
                    <div class="clear"></div>
                    <div class="showli">
                      <div class="left" id="officebuilding_showtit">热门写字楼：</div>
                      <div class="right">
                        <ul id="officebuilding_showli">
                                                    <li id="245" title="金润商务大厦">金润商务大厦</li>
                                                    <li id="246" title="环球国际广场">环球国际广场</li>
                                                    <li id="247" title="齐鲁大厦">齐鲁大厦</li>
                                                    <li id="248" title="城建时代广场">城建时代广场</li>
                                                    <li id="250" title="万阅城写字楼">万阅城写字楼</li>
                                                    <li id="251" title="西城新贵商务大厦">西城新贵商务大厦</li>
                                                    <li id="252" title="慧谷时空">慧谷时空</li>
                                                    <li id="253" title="金鼎国际广场">金鼎国际广场</li>
                                                    <li id="254" title="开元上城国际">开元上城国际</li>
                                                    <li id="255" title="澳尔诺财富中心">澳尔诺财富中心</li>
                                                    <li id="256" title="商会大厦">商会大厦</li>
                                                    <li id="257" title="兴大商务港">兴大商务港</li>
                                                    <li id="258" title="临沂市文化中心">临沂市文化中心</li>
                                                    <li id="259" title="中元国际">中元国际</li>
                                                    <li id="260" title="高新区创业大厦">高新区创业大厦</li>
                                                    <li id="261" title="嘉锐大厦">嘉锐大厦</li>
                                                    <li id="262" title="联安大厦">联安大厦</li>
                                                    <li id="263" title="府佑大厦">府佑大厦</li>
                                                    <li id="264" title="润地大厦">润地大厦</li>
                                                    <li id="265" title="民族大厦">民族大厦</li>
                                                  </ul>
                      </div>
                     </div>
                     <div class="clear"></div>
                  </div>
                </div></td>
            </tr>
            <tr>
              <td height="30" align="right" ><span style="color:#FF3300; font-weight:bold">*</span>公司规模：</td>
              <td  ><div>
                  <input type="text" value="请选择公司规模"  readonly="readonly" name="scale_cn" id="scale_cn" class="input_text_200 input_text_200_selsect"/>
                  <input name="scale" id="scale" type="hidden" value="" />
                  <div id="menu4" class="menu">
                    <ul>
                                            <li id="80" title="少于50人">少于50人</li>
                                            <li id="81" title="50-200人">50-200人</li>
                                            <li id="82" title="200-500人">200-500人</li>
                                            <li id="83" title="500-1000人">500-1000人</li>
                                            <li id="84" title="1000人以上">1000人以上</li>
                                          </ul>
                  </div>
                </div></td>
            </tr>
            <tr>
          <td height="30" align="right"  >注册资金：</td>
          <td  ><input name="registered" type="text" class="input_text_200" id="registered" maxlength="20" value="" style="width:80px;"/> 万
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label><input name="currency" type="radio" value="人民币"   checked="checked" />人民币</label>&nbsp;&nbsp;&nbsp;<label><input type="radio" name="currency" value="美元" />美元</label>
</td>
        </tr>
		
        <tr>
          <td height="30" align="right"  ><span style="color:#FF3300; font-weight:bold">*</span>联 系 人：</td>
          <td  >
		  <input name="contact" type="text" class="input_text_200" id="contact" maxlength="30" value=""/>
           <label><input name="contact_show"  type="checkbox" value="1" checked="checked" />联系人在企业详细页中显示
		  </td>
        </tr>
		       <tr>
          <td height="30" align="right"  ><span style="color:#FF3300; font-weight:bold">*</span>联系电话：</td>
          <td  >
		  <input name="telephone" type="text" class="input_text_200" id="telephone" maxlength="40" value=""/>
           <label><input name="telephone_show"  type="checkbox" value="1" checked="checked" />联系电话在企业详细页中显示
		  </td>
        </tr>
		<tr>
          <td height="30" align="right"  ><span style="color:#FF3300; font-weight:bold">*</span>联系邮箱：</td>
          <td  >
		  <input name="email" type="text" class="input_text_200" id="email" maxlength="80" value=""/>
           <label><input name="email_show"  type="checkbox" value="1" checked="checked" />联系邮箱在企业详细页中显示
		  </td>
        </tr>
        <tr>
          <td height="30" align="right" >公司网址：</td>
          <td  ><input name="website" type="text" class="input_text_200" id="website" maxlength="80" value=""/></td>
        </tr>
		<tr>
          <td height="30" align="right"  ><span style="color:#FF3300; font-weight:bold">*</span>通讯地址：</td>
          <td  >
		  <input name="address" type="text" class="input_text_200" id="address" maxlength="80"  style="width:447px;" value=""/>
		  </td>
        </tr>
		<tr>
          <td height="30" align="right"  >&nbsp;</td>
          <td  >
           <label><input name="address_show"  type="checkbox" value="1" checked="checked" />联系地址在企业详细页中显示
		  </td>
        </tr>
        <tr>
          <td align="right" valign="top"  >
		  <span style="color:#FF3300; font-weight:bold">*</span> 公司介绍：</td>
          <td  >
		  <textarea name="contents" class="input_text_200_textarea" id="contents" style="width:450px; height:150px; margin-bottom:6px;" ></textarea>
            <br />
            <span id="model" style="color: #0033CC; margin-right:200px; cursor:pointer;">[查看范例]</span></td>
        </tr>
		<tr id="cp" style="display:none">
          <td align="right" valign="top" bgcolor="#E4F2F8" style="color:#FF0000">公司简介范例：</td>
          <td height="160" valign="top" bgcolor="#E4F2F8" style="line-height:180%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XXX技术有限公司成立于2000年,是XXX投资有限公司与美国XXX公司合资兴建的中外合资企业,引进美国海XXX专利技术,专业从事XX研究开发和生产应用.<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;公司2002年被XX认定为高新技术企业,是目前国内唯一的一家既生产XXX又生产X的生产厂家,主要产品有各XX,XX列产品XXX等.<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;目前,XX公司拥有总资产X亿元,生产加工基地占地XX余亩,具有一次性XX万余吨的XX储存能力,具有自营进出口权,是目前国内最具实力XX生产供应商之一.<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用先进,成熟,适用的技术服务XX事业 ,是X公司的企业宗旨,公司在引进新技术的同时,不断根据XXX实际情况在应用方面进行研究与推广立足XXX,面向全国,走向世界是XX公司的发展目标,目前XXX公司的产品除在X大量使用外,已经打入了江苏,浙江,河南,安徽,湖南,江西,四川,湖北,广东等十余个省份,同时公司生产的XXX已经返销美国,并在俄罗斯,哈萨克斯坦开始应用,已成功进入国际市场.</td>
        </tr>		
        <tr>
          <td align="right" valign="top" >&nbsp;</td>
          <td   > 
           <label><input name="yellowpages"  type="checkbox" value="1" checked="checked" />
           公司信息在网站黄页中显示</label>
		   </td>
        </tr>
            <tr>
              <td align="right" valign="top" >&nbsp;</td>
              <td height="160" valign="top" ><br />
                <input type="submit" name="Submit" value="保存"  class="user_submit" />
                &nbsp;</td>
            </tr>
          </table>
        </form>
      </div></td>
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