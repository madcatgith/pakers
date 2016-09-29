            <nav class="b-header__nav">
                <ul class="b-header__nav-list">
                    {foreach $menuArray as $menu}
                        <li><a href="{$menu.href}" title="{$menu.title|escape}">{$menu.title}</a></li>
                    {/foreach}
                </ul>
                {Lang::getLangByTemplate('mobile')}
            </nav>