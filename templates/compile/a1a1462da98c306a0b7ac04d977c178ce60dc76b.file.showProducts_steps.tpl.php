<?php /* Smarty version Smarty-3.1.8, created on 2016-07-07 13:18:13
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpProductCatalogue/showProducts_steps.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1363065254577e56959f2f87-95245697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1a1462da98c306a0b7ac04d977c178ce60dc76b' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpProductCatalogue/showProducts_steps.tpl',
      1 => 1464789743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1363065254577e56959f2f87-95245697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productsList' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577e5695a89c19_78958433',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577e5695a89c19_78958433')) {function content_577e5695a89c19_78958433($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productsList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
		<div class="b-catalog__item column-2 wow fadeInRight" data-wow-duration="800ms"
				data-wow-delay="100ms">
			<div class="img-wrap">
				<img class="responsive" src="<?php echo filesSmallGenerate(Image::mEncrypt(('height=253&src=').($_smarty_tpl->tpl_vars['product']->value->getImage())));?>
" alt="catalog"/>
			</div>
			<a class="more-link" href="#"><span><?php echo $_smarty_tpl->tpl_vars['product']->value->getTitle();?>
</span></a>
		</div>
<?php } ?><?php }} ?>