<section class="section section-partners text-center">
        <h3 class="section-title">{Dictionary::GetUniqueWord(84)}</h3>
        <div class="container">
            <div class="b-partner-slider js-partner-slider">
                {foreach $contents as $content}
                    {if $content.hasImage}
                        <a href="{Url::setUrl(['lang'=>$langID,'menu'=>5])}"><img class="img-fluid" src="{$content.imgurl}" alt="obolon"/></a>
                    {/if}
                {/foreach}
                <!--<a href="#"><img class="img-fluid" src="/pic/partners/karpat.png" alt="karpat"/></a>
                <a href="#"><img class="img-fluid" src="/pic/partners/mirgorodska.png" alt="mirgorodska"/></a>
                <a href="#"><img class="img-fluid" src="/pic/partners/morshynska.png" alt="morshynska"/></a>
                <a href="#"><img class="img-fluid" src="/pic/partners/ppb.png" alt="ppb"/></a>-->
            </div>
        </div>
    </section>
