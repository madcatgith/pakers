<?php /* Smarty version Smarty-3.1.8, created on 2016-07-07 12:40:00
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpMenu/template_menu_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1592844523577cf62bb88367-59180162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1b7b3bb0696265dd3c8e4ee95832dd5770dfdee' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpMenu/template_menu_2.tpl',
      1 => 1467895195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1592844523577cf62bb88367-59180162',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf62bbc3058_68873583',
  'variables' => 
  array (
    'menuArray' => 0,
    'item' => 0,
    'counter' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf62bbc3058_68873583')) {function content_577cf62bbc3058_68873583($_smarty_tpl) {?><div class="content-grid__main">
    <div class="b-catalog column">
		<?php $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable("100", null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
">
				<div class="b-catalog__item column-2 wow fadeInRight" data-wow-duration="800ms"
								 data-wow-delay="<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
ms">
					<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+300, null, 0);?>
					<div class="img-wrap">
						<img class="responsive" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imgurl'];?>
" alt="catalog"/>
					</div>
					<a class="more-link" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span></a>
				</div>
			</a>
		<?php } ?>
	</div>
</div><?php }} ?>