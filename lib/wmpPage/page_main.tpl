 <section class="section-hero">
        <div class="container">
            <h1 class="section-hero__title">
                <strong class="block">{$siteTitle|escape}</strong>
                {$postal|escape}
            </h1>
            <a class="btn btn-flat btn-fix" href="{Url::setUrl(['lang'=>$langID,'menu'=>3])}">{Dictionary::getUniqueWord(79)}</a>
        </div>
    </section>

    <section class="section section-benefit">
        <div class="container">
            <h2 class="section-title text-center">{Dictionary::getUniqueWord(80)}</h2>
            {Banner::show(2, 'advantages')}
        </div>
    </section>
    
    <!--About us-->
    {Content::upContentList($langID,11,"",0,2,true,"","mainAbout",false)}
    <!--Slider with clients-->
    {Content::upContentList($langID,5,"",0,9,true,"","customerSlider",false)}