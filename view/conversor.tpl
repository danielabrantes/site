<form action='taxasdeCambio.php' method='post'>
    <fieldset >
        <legend class='cor'>Conversor para Real </legend>
        <div class='clear'>&nbsp;</div>
        <div id='conversor'>
            Valor a converter:
        {$moeda}<input name='valor' type='text' size='14' value='{$valor}' />
            Tipo de câmbio
            <select name='cambio'>
            {foreach from=$cambios item=cambio}
            {if $cambio eq '0,00' and $language !='pt'}
            {else}
                {if $cambio eq $selecionado}
                    <option id='cambio' selected='selected'>{$cambio}</option>
                {else}
                    <option id='cambio'>{$cambio}</option>
                {/if}
            {/if}

            {/foreach}            
            </select>

            Resultado: {$moedaFinal}<input type='text' size='15' value='{$valorFinal|string_format:"%.2f"}' readonly='readonly' />
            <input type='submit' name='taxa' value='Calcular' />
        </div>
        <div class='clear'>&nbsp;</div>
    </fieldset>
</form>