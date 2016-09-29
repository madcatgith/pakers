<div class="container container-main">
    <div class="content content-grid news">
        <h1 class="section-title">{$title|escape}</h1>
        {if $hasImage}
        <div class="img-wrap">
            <img class="responsive" src="{$imgurl|escape}" alt="catalog"/>
        </div>
        {/if}
        <p>{$text}</p>
    </div>
</div>    

