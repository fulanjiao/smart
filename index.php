<?php
/* 

普通变量
	template : {$name}
	php : $smarty->assign("name","value");
json类型
	template : {$exp.name} 	{$exp.time}	
	php : $arr=array("name"=>val1,"time"=>val2)	
		$smarty->assign("exp",$arr);

引入文件
	template : {include file="head.tpl"}
 */
header("content-type:text/html;charset=utf-8");
require('./libs/Smarty.class.php');
$smarty = new Smarty();


$smarty->assign("name","Wilma");

$smarty->display("home.tpl");





