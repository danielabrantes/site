<form action='taxasdeCambio.php' method='post'>
    <fieldset >
        <legend class='cor'>Conversor para Real </legend>
        <div class='clear'>&nbsp;</div>
        Valor a converter:<input name='valor' type='text' size='14' value='{$valor}' />€ <input type='submit' name='taxa' value='Calcular' /> Resultado: <input type='text' size='15' value='{$valorFinal|string_format:"%.2f"}' readonly='readonly' />R${*$moedaDestino.0->nome*}
        <div class='clear'>&nbsp;</div>
    </fieldset>
</form>
