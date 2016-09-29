{assign var="counter" value="100"}
<div class="container container-main">
    <div class="content content-grid">
	<h3 class="section-title">Новости</h3>
	<div class="b-main-news column">
		{foreach $contents as $content}
                    <a href="{$content.href}">
			<div class="b-main-news__item column-3 wow fadeInRight" data-wow-duration="800ms"
					data-wow-delay="{$counter}ms">
				{$counter = $counter + 300}
				<div class="img-wrap">
					{if $content.hasImage}
						<img class="responsive" src="/image.php?{Image::mEncrypt('width=400&height=200&src='|cat:$content.imgurl)}" alt="news"/>
					{/if}
				</div>
				<h4>{$content.title}</h4>
				<p class="b-main-news__preview-text">
					{$content.announcement}
				</p>
			</div>
                    </a>
		{/foreach}
	</div>
    </div>
</div>