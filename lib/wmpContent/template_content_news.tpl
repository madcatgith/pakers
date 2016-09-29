<div class="container container-main">
    <div class="content content-grid news">
        <h1 class="section-title">{$title|escape}</h1>
        {if $hasImage}
        
            <img style="width: 70%;" class="news-image" src="{$imgurl|escape}" alt="catalog"/>
        
        {/if}
        <p>{$text}</p>
    </div>
</div>    
