<div class="b-footer__lang">
    <p>Выбрать язык:</p>
    <p class="b-footer__lang-switch">
        {foreach $langArray as $lang}
            <a {if $lang.active eq 1}class="is-active"{/if} href="{$lang.href}">{$lang.title}</a>
        {/foreach}
    </p>
</div>
