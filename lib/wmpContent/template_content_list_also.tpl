<div class="recommend-news">
    <h2>{Dictionary::GetUniqueWord(44)}</h2>
    <ul class="newswire-list">
        {foreach $contents as $content}
            <li>
                <span class="square"></span>
                <div class="newswire-content">
                    <h4><a href="{$content.href}" title="{$content.title|escape}">{$content.title}</a></h4>
                </div>
            </li>
        {/foreach}            
    </ul>
</div>