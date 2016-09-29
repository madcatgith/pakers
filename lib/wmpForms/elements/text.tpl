<input
    {if $element.validation=='email'}
        type="email"
    {else}
        type="text"
    {/if}    
    id="field{$formID}{$element.id}" 
    name="data[{$element.id}]" 
    value="{$element.value}" 
    placeholder="{$element.placeholder}"
    {if $element.validation} 
        data-validation="{$element.validation}"
    {/if} 
    {if $element.isRequired}
        required="true"
    {/if} 
/>