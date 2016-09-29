<main class="l-main l-main--catalog">
    {Content::getBody($langID, $menuID, $contentID)}
</main>
<!-- section content-->
<section class="section section-faq m-grey">
    <div class="container">
        <h3 class="section-title">Интересно знать</h3>
        {Menu::getTreeByTemplate($langID,34,'info')}
    </div>
</section>

