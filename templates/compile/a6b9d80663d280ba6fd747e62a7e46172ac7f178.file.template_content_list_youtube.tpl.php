<?php /* Smarty version Smarty-3.1.8, created on 2016-08-04 15:46:26
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpContent/template_content_list_youtube.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199271102457a3152e6a26b8-85280735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6b9d80663d280ba6fd747e62a7e46172ac7f178' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpContent/template_content_list_youtube.tpl',
      1 => 1470325584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199271102457a3152e6a26b8-85280735',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57a3152e6f96d4_51046224',
  'variables' => 
  array (
    'contents' => 0,
    'content' => 0,
    'counter' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a3152e6f96d4_51046224')) {function content_57a3152e6f96d4_51046224($_smarty_tpl) {?><div class="container" style="padding-left: 0px;">
    <div class="content content-grid">
		<h3 class="section-title"
			style="
				font-weight: 400;
				font-size: 24px;
			">YouTube каналы</h3>
		<?php $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable("100", null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value){
$_smarty_tpl->tpl_vars['content']->_loop = true;
?>

			<a href="<?php echo $_smarty_tpl->tpl_vars['content']->value['another_page'];?>
">
				<div class="b-catalog__item column-2 wow fadeInRight" data-wow-duration="800ms"
						 data-wow-delay="<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
ms"
						 style="
							width: auto;
							padding-left: 0px;
							margin-right: 50px;">
					<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+300, null, 0);?>
					<div style="margin-bottom: 20px;">
						<img class="responsive" src="<?php echo $_smarty_tpl->tpl_vars['content']->value['imgurl'];?>
" alt="catalog"/>
					</div>
					<a class="more-link" href="<?php echo $_smarty_tpl->tpl_vars['content']->value['another_page'];?>
" style="width: auto;">
						<span style="
							text-transform: none;
							font-weight: 500;
						"><?php echo $_smarty_tpl->tpl_vars['content']->value['title'];?>
</span>
					</a>
				</div>
			</a>
		<?php } ?>
    </div>
</div><?php }} ?>