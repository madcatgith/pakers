<div class="container" style="padding-left: 0px;">
    <div class="content content-grid">
		<h3 class="section-title"
			style="
				font-weight: 400;
				font-size: 24px;
			">YouTube каналы</h3>
		{assign var="counter" value="100"}
		{foreach $contents as $content}

			<a href="{$content.another_page}">
				<div class="b-catalog__item column-2 wow fadeInRight" data-wow-duration="800ms"
						 data-wow-delay="{$counter}ms"
						 style="
							width: auto;
							padding-left: 0px;
							margin-right: 50px;">
					{$counter = $counter + 300}
					<div style="margin-bottom: 20px;">
						<img class="responsive" src="{$content.imgurl}" alt="catalog"/>
					</div>
					<a class="more-link" href="{$content.another_page}" style="width: auto;">
						<span style="
							text-transform: none;
							font-weight: 500;
						">{$content.title}</span>
					</a>
				</div>
			</a>
		{/foreach}
    </div>
</div>