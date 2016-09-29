<!--<section class="section-banner m-bg valign-wrapper hide-on-tablet">
    {*Banner::show(3, 'catalog')*}
</section>-->
{Menu::getCrumbs('1')}
<main class="l-main l-main--catalog">
    <div class="container">
        <div class="content content-grid">
            <aside class="content-grid__aside">
                <h3 class="section-title">Каталог</h3>
				{Menu::getTreeByTemplate($langID, 4, '1')}
				<p class="text-center">
                    <a class="btn btn-product-check fullwidth wow slideInLeft" data-wow-duration="800ms"
                       data-wow-delay="600ms" href="http://stm.opt-fashion.com/kontaktyi">
                        <span class="arrow">&#10132;</span>
                        <span>Запрос на продукцию</span>
                    </a>
                </p>
            </aside>
            <!--<div class="content-grid__main">-->
				{Controller::run('/catalog/main')}
                
                      
                        {*Menu::getTreeByTemplate($langID, Url::get('menuID'), 'innercat')*}
                           
                                
            <!--</div>-->
        </div>
    </div>
</main>
<!-- section content-->
<section class="section section-faq m-grey">
    <div class="container">
        <h3 class="section-title">Интересно знать</h3>
        {Menu::getTreeByTemplate($langID,34,'info')}
    </div>
</section>

<script>
/* $(document).ready(function(){
     $(".b-catalog__item").each(function(i){
        $(this).attr('data-wow-delay',((i*100)+200)+'ms');
    });
 });   */
</script>   