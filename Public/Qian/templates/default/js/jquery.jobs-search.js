function allaround(templatedir,dir,jobslisturl,getkey,getarr)
{
	var  href="javascript:void(0);";
	get=getarr.split(",");
	var opthtm='';
	opthtm+='<div class="s1">';
	opthtm+='<div class="litit keysel">������</div>';
	opthtm+='<div class="littxt">';
	opthtm+='<div class="keybox">';
	opthtm+='<div id="searcform" >';
	opthtm+='<div class="keyinputbox">';
	opthtm+='<input name="key" type="text" id="key" maxlength="25" value="'+getkey+'"/>';
	opthtm+='</div>';
	opthtm+='<input name="category" type="hidden" value="'+get[0]+'" />';
	opthtm+='<input name="subclass" type="hidden" value="'+get[1]+'" />';
	opthtm+='<input name="district" type="hidden" value="'+get[2]+'" />';
	opthtm+='<input name="sdistrict" type="hidden" value="'+get[3]+'" />';
	opthtm+='<input name="settr" type="hidden" value="'+get[4]+'" />';
	opthtm+='<input name="trade" type="hidden" value="'+get[5]+'" />';
	opthtm+='<input name="wage" type="hidden" value="'+get[6]+'" />';
	opthtm+='<input name="nature" type="hidden" value="'+get[7]+'" />';
	opthtm+='<input name="scale" type="hidden" value="'+get[8]+'" />';
	opthtm+='<input name="inforow" type="hidden" value="'+get[9]+'" />';
	opthtm+='<input name="sort" type="hidden" value="" />';
	opthtm+='<input name="page" type="hidden" value="1" />';
	opthtm+='<div class="subinputbox"><input type="button" name=""  id="soall" value="��ȫ��" /></div>';
	if (get[0]+get[1]+get[2]+get[3]+get[4]+get[5]+get[6]+get[7]+get[8])
	{
	opthtm+='<div class="subinputbox1"><input type="button" name="" id="socat"  value="�ѱ���" /></div>';
	}
	opthtm+='</div>';
	opthtm+='</div>	';			
	opthtm+='<div class="keymore link_orange"><a href="'+href+'" id="advopen">�߼�����</a></div>';
	opthtm+='<div class="clear"></div>';
	opthtm+='</div>';
	opthtm+='<div class="clear"></div>'; 
		opthtm+='<div class="litit csel">ְλ��</div>';
		opthtm+='<div class="littxt">';
		opthtm+='<ul class="link_bk">';  
		var len=QS_jobs_parent.length;
		minlen=len>18?17:len;
		for(var i=0;i<minlen;i++)
		{
		arr    =QS_jobs_parent[i].split(",");
		if(get[0]==arr[0]){ 
		opthtm+='<li><span  id="category-'+arr[0]+'"  class="opt">'+arr[1]+'</span></li>';
		}else{
		opthtm+='<li><a href="'+href+'" id="category-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
		}
		}
		if (len>18)
		{
			for(var i=minlen;i<len;i++)
			{
			arr    =QS_jobs_parent[i].split(",");
			if(get[0]==arr[0]){ 
		    opthtm+='<li><span  id="category-'+arr[0]+'"  class="opt">'+arr[1]+'</span></li>';
		}else{
		    opthtm+='<li class="hide"><a href="'+href+'" id="category-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
		} 
			}
			opthtm+='<li class="more"><a href="'+href+'">����</a></li>';
		}
		opthtm+='</ul>';
		opthtm+='<div class="clear"></div>';
		opthtm+='</div>';	
		opthtm+='<div class="clear"></div>';
		subclassstr=QS_jobs[get[0]];
		if (subclassstr)//���������
		{ 
					arrsubclass=subclassstr.split("|");
					var len=arrsubclass.length;
					if (len>0)
					{
							opthtm+='<div class="litit csel"></div>';
							opthtm+='<div class="littxt sub-type">';
							opthtm+='<ul class="link_bk">';		
							minlen=len>12?11:len;
							for(var i=0;i<minlen;i++)
							{
							arr    =arrsubclass[i].split(",");
							if(get[1]==arr[0]){ 
		                    opthtm+='<li><span  id="subclass-'+arr[0]+'"  class="opt">'+arr[1]+'</span></li>';
		                    }else{
		                    opthtm+='<li><a href="'+href+'" id="subclass-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	                       	} 
							}
							if (len>12)
							{
								for(var i=minlen;i<len;i++)
								{
								arr    =arrsubclass[i].split(",");
							if(get[1]==arr[0]){ 
		                    opthtm+='<li><span  id="subclass-'+arr[0]+'"  class="opt">'+arr[1]+'</span></li>';
		                    }else{
		                    opthtm+='<li class="hide"><a href="'+href+'" id="subclass-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	                       	}   
							}
								opthtm+='<li class="more"><a href="'+href+'">����</a></li>';
							}
							opthtm+='</ul>';
							opthtm+='<div class="clear"></div>';
							opthtm+='</div>';	
							opthtm+='<div class="clear"></div>';
					} 
		} 
		opthtm+='<div class="litit csel">������</div>';
		opthtm+='<div class="littxt">';
		opthtm+='<ul class="link_bk min">';
		var len=QS_city_parent.length;
		minlen=len>16?15:len;
		for(var i=0;i<minlen;i++)
		{
		arr    =QS_city_parent[i].split(",");
		if(get[2]==arr[0]){ 
		opthtm+='<li><span  id="district-'+arr[0]+'"  class="opt">'+arr[1]+'</span></li>';
		}else{
		 opthtm+='<li><a href="'+href+'" id="district-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	    }  
		}
		if (len>16)
		{
			for(var i=minlen;i<len;i++)
			{
			arr    =QS_city_parent[i].split(",");
			if(get[2]==arr[0]){ 
		     opthtm+='<li><span  id="district-'+arr[0]+'"  class="opt">'+arr[1]+'</span></li>';
		     }else{
		     opthtm+='<li class="hide"><a href="'+href+'" id="district-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	          } 
			}
			opthtm+='<li class="more"><a href="'+href+'">����</a></li>';
		}
		opthtm+='</ul>';
		opthtm+='<div class="clear"></div>';
		opthtm+='</div>';
		opthtm+='<div class="clear"></div>';
		sdistrictstr=QS_city[get[2]];
		if (sdistrictstr)//���������
		{
					arrsubclass=sdistrictstr.split("|");
					var len=arrsubclass.length;
					if (len>0)
					{
							opthtm+='<div class="litit csel"></div>';
							opthtm+='<div class="littxt sub-type">';
							opthtm+='<ul class="link_bk">';		
							minlen=len>12?11:len;
							for(var i=0;i<minlen;i++)
							{
							arr    =arrsubclass[i].split(",");
							if(get[3]==arr[0]){ 
		                    opthtm+='<li><span  id="sdistrict-'+arr[0]+'"  class="opt">'+arr[1]+'</span></li>';
		                    }else{
		                    opthtm+='<li><a href="'+href+'" id="sdistrict-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	                       	}  
							}
							if (len>12)
							{
								for(var i=minlen;i<len;i++)
								{
								arr    =arrsubclass[i].split(","); 
							if(get[3]==arr[0]){ 
		                    opthtm+='<li><span  id="sdistrict-'+arr[0]+'" class="opt">'+arr[1]+'</span></li>';
		                    }else{
		                    opthtm+='<li class="hide"><a href="'+href+'" id="sdistrict-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	                       	}
								}
								opthtm+='<li class="more"><a href="'+href+'">����</a></li>';
							}
							opthtm+='</ul>';
							opthtm+='<div class="clear"></div>';
							opthtm+='</div>';	
							opthtm+='<div class="clear"></div>'; 
		}
	}
	opthtm+='<div class="litit csel">ʱ�䣺</div>';
	opthtm+='<div class="littxt min">';
	opthtm+='<ul class="link_bk min">';	
	if (get[4]=='')
	{
	opthtm+='<li><a href="'+href+'" id="settr-3"  class="opt">һ����</a></li>';
	opthtm+='<li><a href="'+href+'" id="settr-7"  class="opt">һ����</a></li>';
	opthtm+='<li><a href="'+href+'" id="settr-15" class="opt">������</a></li>';
	opthtm+='<li><a href="'+href+'" id="settr-30" class="opt">һ����</a></li>';
	}
	else
	{
	opthtm+='<li><span  id="settr-'+get[4]+'">'+get[4]+'����</span></li>';
	}
	opthtm+='</ul>';
	opthtm+='<div class="clear"></div>';
	opthtm+='</div>';
	opthtm+='<div class="clear"></div>';
	opthtm+='<div class="litit csel">��н��</div>';
	opthtm+='<div class="littxt min">';
	opthtm+='<ul class="link_bk min">';
		for(var i=0;i<QS_wage.length;i++)
		{
		arr    =QS_wage[i].split(",");
		if(get[6]==arr[0]){ 
		opthtm+='<li><span  id="wage-'+arr[0]+'"  class="opt">'+arr[1]+'</span></li>';
		}else{
		 opthtm+='<li><a href="'+href+'" id="wage-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	    } 
		} 
	opthtm+='</ul>';
	opthtm+='<div class="clear"></div>';
	opthtm+='</div>';
	opthtm+='<div class="clear"></div>';
	opthtm+='<div class="advbox" id="advbox">';
	opthtm+='<div class="litit csel">���ʣ�</div>';
	opthtm+='<div class="littxt min">';
	opthtm+='<ul class="link_bk min">';
		for(var i=0;i<QS_jobsnature.length;i++)
		{
		arr    =QS_jobsnature[i].split(",");
		if(get[7]==arr[0]){ 
		opthtm+='<li><span  id="nature-'+arr[0]+'"  class="opt">'+arr[1]+'</span></li>';
		}else{
		 opthtm+='<li><a href="'+href+'" id="nature-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	    }  
		}
	 
	opthtm+='</ul>';
	opthtm+='<div class="clear"></div>';
	opthtm+='</div>';
	opthtm+='<div class="clear"></div>';
	opthtm+='<div class="litit csel">��ģ��</div>';
	opthtm+='<div class="littxt min">';
	opthtm+='<ul class="link_bk min">';
		for(var i=0;i<QS_scale.length;i++)
		{
		arr    =QS_scale[i].split(",");
		if(get[8]==arr[0]){ 
		opthtm+='<li><span  id="scale-'+arr[0]+'"  class="opt">'+arr[1]+'</span></li>';
		}else{
		 opthtm+='<li><a href="'+href+'" id="scale-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	    }  
		}
	opthtm+='</ul>';
	opthtm+='<div class="clear"></div>';
	opthtm+='</div>';
	opthtm+='<div class="clear"></div>';
	opthtm+='<div class="litit csel">��ҵ��</div>';
	opthtm+='<div class="littxt">';
	opthtm+='<ul class="link_bk">';
		var len=QS_trade.length;
		minlen=len>12?11:len;
		for(var i=0;i<minlen;i++)
		{
		arr    =QS_trade[i].split(",");
		if(get[5]==arr[0]){ 
		opthtm+='<li><span  id="trade-'+arr[0]+'"  class="opt">'+arr[1]+'</span></li>';
		}else{
		 opthtm+='<li><a href="'+href+'" id="trade-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	    }   
		}
		if (len>12)
		{
			for(var i=minlen;i<len;i++)
			{
			arr    =QS_trade[i].split(",");
		if(get[5]==arr[0]){ 
		opthtm+='<li><span  id="trade-'+arr[0]+'"  class="opt">'+arr[1]+'</span></li>';
		}else{
		 opthtm+='<li class="hide"><a href="'+href+'" id="trade-'+arr[0]+'"  class="opt">'+arr[1]+'</a></li>';
	    } 
			}
			opthtm+='<li class="more"><a href="'+href+'">����</a></li>';
		}
	opthtm+='</ul>';
	opthtm+='<div class="clear"></div>';
	opthtm+='</div>';
	opthtm+='<div class="clear"></div>';
	opthtm+='</div>';
	opthtm+='<div class="bottomheight"></div>';
	opthtm+='<div class="myselbox" id="myselbox"><div class="left">��ѡ������</div><div class="optcentet"></div><div class="right"><div class="clearoptall"><a  href="'+href+'" class="clearall">�������</a></div></div><div class="clear"></div>';
	opthtm+='</div>';
	$("#jobsearchbox").html(opthtm);
	//�򿪸���ѡ��
	$(".more a").click(function ()
	{
		if ($(this).parent().prev().css('display')=='none')
		{
			$(this).parent().prevAll('.hide').css("display",'block');
			$(this).html('����').blur();
		}
		else
		{
			$(this).parent().prevAll('.hide').css("display",'none');
			$(this).html('����').blur();
		}
	
	});	
	//��ʾ��ѡ
	 var patrn=/^(������ְλ����)/i; 
		if (patrn.exec(getkey))
		{
			getkey='';
		}
	var selopt=getkey+get[0]+get[1]+get[2]+get[3]+get[4]+get[5]+get[6]+get[7]+get[8];
	if (selopt!='')
	{
		selbox=$("#myselbox .optcentet");
		if (getkey)	{
		selbox.append('<a href="'+href+'" class="clearopt" id="key-'+getkey+'" title="���ȡ��"><u>�ؼ���:</u>'+getkey+'</a>');
		}
		if (get[0])	{
		var optval=$('#category-'+get[0]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="category-'+get[0]+'" title="���ȡ��"><u>ְλ:</u>'+optval+'</a>');
		}
		if (get[1])	{
		var optval=$('#subclass-'+get[1]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="subclass-'+get[1]+'" title="���ȡ��"><u>ְλ����:</u>'+optval+'</a>');
		}
		if (get[2])	{
		var optval=$('#district-'+get[2]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="district-'+get[2]+'" title="���ȡ��"><u>����:</u>'+optval+'</a>');
		}
		if (get[3])	{
		var optval=$('#sdistrict-'+get[3]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="sdistrict-'+get[3]+'" title="���ȡ��"><u>��������:</u>'+optval+'</a>');
		}
		if (get[4])	{
		var optval=$('#settr-'+get[4]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="settr-'+get[4]+'" title="���ȡ��"><u>����:</u>'+optval+'</a>');
		}
		if (get[5])	{
		var optval=$('#trade-'+get[5]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="trade-'+get[5]+'" title="���ȡ��"><u>��ҵ:</u>'+optval+'</a>');
		}
		if (get[6])	{
		var optval=$('#wage-'+get[6]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="wage-'+get[6]+'" title="���ȡ��"><u>����:</u>'+optval+'</a>');
		}
		if (get[7])	{
		var optval=$('#nature-'+get[7]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="nature-'+get[7]+'" title="���ȡ��"><u>ְλ����:</u>'+optval+'</a>');
		}
		if (get[8])	{
		var optval=$('#scale-'+get[8]).html();
		selbox.append('<a href="'+href+'" class="clearopt" id="scale-'+get[8]+'" title="���ȡ��"><u>��˾��ģ:</u>'+optval+'</a>');
		}
		selbox.append('<div class="clear"></div>');
		$("#jobsearchbox").css('padding-bottom',0);
		$("#myselbox").show();
		//ɾ������
		$(".clearopt").click(function () {
		var patrn=/^(������ְλ����)/i; 
	 	var key=$("#key").val();
		if (patrn.exec(key)) $("#key").val('');
			var opt=$(this).attr('id');
			opt=opt.split("-");
		$("#searcform input[name="+opt[0]+"]").val('');
		if (opt[0]=="category") $("#searcform input[name='subclass']").val('');//ȡ�����࣬ͬʱȡ������
		if (opt[0]=="district") $("#searcform input[name='sdistrict']").val('');//ȡ�����࣬ͬʱȡ������
		flag=false;
		setTimeout(function() {
		search_location();
		}, 1);
		});
		//ɾ������
		$(".clearall").click(function () {
		$("#searcform input[type='hidden']").val('');
		$("#searcform input[name='key']").val('');
		setTimeout(function() {
		search_location();
		}, 1);
		});	
	}
	//�Ƿ���ʾ��������
	if (get[5]+get[6]+get[7]+get[8])
	{
		$("#advbox").show();
	}
	//��������
	if($("#advbox").css('display')=='none')
	{
		$(".keymore").css('background-position','40px -64px');
		$(".keymore a").html("��ʾ��������");
	}
	else
	{
		$(".keymore").css('background-position','40px -98px');
		$(".keymore a").html("���ظ�������");
	}
	//�򿪸�������
	$("#advopen").click(function () {
	if($("#advbox").css('display')=='none')
	{
		$(".keymore").css('background-position','40px -98px');
		$(".keymore a").html("���ظ�������");
	}
	else
	{
		$(".keymore").css('background-position','40px -64px');
		$(".keymore a").html("��ʾ��������");
	}
	$("#advbox").slideToggle(80);
	});	
	//
	var flag=true;
	//����Ŀѡ��
	$(".opt").click(function (){ 
	var patrn=/^(������ְλ����)/i; 
	 	var key=$("#key").val();
		if (patrn.exec(key))
		{
			$("#key").val('');
		}
	var opt=$(this).attr('id');
	    opt=opt.split("-"); 
	if(opt[0]=='category')$("#searcform input[name=subclass]").val('');
	if(opt[0]=='district')$("#searcform input[name=sdistrict]").val('');
	if(opt[0]=='category')$("#searcform input[name=subclass]").val('');
	$("#searcform input[name="+opt[0]+"]").val(opt[1]);
	flag=false;
	setTimeout(function() {
	search_location();
	}, 1);
	});
	//�ѱ���
	$("#socat").click(function () {
		//�ѱ���
	 	flag=false;
		setTimeout(function() {
		search_location();
		}, 1);
	});
	$("#soall").click( function () {
		if (flag)//����ȫ�������ѡ��
		{			
			$("#searcform input[type='hidden']").val('');
		}
		var patrn=/^(������ְλ����)/i; 
	 	var key=$("#key").val();
		if (patrn.exec(key))
		{
			$("#key").val('');
		}
		search_location();
	});
	
	$("#key").focus(function(){
		var patrn=/^(������ְλ����)/i; 
	 	var key=$("#key").val();
		if (patrn.exec(key))
		{
		$("#key").css('color','').val('');
		}  
	});
	$('#searcform input[name=key]').keydown(function(e){
	if(e.keyCode==13){
   search_location()
	}
	});
	function search_location()
	{
		$("body").append('<div id="pageloadingbox">ҳ�������....</div><div id="pageloadingbg"></div>');
		$("#pageloadingbg").css("opacity", 0.5);
		var key=$("#searcform input[name=key]").val();
		var category=$("#searcform input[name=category]").val();
		var subclass=$("#searcform input[name=subclass]").val();
		var district=$("#searcform input[name=district]").val();
		var sdistrict=$("#searcform input[name=sdistrict]").val();
		var settr=$("#searcform input[name=settr]").val();
		var trade=$("#searcform input[name=trade]").val();
		var wage=$("#searcform input[name=wage]").val();
		var nature=$("#searcform input[name=nature]").val();
		var scale=$("#searcform input[name=scale]").val();
		var inforow=$("#searcform input[name=inforow]").val();
		var sort_1=$("#searcform input[name=sort]").val();
		var page=$("#searcform input[name=page]").val();
		$.get(dir+"plus/ajax_search_location.php", {"act":"QS_jobslist","key":key,"category":category,"subclass":subclass,"district":district,"sdistrict":sdistrict,"settr":settr,"trade":trade,"wage":wage,"nature":nature,"scale":scale,"inforow":inforow,"sort":sort_1,"page":page},
			function (data,textStatus)
			 {
				 window.location.href=data;
			 },"text"
		);
	}
	//������ɺ�ִ�йؼ�����ʾ
	$(document).ready(function()
	{
		$.getScript(templatedir+"js/jquery.autocomplete.js", function(){
				 var a = $('#key').autocomplete({ 
					serviceUrl:dir+'plus/ajax_common.php?act=hotword',
					minChars:1, 
					maxHeight:300,
					width:341,
					zIndex: 9999,
					deferRequestBy: 0 
				 });
		});
	});
}