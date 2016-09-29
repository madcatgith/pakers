<?php /* Smarty version Smarty-3.1.8, created on 2016-07-07 12:45:16
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpMenu/template_menu_5.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1767884259577e4edce922f8-29977880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd2902bd798221e22115047007674c89dcbc299b' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpMenu/template_menu_5.tpl',
      1 => 1464965625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1767884259577e4edce922f8-29977880',
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
  'unifunc' => 'content_577e4edcebd6e0_35540717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577e4edcebd6e0_35540717')) {function content_577e4edcebd6e0_35540717($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	<?php if (Menu::isActive($_smarty_tpl->tpl_vars['item']->value['id'])){?>
		<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

	<?php }?>
<?php } ?><?php }} ?>