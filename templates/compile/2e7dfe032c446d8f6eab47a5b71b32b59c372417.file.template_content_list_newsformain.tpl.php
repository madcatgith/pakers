<?php /* Smarty version Smarty-3.1.8, created on 2016-07-11 12:50:55
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpContent/template_content_list_newsformain.tpl" */ ?>
<?php /*%%SmartyHeaderCode:638682281577cf62bbcdc64-22388743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e7dfe032c446d8f6eab47a5b71b32b59c372417' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpContent/template_content_list_newsformain.tpl',
      1 => 1468241256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '638682281577cf62bbcdc64-22388743',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf62bc15945_48525767',
  'variables' => 
  array (
    'contents' => 0,
    'content' => 0,
    'counter' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf62bc15945_48525767')) {function content_577cf62bc15945_48525767($_smarty_tpl) {?><div class="container">
<div class="content content-grid">
<?php $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable("100", null, 0);?>
<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value){
$_smarty_tpl->tpl_vars['content']->_loop = true;
?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['content']->value['href'];?>
">
		<div class="b-main-news__item column-3 wow fadeInRight" data-wow-duration="800ms"
				data-wow-delay="<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
ms">
				<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+300, null, 0);?>
			<div class="img-wrap">
				<?php if ($_smarty_tpl->tpl_vars['content']->value['hasImage']){?>
					<img class="responsive" src="<?php echo $_smarty_tpl->tpl_vars['content']->value['imgurl'];?>
" alt="news"/>
				<?php }?>
			</div>
			<h4><?php echo $_smarty_tpl->tpl_vars['content']->value['title'];?>
</h4>
			<p class="b-main-news__preview-text">
				<?php echo $_smarty_tpl->tpl_vars['content']->value['announcement'];?>

			</p>
			<a class="more-link" href="<?php echo $_smarty_tpl->tpl_vars['content']->value['href'];?>
"></a>
		</div>
	</a>
<?php } ?>
</div>
</div><?php }} ?>