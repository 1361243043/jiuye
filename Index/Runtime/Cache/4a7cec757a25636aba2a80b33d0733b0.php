<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人中心</title>
<meta name="description" content="山东银河机械化工有限公司，由临沂市木工机械总厂改制而成，生产“银河” 牌木工机械（热压机、预压机、科技...},公司简介">
<meta name="keywords" content="山东银河机械化工有限公司,公司简介">

<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="/favicon.ico" />
<link href="__PUBLIC__/Qian/templates/default/css/global.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/Qian/templates/tpl_company/default/css/css.css" rel="stylesheet" type="text/css" />
<script src="__PUBLIC__/Qian/templates/default/js/jquery.js" type='text/javascript' ></script>
<script src="__PUBLIC__/Qian/templates/default/js/jquery.dialog.js" type='text/javascript' ></script>
<script type="text/javascript">
$(document).ready(function()
{
		var company_id="54810";
		var tsTimeStamp= new Date().getTime();
		$.get("/plus/ajax_contact.php", { "id": company_id,"time":tsTimeStamp,"act":"company_contact"},
			function (data,textStatus)
			 {			
				$("#company_contact").html(data);
			 }
		);
		$.get("/plus/ajax_click.php", { "id": company_id,"time":tsTimeStamp,"act":"company_click"},
			function (data,textStatus)
			 {			
				$(".click").html(data);
			 }
		);
		$(".app_jobs").click(function(){
	dialog("投简历","url:get?/user/user_apply_jobs.php?id="+$(this).attr("id")+"&act=app","500px","auto","");
	});
	$("#newbuddy").click(function(){
	dialog("加为好友","url:get?/user/user_buddy.php?tuid=196114","350px","auto","");
	});
	$("#addpms").click(function(){
	var url="/user/user_pms.php?tuid=196114";
	dialog("发送短消息","url:get?"+url,"400px","auto","");
	});
});
</script>
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
    <ul>		<li><a href="__APP__/Index/index/id/1" ><span>首  页</span></a></li>		<li><a href="__URL__/mibao" target="_blank" id="cur"><span>填写密保</span></a></li>		<li><a href="__URL__/qiuzhi" target="_blank" ><span>求职</span></a></li>		<li><a href="__URL__/fankui" target="_self" ><span>就业反馈</span></a></li>		<li><a href="__URL__/juanzeng" target="_self" ><span>捐赠申请</span></a></li>		<li><a href="__URL__/jianyi" ><span>个人建议</span></a></li>		<li><a href="__URL__/updategeren/id/<?php echo ($data["u_id"]); ?>" target="_blank" ><span>修改信息</span></a></li>		<li><a href="__URL__/huiyuan" target="_self" ><span>会员申请</span></a></li>      </ul>
    <div class="tel">投诉电话：0538-8123450</div>
  </div>
</div><div class="page_location link_bk">
当前位置：<a>首页</a>&nbsp;>>&nbsp;<a >个人中心</a>&nbsp;>>&nbsp;个人信息管理
</div>
<div class="company-show-topnav">
  <div class="topcomname">
  <h1><?php echo ($data["u_nicheng"]); ?></h1>
  <?php if($huiyuan == 1): ?><h2><span style="color:#f00">VIP</span></h2>
  <?php else: ?>
  		<h2><span style="color:#fff">VIP</span></h2><?php endif; ?>
  
				<div class="clear"></div>
  </div>
   <div class="snav">
		
		<a href="__URL__/sqiuzhi" >查看求职</a>
		<a href="__URL__/updatemima/id/<?php echo ($data["u_id"]); ?>" >修改密码</a>
		<a href="__URL__/smibao" >我的密保</a>
		<div class="clear"></div>
  </div>
 
</div>
<div class="company-show">
  <div class="left">
    <div class="show link_lan">
			
			
			 
			 
			 <div class="item">
			 <ul class="link_bku">
			<li>联系方式：<?php echo ($data["u_tel"]); ?></li>
			<li>用户账号：<?php echo ($data["u_name"]); ?></li>
			</ul>
			</div>
			<div class="clear"></div>
			 
			 	         <div class="title"><strong>个性签名</strong>
			 	         </div>
			 				<?php echo ($data["u_gexin"]); ?>
			 <div class="title"><strong>联系方式</strong>
			 </div>
			 	<?php echo ($data["e_tel"]); ?>
			 <div id="company_contact"></div>
			 <div class="title"><strong>个人位置</strong>
			 </div>
			 			   <script src="http://api.map.baidu.com/api?v=1.2" type="text/javascript"></script>
			  <div style="width:100%;height:200px ; border:1px #CCCCCC solid; margin:0 auto; margin-top:6px;" id="map">
			  		<?php echo ($data["e_add"]); ?>
			  </div>
				<script type="text/javascript">
				var map = new BMap.Map("map");   
				var point = new BMap.Point(118.249344, 35.144797);   
				map.centerAndZoom(point, 18);
				var opts = {type: BMAP_NAVIGATION_CONTROL_SMALL,anchor: BMAP_ANCHOR_TOP_RIGHT}
				map.addControl(new BMap.NavigationControl(opts)); //添加鱼骨
				//map.enableScrollWheelZoom();//启用滚轮放大缩小，默认禁用。
				// 创建标注
				var qs_marker = new BMap.Marker(point);           
				map.addOverlay(qs_marker); 
				// 创建标注 
				// 打开信息窗口 
				var opts = {   
				  width : 150,     // 信息窗口宽度   
				  height: 50,     // 信息窗口高度   
				  title : "山东银河机械化工有限公司"  // 信息窗口标题   
				}   
				var infoWindow = new BMap.InfoWindow("临沂市兰山区义堂镇南楼工业园", opts);  // 创建信息窗口对象   
				map.openInfoWindow(infoWindow, point);
				// 打开信息窗口  			
				</script>	
					</div>
  </div>
  <div class="right">
		  <div class="txtbox">
				  <div class="tit">个人档案</div>
				  <div class="qrcode"><img src="/plus/url_qrcode.php?url=http://job.ly169.cn/company/company-show.php?id=54810" alt="用户个人账号" /></div>	  
		    <div class="txt">
					  <ul class="link_bku">
						<li>用户账号：<?php echo ($data["u_name"]); ?></li>
						<li>所属行业：<a href="http://job.ly169.cn/jobs/jobs-list.php?trade=29" target="_blank">生产制造加工</a></li>
						
						<li>在职状态：<a href="http://job.ly169.cn/jobs/jobs-list.php?scale=81" target="_blank">在职</a></li>
						<li>所在地区：<a href="http://job.ly169.cn/jobs/jobs-list.php?district=16&sdistrict=0" target="_blank">兰山</a></li>
					  </ul>
				  </div>
				<div class="pm link_bk">
					    <div class="pleft"><a href="javascript:void(0)" id="addpms">发短消息</a></div>
						<div class="pright"><a href="javascript:void(0)" id="newbuddy">加为好友</a></div>
						<div class="clear"></div>
				</div>
	</div>
			 <div class="txtbox">
				  <div class="tit">您可能感兴趣的职位</div>	  
															<div class="txt1 link_lan">
					<strong><a href="http://job.ly169.cn/jobs/jobs-show.php?id=40833" target="_blank">月薪9000招普工焊工电工厨师搬...</a></strong><br />
					<a href="http://job.ly169.cn/company/company-show.php?id=54895" target="_blank">山东弘润水产有限公司</a><br />
					薪资待遇：5000~10000元/月<br />招聘人数：50人<br />学历要求：不限制
					</div>
										<div class="txt1 link_lan">
					<strong><a href="http://job.ly169.cn/jobs/jobs-show.php?id=40834" target="_blank">年薪15万招中远船员普工焊工厨...</a></strong><br />
					<a href="http://job.ly169.cn/company/company-show.php?id=54895" target="_blank">山东弘润水产有限公司</a><br />
					薪资待遇：1万以上/月<br />招聘人数：50人<br />学历要求：不限制
					</div>
										<div class="txt1 link_lan">
					<strong><a href="http://job.ly169.cn/jobs/jobs-show.php?id=31272" target="_blank">营销经理</a></strong><br />
					<a href="http://job.ly169.cn/company/company-show.php?id=44363" target="_blank">临沂市万通铁艺工程有限公司</a><br />
					薪资待遇：面议<br />招聘人数：1人<br />学历要求：中技
					</div>
										<div class="txt1 link_lan">
					<strong><a href="http://job.ly169.cn/jobs/jobs-show.php?id=33860" target="_blank">江苏南通中集集团高薪急聘电焊...</a></strong><br />
					<a href="http://job.ly169.cn/company/company-show.php?id=45513" target="_blank">临沂市金泉劳务派遣公司</a><br />
					薪资待遇：面议<br />招聘人数：200人<br />学历要求：未填写
					</div>
										<div class="txt1 link_lan">
					<strong><a href="http://job.ly169.cn/jobs/jobs-show.php?id=33859" target="_blank">月薪5500急聘电焊工，辅助工</a></strong><br />
					<a href="http://job.ly169.cn/company/company-show.php?id=45513" target="_blank">临沂市金泉劳务派遣公司</a><br />
					薪资待遇：面议<br />招聘人数：200人<br />学历要求：未填写
					</div>
								</div>
  </div>
  <div class="clear"></div>
</div>
<div class="footer-main">
  <div class="footer-bd clearfix">
    <div class="footer">
      <p class="ft-nav"><a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://job.ly169.cn');" href="javascript:">设为首页</a>&nbsp;|&nbsp;<a href="javascript:" onclick="window.external.addFavorite(parent.location.href,document.title);">加入收藏</a> &nbsp;|&nbsp;<a href="http://job.ly169.cn/explain/explain-show.php?id=1" target="_blank">联系我们</a>&nbsp;|&nbsp;<a href="http://job.ly169.cn/explain/explain-show.php?id=2" target="_blank">隐私声明</a>&nbsp;|&nbsp;<a href="http://job.ly169.cn/explain/explain-show.php?id=3" target="_blank">免责声明</a>&nbsp;|&nbsp;<a href="http://job.ly169.cn/explain/explain-show.php?id=4" target="_blank">会员协议</a>bbsp;|&nbsp;<a href="http://job.ly169.cn/explain/explain-show.php?id=5" target="_blank">付款方式</a>&nbsp;|&nbsp;<a href="http://www.ly169.cn/ad/rencai/" target="_blank">广告报价</a>&nbsp;|&nbsp;<a href="http://job.ly169.cn/hrtools/hrtools-list.php">人才工具箱</a>&nbsp;&nbsp;<span>客服QQ：<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2796581737&amp;site=qq&amp;menu=yes" class="qq" target="_blank">2796581737</a></span></p>
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