<form action='transferencia.php' method='post'>
	<div class='titulo'><div class='texto'>Filtro de pesquisa de câmbios</div></div>
	<div class='texto'>
		<table>
			<tr>
				<th>Cidade</th>
				<th>Prioridade</th>
				<th>Modo de Pagamento</th>
				<th>Moeda</th>
				<th></th>
			<tr>
			<tr>
				<td>
					<select name='cidade'  value='cidade' size>
						<option></option>
						{foreach from=$quadro.cidade key=key item=value}
						<option value="{$value->id}">{$value->cidade}</option>
						{/foreach}
					</select>
				</td>
				<td>
					<select name='prioridade'  value='prioridade'>
						<option></option>
				{foreach from=$quadro.prioridade key=key item=value}
						<option value="{$value->id}">{$value->prioridade}</option>
				{/foreach}
					</select></td>
				<td><select name='modoDePagamento'  value='modoDePagamento'>
						<option></option>
				{foreach from=$quadro.modoDePagamento item=value}
						<option value="{$value->id}">{$value->nome}</option>
				{/foreach}
					</select></td>
				<td><select name='moeda'  value='moeda'>
						<option></option>
				{foreach from=$quadro.moeda key=key item=value}
						<option value="{$value->id}">{$value->moeda}</option>
				{/foreach}
					</select></td>
				<td><button type='submit' value='calcularCambio' name='pagina'>Calcular Câmbio</button></td>
			</tr>
		</table>
	</div>
	<div class='titulo'><div class='texto'>Escolha o câmbio para a transferência</div></div>
	<div class='texto'>
		<table>
			<tr>
				<th></th>
				<th style='text-align: left;'>Cidade</th>
				<th style='text-align: left;'>Prioridade</th>
				<th style='text-align: left;'>Modo de Pagamento</th>
				<th style='text-align: left;'>Moeda</th>
				<th style='text-align: left;'>Câmbio</th>
			</tr>
				{foreach from=$cambio key=key item=value}
			<tr>
				<td><input type='radio' value='{$value->htr_ID}' name='cambio'/></td>
				<td style='text-align: left;'>{$value->cidade}</td>
				<td style='text-align: left;'>{$value->tarifa}</td>
				<td style='text-align: left;'>{$value->modosDePagamento}</td>
				<td style='text-align: left;'>{$value->moeda}</td>
				<td style='text-align: left;'>{$value->taxa}</td>
			</tr>
	{/foreach}
		</table>
	</div>
	<center><button type='submit' value='resumo' name='pagina'>Seguinte</button></center>
</form>