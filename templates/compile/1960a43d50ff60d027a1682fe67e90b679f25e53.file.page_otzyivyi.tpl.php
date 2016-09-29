<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 12:40:09
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpPage/page_otzyivyi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1767030552577cf76e0f8247-99923310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1960a43d50ff60d027a1682fe67e90b679f25e53' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpPage/page_otzyivyi.tpl',
      1 => 1471351179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1767030552577cf76e0f8247-99923310',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf76e16e8a8_31643118',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf76e16e8a8_31643118')) {function content_577cf76e16e8a8_31643118($_smarty_tpl) {?><div class="container container-main">
	<!--<style scoped>
		@media(min-width: 980px) {
			.content-grid__main {
				float: right;
				width: 40%;
			}
		}
	</style>-->
	<?php echo Content::upContentList(Lang::getID(),5,'',0,24,true,'','otz');?>

	<section class="section-callback">
		<?php echo Controller::run('forms/feedback');?>

	</section>
</div><?php }} ?>