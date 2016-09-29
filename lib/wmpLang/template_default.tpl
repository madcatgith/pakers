<div class="b-header__lang inline-list">
    {foreach $langArray as $lang}
        <a {if $lang.active eq 1}class="is-active"{/if} href="{$lang.href}">{$lang.title_short}</a>
    {/foreach}
</div>
	