<?php /* Smarty version Smarty-3.1.8, created on 2016-07-06 12:14:35
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpBanner/show_back.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1915884281577cf62bb02e97-62397593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48887f40d59f0977f64ff401fcc243d524123989' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpBanner/show_back.tpl',
      1 => 1465468422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1915884281577cf62bb02e97-62397593',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elements' => 0,
    'logo' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf62bb435f2_23082674',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf62bb435f2_23082674')) {function content_577cf62bb435f2_23082674($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
	<section class="section-promo valign-wrapper hide-on-tablet"
			style="
				background-color: rgba(255, 255, 255, 0.65);
				position: relative;
				overflow: hidden;
			">
		<div class="container valign-wrapper--justify">
			<div class="section-promo__logo">
				<img class="responsive" data-2x="../../images/common/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
@2x.png" src="<?php echo Config::get('logo');?>
" alt="<?php echo htmlspecialchars(Config::get('title'), ENT_QUOTES, 'utf-8', true);?>
"/>
			</div>
			<h1 class="section-promo__title"><?php echo Config::get('postal');?>
</h1>
		</div>
		<div
			style="
				position: absolute;
				top: 0;
				right: 0;
				left: 0;
				bottom: 0;
				z-index: -1;
			">
			<video class="section-promo valign-wrapper hide-on-tablet" loop="true" autoplay muted="true"
				style="
					min-height: 100%;
					min-width: 100%;
					width: auto;
					height: auto;
				">
				<source src="<?php echo $_smarty_tpl->tpl_vars['items']->value['image'];?>
" type="video/mp4">
			</video>
		</div>
	</section>
<?php } ?><?php }} ?>