<?php
/* Smarty version 3.1.29, created on 2016-10-08 12:12:12
  from "D:\wamp\www\PHP\work\smart\templates\home.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f8c67c56adf7_99200554',
  'file_dependency' => 
  array (
    '00d7af80314a25ab123e6ae0024f275b6c1b8d2e' => 
    array (
      0 => 'D:\\wamp\\www\\PHP\\work\\smart\\templates\\home.html',
      1 => 1475921529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f8c67c56adf7_99200554 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
	
	Hello,<?php echo $_smarty_tpl->tpl_vars['exp']->value['name'];?>
!Good <?php echo $_smarty_tpl->tpl_vars['exp']->value['time'];?>

</body>
</html><?php }
}
