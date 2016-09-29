<?php /* Smarty version Smarty-3.1.8, created on 2016-07-07 15:09:11
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpPage/page_products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100352051577e63968774c1-29452873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69009501773c6932ead0a0d3d1545285ed12eeec' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpPage/page_products.tpl',
      1 => 1467904094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100352051577e63968774c1-29452873',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577e63968f0f57_79364249',
  'variables' => 
  array (
    'langID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577e63968f0f57_79364249')) {function content_577e63968f0f57_79364249($_smarty_tpl) {?><section class="section-banner m-bg valign-wrapper hide-on-tablet">
    <?php echo Banner::show(3,'catalog');?>

</section>
<?php echo Menu::getCrumbs('1');?>

<main class="l-main l-main--catalog">
    <div class="container">
        <div class="content content-grid">
            <aside class="content-grid__aside">
                <h3 class="section-title">Каталог</h3>
				<?php echo Menu::getTreeByTemplate($_smarty_tpl->tpl_vars['langID']->value,Menu::getParentMenu($_smarty_tpl->tpl_vars['langID']->value,Url::get('menuID'),3),'1');?>

				<p class="text-center">
                    <a class="btn btn-product-check fullwidth wow slideInLeft" data-wow-duration="800ms"
                       data-wow-delay="600ms" href="http://stm.opt-fashion.com/kontaktyi">
                        <span class="arrow">&#10132;</span>
                        <span>Запрос на продукцию</span>
                    </a>
                </p>
            </aside>
            <!--<div class="content-grid__main">-->
				<?php echo Controller::run('/catalog/main');?>

                
                                
                                
            <!--</div>-->
        </div>
    </div>
</main>
<!-- section content-->
<section class="section section-faq m-grey">
    <div class="container">
        <h3 class="section-title">Интересно знать</h3>
        <div class="content b-faq column">
        </div>
    </div>
</section>

<?php }} ?>