<?php
/* Smarty version 3.1.29, created on 2016-10-08 15:32:46
  from "D:\wamp\www\PHP\work\smart\templates\home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f8f57e4bbcf9_16320404',
  'file_dependency' => 
  array (
    '72a2d98cd50df49abfbc4143f3d04e257e6cc7bf' => 
    array (
      0 => 'D:\\wamp\\www\\PHP\\work\\smart\\templates\\home.tpl',
      1 => 1475933563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f8f57e4bbcf9_16320404 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'D:\\wamp\\www\\PHP\\work\\smart\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\PHP\\work\\smart\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) require_once 'D:\\wamp\\www\\PHP\\work\\smart\\libs\\plugins\\modifier.replace.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	1. 第一句首字母要大写：<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['str1']->value);?>
<br>
	2. 第二句模板变量 + 李晓军：<?php echo ($_smarty_tpl->tpl_vars['str2']->value).("李晓军");?>
<br>
	3. 第三句输出当前日期：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['str3']->value,"%Y/%m/%d");?>
<br>
	4. 第四句.php 程序中不处理，它显示默认值：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['str4']->value)===null||$tmp==='' ? "没有值！" : $tmp);?>
<br>
	5. 第五句要让它缩进 8 个空白字母位，并使用"*"取替这 8 个空白字符：<br>
	<?php echo preg_replace('!^!m',str_repeat('cA',8),$_smarty_tpl->tpl_vars['str5']->value);?>
}<br>
	6. 第六句把 TEACHerLI@163.com 全部变为小写：<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['str6']->value, 'UTF-8');?>
<br>
	7. 第七句把变量中的 teacherli 替换成：李晓军：<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['str7']->value,"teacherli","李晓军
	");?>
<br>
	8. 第 八句为组合使 用变 量修改 器： <?php echo mb_strtolower(smarty_modifier_date_format((smarty_modifier_capitalize($_smarty_tpl->tpl_vars['str8']->value)).("这 里 是 新加 的时 间：
	"),"%Y 年%m 月%d 日"), 'UTF-8');?>


</body>
</html><?php }
}
