<section class="section-nav">
        <div class="container">
            {Menu::getCrumbs()}
            <h1 class="section-title">{$title|escape}</h1>
        </div>
</section>
    
<main class="l-main">
        <div class="container">
            <section class="section section-article">
                <article class="wysiwyg">
                    <p>
                        <img class="responsive" src="{$imgurl|escape}" alt="post"/>
                    </p>
                    {$text}
                </article>
                <div class="row-btn text-center">
                    <a class="btn btn-flat m-red m-wide" href="{Menu::get($langID,$menuID,"href")}">{Dictionary::getUniqueWord(73)}</a>
                </div>
            </section>
        </div>
    </main>    
