<div class='titulo'><div class='texto'>Indique o valor a transferir</div></div>
<form action='transferencia.php' method='post'>
	<div class='texto'>
		Valor<input type='text' name='valor'/>{$moeda->nome}
	</div>
	<div class='titulo'><div class='texto'>Modo de Cobrança</div></div>
	<div class='texto'>
		<ul>
		<li>A transferência entre contas do mesmo banco é imediada.</li>
		<li>A transferência entre contas de bancos nacionais diferentes demora entre 1 a 2 dias.</li>
		<li>Multibanco demora 1 dia</li>
		</ul>
		<select name='modosDeCobranca'>
			{foreach from=$modosDeCobranca item=value}
			<option value='{$value->id}'>
					{$value->nome}
			</option>
			{/foreach}
		</select>
	</div>
	<div class='titulo'><div class='texto'>Destinatário</div></div>
	<div class='texto'>
		<table style='text-align: left;'>
			<tr style='text-align: left;'>
				<th style='text-align: left;'></th>
				<th style='text-align: left;'>Nome</th>
			</tr>
	{foreach key=key item=item from=$destinatarios}
			<tr>
				<td><input  type='hidden' name='destinatario' value='{$item.0->id}'/></td>
				<td style='text-align: left;'>{$item.0->nome}</td>
			</tr>
			<tr>
				<table>
					<tr>
						<th></th>
						<th>Conta</th>
						<th>Banco</th>
						<th>Pais</th>
					</tr>
				{foreach from=$item item=value}
					<tr>
						<td>
							<input  type='radio' name='conta' value='{$value->conta}'/>
							<input  type='hidden' name='banco' value='{$value->idbanco}'/>
							<input  type='hidden' name='pais' value='{$value->idpais}'/>
						</td>
						<td>
							{$value->conta}
						</td>
						<td>
							{$value->banco}
						</td>
						<td>
							{$value->pais}
						</td>
					</tr>
				{/foreach}
					</table>
			</tr>
	{/foreach}
		</table>
	</div>
	<center><button type='submit' value='2' name='pagina'>Seguinte</button></center>
</form>