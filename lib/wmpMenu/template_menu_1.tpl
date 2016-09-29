<div class="b-aside__menu">
	<ul class="b-aside__menu-list">
		{foreach $menuArray as $item}
			{if Menu::isActive($item.id)}
				<li><a class="is-active" href="{$item.href}"><span>{$item.title}</span></a></li>
			{else}
				<li><a href="{$item.href}"><span>{$item.title}</span></a></li>
			{/if}
		{/foreach}
	</ul>
</div>