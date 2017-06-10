/*
 * 定义一个用于多选的事件
 * 其中input[name=checks]为多选按钮
 * input[name=checks]为多选框
 */ 
$("input[name=checks]").click(
	function(){
			if($("input[name=checks]")[0].checked==true){
				$("input[name='check[]']").attr('checked',true);
			}
			else{
				$("input[name='check[]']").attr('checked',false);
			}
	}		 
 )
 //定义一个用于多删的事件
 $('#duoshan').click(
	function(){
		var $size=$("input[name='check[]']").length;
		var $y=false;
		for(var i=0;i<$size;i++){
			if($("input[name='check[]']")[i].checked==true){
				$y=true;
			}
		}
		if($y){
			return confirm('您确定要删除吗？');
		}
		else{
			alert('请至少选择一项！');
			return false;
		}
	}		 
 );
/*
 * #fanxuan是一个反选按钮
 * input[name='check[]']是多选框
 */
 $('#fanxuan').click(
		 function(){
				$("input[name='check[]']").each(
					function(){
						this.checked=!this.checked;
					}	
				);
		 }
 );