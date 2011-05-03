<form action='taxasdeCambio.php' method='post'>
    <fieldset >
        <legend class='cor'>Conversor para Real </legend>
        <div class='clear'>&nbsp;</div>
        Valor a converter:
        {$moeda}<input name='valor' type='text' size='14' value='{$valor}' />
        <input type='submit' name='taxa' value='Calcular' />
		<div class='clear'>&nbsp;</div>
        Resultado: R$<input type='text' size='15' value='{$valorFinal|string_format:"%.2f"}' readonly='readonly' />
        <div class='clear'>&nbsp;</div>
    </fieldset>
</form>
