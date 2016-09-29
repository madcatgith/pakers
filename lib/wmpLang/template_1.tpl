<div class="select-lang-block">
    <div class="wrap-select-lang">
        <select id="languages">	
            {foreach $langArray as $lang}
                <option{if $lang.active eq 1} selected="selected"{/if} value="{$lang.href}" data-img="{$lang.img}">{$lang.title_short}</option>									
            {/foreach}
        </select>
    </div>		
</div>	