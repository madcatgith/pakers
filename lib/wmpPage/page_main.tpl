 <section class="section-hero">
        <div class="container">
            <h1 class="section-hero__title">
                <strong class="block">{$siteTitle|escape}</strong>
                {$postal|escape}
            </h1>
            <a class="btn btn-flat btn-fix" href="{Url::setUrl(['lang'=>$langID,'menu'=>3])}">{Dictionary::getUniqueWord(79)}</a>
        </div>
    </section>

    <section class="section section-benefit">
        <div class="container">
            <h2 class="section-title text-center">{Dictionary::getUniqueWord(80)}</h2>
            {Banner::show(2, 'advantages')}
        </div>
    </section>

    <section class="section-promo">
        <div class="section-promo__row">
            <div class="section-promo__img" data-image-src="/pic/promo-compressor.jpg">
                <img class="responsive" src="/pic/promo-compressor.jpg" alt="выгода для вас"/>
            </div>
            <div class="section-promo__article">
                <h2 class="section-title">Выгода для вас</h2>
                <p>
                    Обладая более чем 20-летним опытом на рынке ПЭТ, мы хорошо понимаем, что участникам рынка необходима не только ПЭТ продукция. Да, речь идет об экономии энергии, более низком потреблении ресурсов, снижении себестоимости продукции и более тесном контроле производственных данных.
                </p>
                <p>
                    <a class="btn btn-fix" href="content.html">подробнее</a>
                </p>
            </div>
        </div>
        <div class="section-promo__row">
            <div class="section-promo__img" data-image-src="/pic/promo_1-compressor.jpg">
                <img class="responsive" src="/pic/promo_1-compressor.jpg" alt="выгода для вас"/>
            </div>
            <div class="section-promo__article">
                <h2 class="section-title">Выгода для окружащей среды</h2>
                <p>
                    Переработка пластиковой продукции является важной составляющей современной индустрии ПЭТ продукции. В тесном сотрудничестве с поставщиками и клиентами мы всегда готовы предложить ПЭТ продукцию, произведенную с использованием переработанных ПЭТ продуктов.
                </p>
                <p>
                    <a class="btn btn-fix" href="content.html">подробнее</a>
                </p>
            </div>
        </div>
    </section>
    {Content::upContentList($langID,5,"",0,9,true,"","customerSlider",false)}
    <!--<section class="section section-partners text-center">
        <h3 class="section-title">Наши клиенты</h3>
        <div class="container">
            <div class="b-partner-slider js-partner-slider">
                <a href="#"><img class="img-fluid" src="/pic/partners/obolon.png" alt="obolon"/></a>
                <a href="#"><img class="img-fluid" src="/pic/partners/karpat.png" alt="karpat"/></a>
                <a href="#"><img class="img-fluid" src="/pic/partners/mirgorodska.png" alt="mirgorodska"/></a>
                <a href="#"><img class="img-fluid" src="/pic/partners/morshynska.png" alt="morshynska"/></a>
                <a href="#"><img class="img-fluid" src="/pic/partners/ppb.png" alt="ppb"/></a>
            </div>
        </div>
    </section>-->