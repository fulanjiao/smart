<?php
/* Smarty version 3.1.29, created on 2016-10-08 12:26:54
  from "D:\wamp\www\PHP\work\smart\templates\home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f8c9ee3e60f1_74135660',
  'file_dependency' => 
  array (
    '72a2d98cd50df49abfbc4143f3d04e257e6cc7bf' => 
    array (
      0 => 'D:\\wamp\\www\\PHP\\work\\smart\\templates\\home.tpl',
      1 => 1475922383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f8c9ee3e60f1_74135660 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<?php if ($_smarty_tpl->tpl_vars['name']->value == "Fred") {?>
		Welcome Sir.
	<?php } elseif ($_smarty_tpl->tpl_vars['name']->value == "Wilma") {?>
		Welcome Ma'am.
	<?php } else { ?>
		Welcome, whatever you are.
	<?php }?>
</body>
</html><?php }
}
