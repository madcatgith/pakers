{if $data|@count > 0}       
<table class="hide-on-small fullwidth">
                    <thead>
                        <tr>
                            <th>Типоразмер</th>
                            <th>Крутящий момент (NM)</th>
                            <th>Мощность (KW)</th>
                            <th>Передаточное отношение</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $data as $item}
                        <tr>  
                        <td>{$item->get('type')}</td>
                        <td>Min {$item->get('minTonque')} — Max {$item->get('maxTonque')}</td>
                        <td>Min {$item->get('minCapacity')} — Max {$item->get('maxCapacity')}</td>
                        <td>Min {$item->get('minGearRatio')} — Max {$item->get('maxGearRatio')}</td>
                        <tr>
                        {/foreach}
                    </tbody>
        </table>
{/if}                    