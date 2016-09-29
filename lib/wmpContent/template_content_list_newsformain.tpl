<div class="container">
<div class="content content-grid">
{assign var="counter" value="100"}
{foreach $contents as $content}
	<a href="{$content.href}">
		<div class="b-main-news__item column-3 wow fadeInRight" data-wow-duration="800ms"
				data-wow-delay="{$counter}ms">
				{$counter = $counter + 300}
			<div class="img-wrap">
				{if $content.hasImage}
					<img class="responsive" src="{$content.imgurl}" alt="news"/>
				{/if}
			</div>
			<h4>{$content.title}</h4>
			<p class="b-main-news__preview-text">
				{$content.announcement}
			</p>
			<a class="more-link" href="{$content.href}"></a>
		</div>
	</a>
{/foreach}
</div>
</div>