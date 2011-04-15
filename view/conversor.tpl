<form action='taxasdeCambio.php' method='post'>
	<fieldset style='width: 750px;'>
		<legend class='cor'>Conversor para o Real </legend>
		<div class='coluna_in'>Valor a converter:</div>
		<div>
			<input name='valor' type='text' size='14' value='{$valor}' />€ <input type='submit' name='taxa' value='Calcular' /> Resultado: <input type='text' size='15' value='{$valorFinal|string_format:"%.2f"}' readonly='readonly' />R${*$moedaDestino.0->nome*}
		</div>
	</fieldset>
</form>
