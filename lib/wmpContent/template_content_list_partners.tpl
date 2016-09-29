{assign var="counter" value="100"}
<div class="container">
    <div class="content content-grid">
	<h3 class="section-title">Партнёры</h3>
	<div class="b-main-news column">
		{foreach $contents as $content}
			<div class="b-main-news__item column-3 wow fadeInRight" data-wow-duration="800ms"
					data-wow-delay="{$counter}ms">
				{$counter = $counter + 300}
				{if $counter eq 1000}
					{$counter = 100}
				{/if}
				<div class="img-wrap">
					{if $content.hasImage}
						<a href="{$content.another_page}">
							<img class="responsive" src="{$content.imgurl}" alt="news"/>
						</a>
					{/if}
				</div>
				<h4>{$content.title}</h4>
				<p class="b-main-news__preview-text">
					{$content.text}
				</p>
			</div>
		{/foreach}
	</div>
    </div>
</div>