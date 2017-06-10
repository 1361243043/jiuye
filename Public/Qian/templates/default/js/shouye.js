/*
 * 建立用户文本框和密码框的点击事件
 */
$("input[name='uname']").click(
		function(){
			this.value='';
		}		
	);
$("input[name='pwd']").click(
		function(){
			this.value='';
		}		
);