<form action='taxasdeCambio.php' method='post' >
    <fieldset style='width:750px;'>
        <legend class='cor'>Conversor para o Real
        </legend>
        <table width='750' style='color:#666; font-size:11px;' cellpadding='0' cellspacing='0'>
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
