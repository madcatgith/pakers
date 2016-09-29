<div class="pagination">
    <ul class="pagination-list">
        {if $page gt 1}
            {if $page - 1 eq 1}
                <li class="prev"><a href="{$url}{$rPart}">{Dictionary::GetUniqueWord(45)}</a></li>
            {else}
                <li class="prev"><a href="{$url}/{$type}/{$page - 1}{$rPart}">{Dictionary::GetUniqueWord(45)}</a></li>
            {/if}
        {/if}
        {if $page gt $numLink}
            <li><a href="{$url}{$rPart}">1</a></li>
        {/if}
        {if ($page - $numLink) gt 1}
            <li class="paging-points"><span>...</span></li>
        {/if}
        {for $loop = $loopStart; $loop <= $loopEnd; $loop++}
            {if $page eq $loop}
                <li><div class="active">{$loop}</div></li>
            {else}
                {if $loop eq 1}
                    <li><a href="{$url}{$rPart}">{$loop}</a></li>
                {else}
                    <li><a href="{$url}/{$type}/{$loop}{$rPart}">{$loop}</a></li>
                {/if}
            {/if}
        {/for}
        {if $page lt ($numPages - $numLink - 1)}
            <li class="paging-points">...</li>
        {/if}
        {if $page lt ($numPages - $numLink)}
            <li><a href="{$url}/{$type}/{$numPages}{$rPart}">{$numPages}</a></li>
        {/if}
        {if $page lt $numPages}
            <li class="next"><a href="{$url}/{$type}/{$page + 1}{$rPart}">{Dictionary::GetUniqueWord(46)}</a></li>
        {/if}
    </ul>
</div>