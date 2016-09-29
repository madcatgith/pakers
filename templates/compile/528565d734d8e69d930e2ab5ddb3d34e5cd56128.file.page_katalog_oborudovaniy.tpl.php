<?php /* Smarty version Smarty-3.1.8, created on 2016-07-12 12:19:17
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpPage/page_katalog_oborudovaniy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1200009425577cf6f615dce0-66985682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '528565d734d8e69d930e2ab5ddb3d34e5cd56128' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpPage/page_katalog_oborudovaniy.tpl',
      1 => 1468325957,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1200009425577cf6f615dce0-66985682',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf6f61d0140_57601238',
  'variables' => 
  array (
    'langID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf6f61d0140_57601238')) {function content_577cf6f61d0140_57601238($_smarty_tpl) {?><main class="l-main">
    <div class="container">
        <div class="content content-grid">
            <aside class="content-grid__aside">
                <article>
                    <h3 class="section-title">Товар в наличии на складе</h3>
                    <p>
						<!--Текст сбоку-->
						<?php echo Content::getBody(Lang::getID(),4);?>

                    </p>
                    <p class="text-center">
                        <a class="btn btn-product-check fullwidth wow slideInLeft" data-wow-duration="800ms"
                               data-wow-delay="600ms" href="http://stm.opt-fashion.com/kontaktyi#order">
							<span class="arrow">&#10132;</span>
                            <span>Запрос на продукцию</span>
                        </a>
                    </p>
                </article>
            </aside>
            <!--Каталоги(подменю "Каталогов")-->
			<?php echo Menu::getTreeByTemplate($_smarty_tpl->tpl_vars['langID']->value,4,'2');?>

        </div>
    </div>
</main>
<section class="section section-faq m-grey">
    <div class="container">
        <h3 class="section-title">Интересно знать</h3>
        <?php echo Menu::getTreeByTemplate($_smarty_tpl->tpl_vars['langID']->value,34,'info');?>

    </div>
</section>        <?php }} ?>