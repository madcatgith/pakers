{if $data|@count > 0}       
<table>
    <thead>
        <tr>
            <th>Вес, г</th>
            <th>Длина, мм</th>
            <th>Quantity</th>
        </tr>
    </thead>
    <tbody>
        {foreach $data as $item}
        <tr>  
            <td>{$item->get('weight')}</td>
            <td>{$item->get('length_p')}</td>
            <td>{$item->get('quantity')}</td>
        <tr>
        {/foreach}
    </tbody>
</table>
{/if}                    