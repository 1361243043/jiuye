<?php
/*
 * 建立前台的入口文件
 * @data 2015/10/20
 * @author 汤永胜
 */
	//给项目起名
	define('APP_NAME','Index');
	
	//以入口文件为相对路径创建项目路径
	define('APP_PATH','./Index/');
	
	//开启调试模式
	define('APP_DEBUG',true);
	
	//包含think.php文件
	require('./ThinkPHP/ThinkPHP.php');
?>
