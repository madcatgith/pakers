<?php /* Smarty version Smarty-3.1.8, created on 2016-07-12 08:14:43
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpContent/template_content_list_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4967309065784a6f3054aa1-85150848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2caaad0e4fbf7ffc9e898deab358967c32f86861' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpContent/template_content_list_default.tpl',
      1 => 1468245881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4967309065784a6f3054aa1-85150848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contents' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5784a6f31153e2_38729199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784a6f31153e2_38729199')) {function content_5784a6f31153e2_38729199($_smarty_tpl) {?><div class="container">
<div class="content content-grid">
<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value){
$_smarty_tpl->tpl_vars['content']->_loop = true;
?>
	<div class="b-main-news__item column-3 wow fadeInRight" data-wow-duration="800ms"
			data-wow-delay="100ms" style="margin: 50px;">
		<div class="img-wrap">
			<?php if ($_smarty_tpl->tpl_vars['content']->value['hasImage']){?>
				<img class="responsive" src="<?php echo $_smarty_tpl->tpl_vars['content']->value['imgurl'];?>
" alt="news"/>
			<?php }?>
		</div>
		<h4><?php echo $_smarty_tpl->tpl_vars['content']->value['title'];?>
</h4>
		<p class="b-main-news__preview-text">
			<?php echo $_smarty_tpl->tpl_vars['content']->value['text'];?>

		</p>
	</div>
<?php } ?>
</div>
</div><?php }} ?>