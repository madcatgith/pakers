    <div class="container container-main">
    <div class="content content-grid">
	{foreach $contents as $content}
		<h1 class="section-title">{$content.title}</h1>
                <div class="content-text">
			{$content.text}
                </div>        
	{/foreach}
    </div>
</div>