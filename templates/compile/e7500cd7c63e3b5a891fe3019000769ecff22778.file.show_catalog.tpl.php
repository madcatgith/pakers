<?php /* Smarty version Smarty-3.1.8, created on 2016-07-06 12:14:35
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpBanner/show_catalog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:636397119577cf62b3b10a4-76034843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7500cd7c63e3b5a891fe3019000769ecff22778' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpBanner/show_catalog.tpl',
      1 => 1464947185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '636397119577cf62b3b10a4-76034843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elements' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf62b3c4654_44168884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf62b3c4654_44168884')) {function content_577cf62b3c4654_44168884($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
	<img class="section-banner__img" src="<?php echo $_smarty_tpl->tpl_vars['items']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['items']->value['title'];?>
"/>
<?php } ?><?php }} ?>