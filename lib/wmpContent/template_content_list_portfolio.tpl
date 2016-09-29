<div class="main-dotted">
	<ul>
		{foreach $contents as $content}
			<li>
				<div class="main-dotted_link">
					<a href="{$content.href}" title="{$content.title|escape}">{$content.title}</a>
				</div>
				<span class="date">{$content.date}</span>
			</li>
		{/foreach}
	</ul>
</div>