<?php /* Smarty version Smarty-3.1.8, created on 2016-07-15 11:05:11
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpMenu/template_menu_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:810881032577cf62b404e05-27073339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e99a6d9a7cbe19a1949cdabe55fd73df5f11622c' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpMenu/template_menu_1.tpl',
      1 => 1468580709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '810881032577cf62b404e05-27073339',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf62b42d502_71642475',
  'variables' => 
  array (
    'menuArray' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf62b42d502_71642475')) {function content_577cf62b42d502_71642475($_smarty_tpl) {?><div class="b-aside__menu">
	<ul class="b-aside__menu-list">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<?php if (Menu::isActive($_smarty_tpl->tpl_vars['item']->value['id'])){?>
				<li><a class="is-active" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span></a></li>
			<?php }else{ ?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span></a></li>
			<?php }?>
		<?php } ?>
	</ul>
</div><?php }} ?>