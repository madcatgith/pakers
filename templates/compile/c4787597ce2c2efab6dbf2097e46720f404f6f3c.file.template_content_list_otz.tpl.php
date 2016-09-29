<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 14:14:02
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpContent/template_content_list_otz.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1136342595577cf76e17fbb1-45384407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4787597ce2c2efab6dbf2097e46720f404f6f3c' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpContent/template_content_list_otz.tpl',
      1 => 1471356841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1136342595577cf76e17fbb1-45384407',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf76e1fb8e9_43362254',
  'variables' => 
  array (
    'contents' => 0,
    'k' => 0,
    'content' => 0,
    'counter' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf76e1fb8e9_43362254')) {function content_577cf76e1fb8e9_43362254($_smarty_tpl) {?><div class="callback-slider" style="float: right; width: 50%;">
	<div>
		<div class="content-grid__main">
			<div class="b-catalog column" style="margin: 1%;">
				<div class="container">
					<div class="content content-grid">
						<?php $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable("100", null, 0);?>
						<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['contents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value){
$_smarty_tpl->tpl_vars['content']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['content']->key;
?>
							<?php if ($_smarty_tpl->tpl_vars['k']->value!=0&&$_smarty_tpl->tpl_vars['k']->value%4==0){?>
								
								</div></div></div></div></div>
								<div>
									<div class="content-grid__main">
										<div class="b-catalog column" style="margin: 1%;">
											<div class="container">
												<div class="content content-grid">
							<?php }?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['content']->value['another_page'];?>
">
								<div class="b-catalog__item column-2 wow fadeInRight" data-wow-duration="800ms"
										 data-wow-delay="<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
ms">
									<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+300, null, 0);?>
									<div class="img-wrap">
										<img class="responsive" src="/image.php?<?php echo Image::mEncrypt(('width=200&height=200&src=').($_smarty_tpl->tpl_vars['content']->value['imgurl']));?>
" alt="catalog"/>
									</div>
									<a class="more-link" href="<?php echo $_smarty_tpl->tpl_vars['content']->value['another_page'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['content']->value['title'];?>
</span></a>
								</div>
							</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style scoped>
	.content-grid__main {
		width: 100%;
		float: none;
	}
	.slick-prev, .slick-next {
		display: block;
		position: relative;
		top: 270px;
		background: #fde428;
		color: #000;
		height: 10px;
		border: none;
		text-align: center;
		float: left;
		margin-left: 2rem;
		font-size: 0;
		padding: 15px;
		background: url('../../images/prev.jpg');
	}
	.slick-next {
		top: -285px;
		left: 540px;
		background: url('../../images/next.jpg');
	}
</style>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.callback-slider').slick();
		});
	</script>
<?php }} ?>