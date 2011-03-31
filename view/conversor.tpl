<form action='taxasdeCambio.php' method='post' >
    <fieldset style='width:750px;'>
        <legend class='cor'>Conversor
        </legend>
        <table width='750' style='color:#666; font-size:11px;' cellpadding='0' cellspacing='0'>
            {*<tr>
                <td width='150' ><strong>País de Origem:</strong></td>
                <td class='coluna_in_in'>
                    <select name='paisOrigem' class='combobox'>
						{foreach from=$paisOrigem item=value}
                        <option value='{$value->id}'>{$value->nome}</option>
						{/foreach}
                    </select>
                    <select name='moedas' class='combobox'>
						{foreach from=$moedas item=value}
                        <option value='{$value->id}'>{$value->nome}</option>
						{/foreach}
                    </select>
                </td>
            </tr>
            <tr>
                <td  width='150' height='40'>
                    <strong>País de Destino:</strong>
                </td>
                <td class='coluna_in_in'>
                    <select name='paisDestino' class='combobox'>
						{foreach from=$paises item=value}
                        <option value='{$value->id}'>{$value->nome}</option>
						{/foreach}
                    </select>
            </tr>
            <tr>
                <td  width='150' height='40'><strong>Tipo de Remessa:</strong></td>
                <td class='coluna_in_in'>
                    <select name='tarifa' class='combobox'>
						{foreach from=$tarifas item=value}
						{if $value->nome=='BRASIL 48' || $value->nome=='BRASIL TED'}
						{else}
                        <option value='{$value->id}'>{$value->nome}</option>
						{/if}
						{/foreach}
                    </select>
                </td>
            </tr>
            *}
            <tr>
                <td class='coluna_in'>
                    <strong>Valor a converter:</strong>
                </td>
                <td class='coluna_in_in'>
                    <input name='valor'  type='text'  size='14' value='{$valor}'/>€
                    <input type='submit' name='taxa'value='Calcular' />
                    <strong>Resultado:</strong>
                    <input type='text'  size='15' value='{$valorFinal|string_format:"%.2f"}'  readonly='readonly'/>R${*$moedaDestino.0->nome*}
                </td>
            </tr>
        </table>
    </fieldset>
</form>