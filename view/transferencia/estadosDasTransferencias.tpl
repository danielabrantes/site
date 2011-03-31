<div class='titulo'>Consulta do Estado do pedido de Transferências</div>
<div class='texto'>
	<table>
		<tr>
			<th>Modo De Cobranca</th>
			<th>Destinatário</th>
			<th>Modo De Pagamento</th>
			<th>Taxa</th>
			<th>Valor a enviar</th>
			<th>x</th>
			<th>Câmbio</th>
			<th>=</th>
			<th>Valor a receceber</th>
			<th>Realizado a</th>
			<th>Estado</th>
		</tr>
		{foreach key=key item=value from=$result}
		<tr>
			<td>{$value->modoDeCobranca}</td>
			<td style='text-align: left;'>{$value->receptor}</td>
			<td>{$value->modoDePagamento}</td>
			<td style='text-align: right;'>2.00&nbsp;{$value->moeda}</td>
			<td style='text-align: right;'>{$value->valor}&nbsp;{$value->moeda}</td>
			<td></td>
			<td style='text-align: right;'>{$value->cambio}</td>
			<td></td>
			<td style='text-align: right;'>{$value->valorAReceber}&nbsp;{$value->moeda}</td>
			<td>{$value->tempo}</td>
			<td>
					{if $value->estado == 0}
					<div style='color:grey;'>Pendente</div>
					{elseif $value->estado == 1}
					<div style='color:black;'>Enviada</div>
					{elseif $value->estado == 2}
					<div style='color:red;'>Cancelado</div>
					{/if}
			</td>
			
		</tr>
		{/foreach}
	</table>
</div>