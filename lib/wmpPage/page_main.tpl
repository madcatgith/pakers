<!-- section promo-->
{Banner::show(2, 'back')}
<!--slider-->
{Controller::run('iblock/portfolio/slider')}
<!-- main -->
<main class="l-main">
    <div class="container">
        <div class="content content-grid">
            <aside class="content-grid__aside">
                <article>
                    <h3 class="section-title">Товар в наличии на складе</h3>
                    <p>
						{$aboveMenu}
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
			{Menu::getTreeByTemplate($langID, 4, '2')}
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
					{Config::get('about_us')}
				</article>
			</aside>
			<div class="content-grid__main">
				<h3 class="section-title">Новости</h3>
				<div class="b-main-news column">
					<!--Контент новостей-->
					{Content::upContentList(Lang::getID(), 13, '', 0, 3, true, '', 'newsformain')}
				</div>
				<div class="b-main-news__bottom">
					<a class="b-main-news__show-all-link" href="http://stm.opt-fashion.com/novosti">Смотреть все новости</a>
				</div>
			</div>
		</div>
	</div>
</section>