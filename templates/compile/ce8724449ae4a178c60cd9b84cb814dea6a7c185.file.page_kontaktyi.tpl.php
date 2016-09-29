<?php /* Smarty version Smarty-3.1.8, created on 2016-08-17 09:13:25
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpPage/page_kontaktyi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1484434556577cfcfb08cd51-31556301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce8724449ae4a178c60cd9b84cb814dea6a7c185' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpPage/page_kontaktyi.tpl',
      1 => 1471425191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1484434556577cfcfb08cd51-31556301',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cfcfb1548c4_47257032',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cfcfb1548c4_47257032')) {function content_577cfcfb1548c4_47257032($_smarty_tpl) {?><div class="container container-main">
	<div class="mycontacts">
		<h1 class="section-title">Контакты</h1>
		<?php echo Content::getBody(Lang::getID(),8);?>

	</div>
	<div class="mymap">
		<div>
			<strong>Карта проезда</strong>
			<br />
			<br />
			Чтобы перемещаться по карте, нажмите и удерживайте левую кнопку мыши
		</div>
		<p><iframe id="map" width="100%" height="450" frameborder="0"></iframe></p>
		<p><noframes> Наше местонахождение на карте</noframes></p>
	</div>
</div>
<div class="container">
	<div class="content content-grid">
		<section class="section-callback">
			<?php echo Controller::run('forms/index');?>

			<a name="order"></a>
		</section>
	</div>
</div><?php }} ?>