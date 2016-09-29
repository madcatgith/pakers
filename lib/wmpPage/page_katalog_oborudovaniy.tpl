<main class="l-main">
    <div class="container">
        <div class="content content-grid">
            <aside class="content-grid__aside">
                <article>
                    <h3 class="section-title">Товар в наличии на складе</h3>
                    <p>
						<!--Текст сбоку-->
						{Content::getBody(Lang::getID(), 4)}
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
<section class="section section-faq m-grey">
    <div class="container">
        <h3 class="section-title">Интересно знать</h3>
        {Menu::getTreeByTemplate($langID,34,'info')}
    </div>
</section>        