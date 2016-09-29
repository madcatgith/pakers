<?php /* Smarty version Smarty-3.1.8, created on 2016-07-06 12:14:35
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpBanner/show_socials.tpl" */ ?>
<?php /*%%SmartyHeaderCode:477271556577cf62b2f02a8-36543088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc2bbb944ff21f3ad3fe9bd2f914158acab3e5f1' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpBanner/show_socials.tpl',
      1 => 1464702270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '477271556577cf62b2f02a8-36543088',
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
  'unifunc' => 'content_577cf62b304c53_02966223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf62b304c53_02966223')) {function content_577cf62b304c53_02966223($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['items']->value['href'];?>
" class="icon-<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['items']->value['title'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
"></a>
<?php } ?><?php }} ?>