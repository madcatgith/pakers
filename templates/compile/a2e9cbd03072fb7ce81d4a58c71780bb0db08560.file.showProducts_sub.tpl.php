<?php /* Smarty version Smarty-3.1.8, created on 2016-07-08 07:52:01
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpProductCatalogue/showProducts_sub.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2046889356577e7941ab3447-72982745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2e9cbd03072fb7ce81d4a58c71780bb0db08560' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpProductCatalogue/showProducts_sub.tpl',
      1 => 1467964209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2046889356577e7941ab3447-72982745',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577e7941b0d5f5_40981374',
  'variables' => 
  array (
    'products' => 0,
    'productsList' => 0,
    'product' => 0,
    'counter' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577e7941b0d5f5_40981374')) {function content_577e7941b0d5f5_40981374($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['productsList'] = new Smarty_variable(array_chunk($_smarty_tpl->tpl_vars['products']->value,3,true), null, 0);?>
<?php $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable("100", null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['products'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productsList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['products']->key => $_smarty_tpl->tpl_vars['products']->value){
$_smarty_tpl->tpl_vars['products']->_loop = true;
?>
                    <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getUrl();?>
">
				<div class="b-catalog__item column-3 wow fadeInRight" data-wow-duration="800ms"
								 data-wow-delay="<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
ms">
					<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+100, null, 0);?>
					<div class="img-wrap">
						<img class="responsive" src="<?php echo filesSmallGenerate(Image::mEncrypt(('height=253&src=').($_smarty_tpl->tpl_vars['product']->value->getImage())));?>
" alt="catalog"/>
					</div>
					<a class="more-link" href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getUrl();?>
"><span><?php echo $_smarty_tpl->tpl_vars['product']->value->getTitle();?>
</span></a>
				</div>
			</a>
                    <?php } ?>            
                <?php } ?>
<?php }} ?>