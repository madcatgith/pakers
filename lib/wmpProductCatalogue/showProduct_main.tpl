<div class="content-grid__main">
	<h1 class="section-title">{$product->getTitle()}</h1>
    <div class="b-product">
        {if $product->getImage() neq ''}
        <div class="b-product__img-wrap">
            <div class="img-wrap product">
                <img class="responsive" src="{Image::mEncrypt('height=253&src='|cat:$product->getImage())|filesSmallGenerate}" alt="preview"/>
            </div>
            <div class="b-product__carousel">
                <div class="js-product-carousel owl-carousel">
                    <!--Слайдер-->
                    {Gallery::displayGallery({$product->get('gallery_id')},'product')}                    
                </div>
            </div>
        </div>
        {/if}        
		
        <div class="b-product__description">
            {if $product->get('minCapacity') neq '' || $product->get('minTorque') neq '' || $product->get('minGearRatio') neq ''}
            <dl>
                <dt>Мощность (Kw):</dt>
                <dd>Min {$product->get('minCapacity')} — Max {$product->get('maxCapacity')}</dd>
                <dt>Крутящий момент (Nm):</dt>
                <dd>Min {$product->get('minTorque')} — Max {$product->get('maxTorque')}</dd>
                <dt>Передаточное отношение:</dt>
                <dd>Min {$product->get('minGearRatio')} — Max {$product->get('maxGearRatio')}</dd>
            </dl>
            {/if}
            {if $product->get('pdf') neq ''}
            <p>
                <a class="btn btn-download" target="_blank" href="{$product->get('pdf')}">
                    <span class="icon-pdf left"></span>
                    <span>Скачать <br/>тех. документацию</span>
                </a>
            </p>
            {/if}
        </div>
        
        <!-- content-->
        <div class="b-product__content">
            <article>
                <p>
					{$product->get('announcement')}
                </p>
               
						<!--таблица-->
						{Controller::run('iblock/productattr/main')}
                                                
                                                {Controller::run('iblock/elproduct/main')}
                  
            </article>
        </div>

    </div>
                                                
    <!-- section callback-->
    <section class="section-callback">
		{Controller::run('forms/index')}
    </section>
</div>