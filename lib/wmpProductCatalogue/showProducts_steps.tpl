{foreach $productsList as $product}
		<div class="b-catalog__item column-2 wow fadeInRight" data-wow-duration="800ms"
				data-wow-delay="100ms">
			<div class="img-wrap">
				<img class="responsive" src="{Image::mEncrypt('height=253&src='|cat:$product->getImage())|filesSmallGenerate}" alt="catalog"/>
			</div>
			<a class="more-link" href="#"><span>{$product->getTitle()}</span></a>
		</div>
{/foreach}