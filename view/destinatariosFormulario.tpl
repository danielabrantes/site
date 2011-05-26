{foreach  item=destinatario from=$destinatarios}
<div class='destinatario'>
	<form  action='dadosDoCliente.php' method='post'name='{$destinatario.0->id}'>
		<input type='hidden' name='id'value='{$destinatario.0->id}'/>
		<div class='linha'>Nome<input type='text' name='nomeDestinatario' value='{$destinatario.0->nome}'/></div>
		<div class='linha'>Parentesco
			<select name='parentesco'>
			{foreach item=parentesco from=$parentescos}
				{if $destinatario.0->parentesco == $parentesco->parantesco}
				<option value='{$parentesco->id}' selected='selected'>{$parentesco->parantesco}</option>
				{else}
				<option value='{$parentesco->id}'>{$parentesco->parantesco}</option>
				{/if}
			{/foreach}
			</select>
		</div>
		<div class='linha'>Rua<input type='text' name='ruaDestinatario' value='{$destinatario.0->BnfDireccion}'/></div>
		<div class='linha'>Bairro<input type='text' name='bairroDestinatario' value='{$destinatario.0->BnfBarrio}'/></div>
		<div class='linha'>Cidade<input type='text' name='localidadeDestinatario' value='{$destinatario.0->BnfCiudad}'/></div>
		<div class='linha'>Província<input type='text' name='provinciaDestinatario' value='{$destinatario.0->BnfProvincia}'/></div>
		<div class='linha'>País<input type='text' name='paisDestinatario' value='{$destinatario.0->pais}'/></div>
		<div class='linha'>Telefone<input type='text' name='telefoneDestinatario' value='{$destinatario.0->BnfTelefono}'/></div>
		<div class='linha'>Telemóvel<input type='text' name='telemovelDestinatario' value='{$destinatario.0->BnfTelefono2}'/></div>

		<input  type='hidden' name='formulario' value='destinatario'/>
		<input  type='hidden' name='destinatario' value='{$destinatario.0->BnfNumero}'/>
		<button type='submit' value='{$destinatario.0->BnfNumero}' name='actualizarDestinatario'>Actualizar Destinatário</button>
		<button type='submit' value='{$destinatario.0->BnfNumero}' name='removerDestinatario'>Remover Destinatário</button>


		{include file='space.tpl'}
		<div class='subtitulo'>Contas</div>
		<div class='contas'>
		{if $adicionarConta}
			Número de Conta<input type='text' name='numeroDeConta' value=''/><br />
			Tipo Conta<select name='tipoDeConta'>{foreach from=$modosDePagamento item=modo}<option {$modo->id}>{$modo->nome}</option>{/foreach}</select><br />
			Agência<input type='text' name='agencia' value=''/><br />
			Localidade<select name='localidade'>{foreach from=$cidades item=cidade}<option {$cidade->id}>{$cidade->nome}</option>{/foreach}</select><br />
			Banco<select name='banco'>{foreach from=$bancos item=banco}<option value='{$banco->id}'>{$banco->nome}</option>{/foreach}</select><br />
			<button type='submit' name='adicionarConta'>Criar Conta</button>
		{else}
			<table>
				<tr>
					<th></th>
					<th>Número</th>
					<th>Banco
						<button type='submit' name='adicionarConta' >Adicionar Conta</button>
						<button type='submit' name='removerConta' value='{$conta->BnfCuenta}'>Remover Conta</button>
					</th>
				</tr>
			{foreach item=conta from=$destinatario}
				<tr>
					<td><input type='radio' name='conta' value='{$conta->conta}'/></td>
					<td>{$conta->conta}</td>
					<td>Banco{$conta->banco}</td>
				</tr>
			{/foreach}
			</table>
		{/if}
		{include file='space.tpl'}
		</div>
	</form>
</div>
{/foreach}
