{assign var=productsList value=array_chunk($products, 3, true)}
<div class="types type-second catalog-list{$instance->getHtmlClass()}">
    <table>						
        <tbody>
            {foreach $productsList as $products}
                <tr>
                    {foreach $products as $product}
                        <td>
                            <div class="types-img catalog-item-img_{$product->getID()}"><div>
                                {if $product->getImage()}
                                    <img src="{Image::mEncrypt('height=253&src='|cat:$product->getImage())|filesSmallGenerate}" {Image::mEncrypt('height=253&src='|cat:$product->getImage())|htmlSizes} alt="{$product->getTitle()|escape}" />
                                {/if}
                            </div></div>
                        </td>
                    {/foreach}
                </tr>
                <tr>
                    {foreach $products as $product}
                        <td>
                            {if $product->has('colors')}
                                <div class="select-color">
                                    <p>{Dictionary::GetUniqueWord(77)}:</p>
                                    <ul class="select-color-list">
                                        {foreach $product->get('colors') as $colorID => $color name=colorIndex}
                                            <li><input data-id="{$product->getID()}" data-color="{$color.rgb}" type="radio" value="{$colorID}" data-image="{if $color.image}{Image::mEncrypt('height=253&src='|cat:$color.image)|filesSmallGenerate}{else}{Image::mEncrypt('height=253&src='|cat:$product->getImage())|filesSmallGenerate}{/if}" name="color_group_{$product->getID()}" class="radio-color"{if $smarty.foreach.colorIndex.index eq 0} checked="checked"{/if} /></li>
                                        {/foreach}
                                    </ul>
                                </div>
                            {/if}
                        </td>
                    {/foreach}
                </tr>
                <tr>
                    {foreach $products as $product}
                        <td class="machineHeading-{$product->getID()}">
                            <h3>{$product->getTitle()}</h3>
                        </td>
                    {/foreach}
                </tr>
                <tr>
                    {foreach $products as $product}
                        <td>
                            {if $product->hasMulty()}
                                <ul class="services-list info-list">
                                    {foreach $product->getMulty() as $row}
                                        <li>
                                            <span class="wrap-icon-small"><img src="{$row[0]}" {$row[0]|htmlSizes} /></span>
                                            <div>{Dictionary::getDicWord($row[1])|html_entity_decode}</div>
                                        </li>
                                    {/foreach}
                                </ul>		
                            {/if}									
                        </td>
                    {/foreach}
                </tr>
				<tr>
                    {foreach $products as $product}
                        <td>
							{if ($product->isMachine() && $product->hasAnnouncement())}
								<a class="fancy-window" href="#info{$product->getID()}">{Dictionary::getUniqueWord(32)}</a>
							{/if}
							<div style="display:none;">
								<div id="info{$product->getID()}">
									{$product->getAnnouncement()}
								</div>
							</div>
                        </td>
                    {/foreach}
                </tr>
                <tr>
                    {foreach $products as $product}
                        <td>
                            <input type="hidden" name="amount[{$product->getID()}]" value="1" />
                            {assign var=inCart value=(Shop::isExistCartID() && Shop::getInstance()->hasItem($product->getID()))}
                            <div class="buy-holder-{$product->getID()}{if $inCart} existInCart{/if}">
                                <a href="javascript:void(0);" class="btn-green addToCart addToCartColor" data-id="{$product->getID()}">{if $inCart} {Dictionary::GetUniqueWord(81)}{else} {Dictionary::GetUniqueWord(78)}{/if}</a>
                                <i class="icon-tick"></i>
                            </div>
                        </td>
                    {/foreach}
                </tr>
            {/foreach}
        </tbody>
    </table>
</div> 