
<h2 class="section-title">{$product->getTitle()}</h2>
{Controller::run('iblock/productattr/main')}
<div class="row-btn text-center">
    <a class="btn btn-flat m-red m-wide" href="{Url::setUrl(['lang'=>$langID,'menu'=>3])}">Вернуться назад</a>
</div>