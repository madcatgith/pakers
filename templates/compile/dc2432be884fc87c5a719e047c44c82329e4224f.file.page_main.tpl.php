<?php /* Smarty version Smarty-3.1.8, created on 2016-07-06 12:14:35
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpPage/page_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199221103577cf62ba634c0-44513914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc2432be884fc87c5a719e047c44c82329e4224f' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpPage/page_main.tpl',
      1 => 1467806010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199221103577cf62ba634c0-44513914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aboveMenu' => 0,
    'langID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf62baf4b27_32300701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf62baf4b27_32300701')) {function content_577cf62baf4b27_32300701($_smarty_tpl) {?><!-- section promo-->
<?php echo Banner::show(2,'back');?>

<!--slider-->
<?php echo Controller::run('iblock/portfolio/slider');?>

<!-- main -->
<main class="l-main">
    <div class="container">
        <div class="content content-grid">
            <aside class="content-grid__aside">
                <article>
                    <h3 class="section-title">Товар в наличии на складе</h3>
                    <p>
						<?php echo $_smarty_tpl->tpl_vars['aboveMenu']->value;?>

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
<!-- section content-->
<section class="section section-content m-grey">
	<div class="container">
		<div class="content content-grid">
			<aside class="content-grid__aside">
				<article>
					<h3 class="section-title">О нас</h3>
					<!--Контент "О нас"-->
					<?php echo Config::get('about_us');?>

				</article>
			</aside>
			<div class="content-grid__main">
				<h3 class="section-title">Новости</h3>
				<div class="b-main-news column">
					<!--Контент новостей-->
					<?php echo Content::upContentList(Lang::getID(),13,'',0,3,true,'','newsformain');?>

				</div>
				<div class="b-main-news__bottom">
					<a class="b-main-news__show-all-link" href="http://stm.opt-fashion.com/novosti">Смотреть все новости</a>
				</div>
			</div>
		</div>
	</div>
</section><?php }} ?>