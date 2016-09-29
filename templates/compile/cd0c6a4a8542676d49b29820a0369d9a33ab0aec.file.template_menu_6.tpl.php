<?php /* Smarty version Smarty-3.1.8, created on 2016-07-06 12:16:56
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpMenu/template_menu_6.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1928813696577cf6b82b70f3-49104689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd0c6a4a8542676d49b29820a0369d9a33ab0aec' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpMenu/template_menu_6.tpl',
      1 => 1465208501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1928813696577cf6b82b70f3-49104689',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menuArray' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf6b82dc2f2_61215462',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf6b82dc2f2_61215462')) {function content_577cf6b82dc2f2_61215462($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
<?php } ?><?php }} ?>