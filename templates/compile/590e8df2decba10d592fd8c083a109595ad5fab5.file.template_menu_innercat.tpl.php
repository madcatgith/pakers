<?php /* Smarty version Smarty-3.1.8, created on 2016-07-11 15:12:24
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpMenu/template_menu_innercat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:519530699577e5cc449af31-45298941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '590e8df2decba10d592fd8c083a109595ad5fab5' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpMenu/template_menu_innercat.tpl',
      1 => 1468249867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '519530699577e5cc449af31-45298941',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577e5cc44d7606_11773959',
  'variables' => 
  array (
    'menuArray' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577e5cc44d7606_11773959')) {function content_577e5cc44d7606_11773959($_smarty_tpl) {?>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
">
				<div class="b-catalog__item column-3 wow fadeInRight" data-wow-duration="800ms">
					<div class="img-wrap">
						<img class="responsive" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imgurl'];?>
" alt="catalog"/>
					</div>
					<a class="more-link" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span></a>
				</div>
			</a>
		<?php } ?><?php }} ?>