$(document) 
function index(dir,templatedir)
{
	$(".lazyload img").lazyload({ placeholder: templatedir+"images/84.gif", effect:"fadeIn" }); 
	$("#index-search-button").click(function()
	{  
		index_search_location();
	});
	$("#Button1").click(function()
	{  
		search_location();
	});
	//最新简历下载记录
	$.get(dir+"plus/ajax_common.php", {"act":"dynamic"},
			function (data,textStatus)
			 {			
				$("#downinfo").html(data);
                                var speed=50;
                                var demo2=document.getElementById("dynamic2");
                                var demo1=document.getElementById("dynamiclist");
                                var demo=document.getElementById("dynamic");
                                function MarqueeLeft(){
                                if(demo2.offsetWidth-demo.scrollLeft<=0)
                                demo.scrollLeft-=demo1.offsetWidth
                                else{
                                demo.scrollLeft++
                                    }
                                    }
                                var MyMar=setInterval(MarqueeLeft,speed);
                                demo.onmouseover=function() {clearInterval(MyMar);}
                                demo.onmouseout=function() {MyMar=setInterval(MarqueeLeft,speed);}
		         } 
	);
				//紧急招聘
				$(function(){
				var _wrap=$('#emergencybox');
				var _interval=2000;
				var _moving;
				_wrap.hover(function(){
				clearInterval(_moving);
				},function(){
				_moving=setInterval(function(){
				var _field=_wrap.find('div:first');
				var _h=_field.height();
				_field.animate({marginTop:-_h+'px'},600,function(){
				_field.css('marginTop',0).appendTo(_wrap);
				})
				},_interval)
				}).trigger('mouseleave');
				});
	//最新人才
	$(".rcpiclist li").hover(function () {
		$(this).children(".rcbg1").slideUp("slow");
		$(this).children(".rcbg2").slideDown("slow");
	  },
	  function () {
		$(this).children(".rcbg2").slideUp("slow");
		$(this).children(".rcbg1").slideDown("slow");
	  }
	);
}
function showDiv(obj){
	if($(obj).attr("class")=="current1"){
		$(obj).removeClass();
	}
	else{
		$(obj).addClass("current1");
		$(obj).find(".shade").height($(obj).find(".area").height()+80)
	}
}
function showDiv1(obj){
	if($(obj).attr("class")=="current1"){
		$(obj).removeClass();
	}
	else{
		$(obj).addClass("current1");
		$(obj).find(".shade").height($(obj).find(".area").height())
	}
}
function showDiv2(obj){
	if($(obj).attr("class")=="current1"){
		$(obj).removeClass();
	}
	else{
		$(obj).addClass("current1");
		$(obj).find(".shade").height($(obj).find(".area").height()+60)
	}
}
function choooseInput(obj){

	if($(obj).val()=="用户名或邮箱"){
		$(obj).val("")
	}
}
function choooseInputO(obj){
	if($(obj).val()==""){
		$(obj).val("用户名或邮箱")
	}

}
function choooseInput1(obj){

	$(obj).removeClass("input_3_none")

}
function choooseInput2(obj){
	if($(obj).val()==""){
		$(obj).addClass("input_3_none")
	} 
} 
function newsShow(obj){
	$("#newShow").show();

	$("#newShow").css({"left":$(obj).offset().left,"top":$(obj).offset().top});
	$("#newShow").find(".shade").height($("#newShow").find(".area").height());
	$("#newShow").find(".shade1").height($("#newShow").find(".area").height()+30);
} 
function checkKeyword()
{
	var theform = document.wane_search_keywords_index;
	var words = theform.keywords.value;
	if (words == '' || words == '请输入职位名称' || words=="请输入公司名称")
	{
		alert ("请输入关键字！");
	}
	else
		{
			theform.submit();
		}
	}
	function chooseSelect(n){
		if(n==1){
			$("#keywords").val("请输入职位名称");
			$("#zhiwei").html("职位名");
			$("#sel").removeClass("current1");
		}
		if(n==2){
			$("#keywords").val("请输入公司名称");
			$("#zhiwei").html("公司名");
			$("#sel").removeClass("current1");
		}
	}
	function chooseSelect1(obj){

		$("#zhiwei1").html($(obj).html());
		$("#sel1").removeClass("current1");

	} 
	function chooseZ(obj){
		if($(obj).val()=="请输入职位名称"||$(obj).val()=="请输入公司名称"){
			$(obj).val("")
		}

	} 
    function index_search_location()
	{
		$("body").append('<div id="pageloadingbox">页面加载中....</div><div id="pageloadingbg"></div>');
		$("#pageloadingbg").css("opacity", 0.5);
	 	var patrn=/^(请输入)/i; 
		var key=$("#keywords").val(); 
		var keytype=$("#keytype").val();
		if (patrn.exec(key))
		{
		$("#keywords").val('');
		key='';
		} 
		var searchtype=""; 
		switch(keytype)
		{
			case '1':searchtype="QS_jobslist";break;
			case '2':searchtype="QS_resumelist";break;
			case '3':searchtype="QS_newssearch";break;
		}  
		$.get("/plus/ajax_search_location.php", {"act":searchtype,"key":key,"page":1},
	function (data,textStatus)
			 {
				 window.location.href=data;
			 }
		);
	} 
	  function setkeyword(word)
	{
		$("body").append('<div id="pageloadingbox">页面加载中....</div><div id="pageloadingbg"></div>');
		$("#pageloadingbg").css("opacity", 0.5);
	 	var patrn=/^(请输入)/i; 
		var key=word; 
		$.get("/plus/ajax_search_location.php", {"act":"QS_jobslist","key":key,"page":1},
			function (data,textStatus)
			 {
				 window.location.href=data;
			 }
		);
	}