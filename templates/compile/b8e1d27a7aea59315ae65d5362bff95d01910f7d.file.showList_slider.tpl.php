<?php /* Smarty version Smarty-3.1.8, created on 2016-08-15 15:55:20
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpIBlock/portfolio/showList_slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:800839924577cf62bb57325-64291809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8e1d27a7aea59315ae65d5362bff95d01910f7d' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpIBlock/portfolio/showList_slider.tpl',
      1 => 1471276471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '800839924577cf62bb57325-64291809',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf62bb80027_77027879',
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf62bb80027_77027879')) {function content_577cf62bb80027_77027879($_smarty_tpl) {?><!-- section slider-->
<section class="section-slider">
	<div class="b-slider-control">
		<a class="slider-trigger-prev slick-arrow" href="#" style="display: block;">prev</a>
		<a class="slider-trigger-next slick-arrow" href="#" style="display: block;">next</a>
	</div>
	<div class="main-slider">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<div class="item">
				<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->get('logo');?>
" alt="slide"/>
				<div class="description">
					<h3 class="section-title"><?php echo $_smarty_tpl->tpl_vars['item']->value->get('title');?>
</h3>
					<p>
						<?php echo $_smarty_tpl->tpl_vars['item']->value->get('announce');?>

					</p>
					<p>
						<?php echo $_smarty_tpl->tpl_vars['item']->value->get('text');?>

					</p>
				</div>
			</div>
		<?php } ?>
	</div>
	<div class="section-slider__content container">
		<div class="content-grid__aside">
			<div class="slide-description">
			</div>
			<div class="b-slider-control">
				<a class="slider-trigger-prev" href="#" style="display: inline-block;">prev</a>
				<a class="slider-trigger-next" href="#" style="display: inline-block;">next</a>
			</div>
		</div>
	</div>
</section><?php }} ?>