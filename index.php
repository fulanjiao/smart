<?php
/* 
变量修改 器
	格式：{$str|修改器1|修改器2}
	|capitalize	每个单子首字母大写
	|cat:"str"	连接一个字符串
	|date_format:"%Y/%m/%d"		安照指定格式输出日期
	|default:"str"	如果php不处理，则调用默认值
	|indent:数量n:'填充字符'		用指定的 填充字符 首行缩进 填充n个
	|lower/upper		全部变为小写/大写
	$str|replace:"str1":"str2"	把传入的 $str	中的str1替换成固定值str2



语法
$smarty->left_delimiter = "{";


	
 */
header("content-type:text/html;charset=utf-8");
require('./libs/Smarty.class.php');


$smarty = new Smarty(); //建立 smarty实例对象$smarty


$smarty->assign("str1", "my name is xiao jun, li."); //将str1替换成My Name Is Xiao Jun,Li.
$smarty->assign("str2", "我的名字叫："); //输出: 我的名字叫:李晓军
$smarty->assign("str3", "公元"); //输出公元 2004 年 8 月 21 日（我的当前时间）
$smarty->assign("str4", ""); //第四句不处理时会显示默认值，如果使用前面这一句则替换为""
$smarty->assign("str5", "前边 8 个*"); //第五句输出：********前边 8 个*
$smarty->assign("str6", "TEACHerLI@163.com"); //这里将输出 teacherli@163.com
$smarty->assign("str7", "this is teacherli"); //在模板中显示为：this is 李晓军
$smarty->assign("str8", "HERE IS COMBINING:");
//编译并显示位于./templates 下的 index.tpl 模板
$smarty->display("home.tpl");

