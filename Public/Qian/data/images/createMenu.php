<?php
//包含获取TOKEN的文件
require_once './getToken.php';

//请求创建菜单的APP接口，以及将TOKEN值作为超连接传给微信服务器
$MENU_URL="https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$res->access_token;

$data=<<<EOF
{
 "button":[{
       "name":"功能",
       "sub_button":[
        {
           "type":"click",
           "name":"查天气",
           "key":"ctq"
        },
		{
           "type":"click",
           "name":"查公交",
           "key":"cgj"
        },
        {
           "type":"click",
           "name":"查快递",
           "key":"ckd"
        },
		{
           "type":"click",
           "name":"中英互译",
           "key":"cfy"
        },
		{
			"type":"click",
			"name":"影片介绍",
			"key":"cyp"
		}]
  },
  {
       "name":"其它",
       "sub_button":[
        {
           "type":"view",
           "name":"个人项目",
           "url":"http://www.jushihan.top/wx/qita/project.html"
        },
        {
           "type":"view",
           "name":"个人简历",
           "url":"http://www.jushihan.top/wx/qita/tel.html" 
        }]
   },
   {
       "name":"查询",
	   "sub_button":[
		   {
				"type":"click",
				"name":"学生信息",
				"key":"cxs"
		   },
		   {
				"type":"click",
				"name":"企业信息",
				"key":"cqy"
		   },
		   {
				"type":"click",
				"name":"招聘信息",
				"key":"czp"
		   },
		   {
				"type":"click",
				"name":"求职信息",
				"key":"cqz"
		   },
		   {
				"type":"click",
				"name":"就业信息",
				"key":"cjy"
		   }]
   }]
}
EOF;
$ch = curl_init(); 

curl_setopt($ch, CURLOPT_URL, $MENU_URL); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_AUTOREFERER, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

$info = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Errno'.curl_error($ch);
}
curl_close($ch);

var_dump($info.'菜单创建成功');
?>
<meta charset='utf-8'>