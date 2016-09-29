<?php /* Smarty version Smarty-3.1.8, created on 2016-07-11 16:19:56
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpContent/template_content_list_partners.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1090000671577cf79aef1364-81440622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0188860cd94c4edf14a3a46c4fb975faacb375ad' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpContent/template_content_list_partners.tpl',
      1 => 1468253993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1090000671577cf79aef1364-81440622',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf79b05a246_34334834',
  'variables' => 
  array (
    'contents' => 0,
    'counter' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf79b05a246_34334834')) {function content_577cf79b05a246_34334834($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable("100", null, 0);?>
<div class="container">
    <div class="content content-grid">
	<h3 class="section-title">Партнёры</h3>
	<div class="b-main-news column">
		<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value){
$_smarty_tpl->tpl_vars['content']->_loop = true;
?>
			<div class="b-main-news__item column-3 wow fadeInRight" data-wow-duration="800ms"
					data-wow-delay="<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
ms">
				<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+300, null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['counter']->value==1000){?>
					<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable(100, null, 0);?>
				<?php }?>
				<div class="img-wrap">
					<?php if ($_smarty_tpl->tpl_vars['content']->value['hasImage']){?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['content']->value['another_page'];?>
">
							<img class="responsive" src="<?php echo $_smarty_tpl->tpl_vars['content']->value['imgurl'];?>
" alt="news"/>
						</a>
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
    </div>
</div><?php }} ?>