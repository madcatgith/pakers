<div id="contentGallery{$id}" class="contentGallery">
    <ul>
        {foreach $images as $image}
            <li>
                <a rel="contentGallery" href="{$image.src}">
                    <img alt="{$image.title|escape}" src="/image.php?{Image::mEncrypt('quality=90&height=208&width=222&src='|cat:$image.src)}" />
                </a>
            </li>
        {/foreach}
    </ul>
</div>