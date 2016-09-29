<?php /* Smarty version Smarty-3.1.8, created on 2016-07-06 12:14:35
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpMenu/template_menu_li.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2018137148577cf62b348e08-18049788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45ab69a71ad4d70f5a716e3dd669bc6d4d697b98' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpMenu/template_menu_li.tpl',
      1 => 1464859865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2018137148577cf62b348e08-18049788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menuArray' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf62b36e024_67899689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf62b36e024_67899689')) {function content_577cf62b36e024_67899689($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
	<li <?php if (Menu::isActive($_smarty_tpl->tpl_vars['menu']->value['id'])){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value['href'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['title'], ENT_QUOTES, 'utf-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['title'];?>
</a></li>
<?php } ?><?php }} ?>