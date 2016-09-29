<!-- contacts-block -->
{foreach $data as $item}
	{if sizeof($item->get('tels'))>0}						
		<li>
			<p>
				{foreach $item->get('tels') as $tels}
					{$tels}
				{/foreach}
			</p>
		</li>
	{/if}
{/foreach}