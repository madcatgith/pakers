<div class="content-grid__main">
    <div class="b-catalog column">
		{assign var="counter" value="100"}
		{foreach $menuArray as $item}
			<a href="{$item.href}">
				<div class="b-catalog__item column-2 wow fadeInRight" data-wow-duration="800ms"
								 data-wow-delay="{$counter}ms">
					{$counter = $counter + 300}
					<div class="img-wrap">
						<img class="responsive" src="{$item.imgurl}" alt="catalog"/>
					</div>
					<a class="more-link" href="{$item.href}"><span>{$item.title}</span></a>
				</div>
			</a>
		{/foreach}
	</div>
</div>