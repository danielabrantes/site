<form action='destinatario.php' method='post'>
<div class='seccao'>
	<div class ='titulo'>Informações Do Destinatário</div>
	<div>
		Nome<input type='text' name='nomeDestinatario' value='{$destinatario->BnfNombre}' />
		<div class='linha'>
		Parentesco
			<select name='parentesco'>
				{foreach item=parentesco from=$parentescos}
					{if $destinatario->parentesco == $parentesco->parantesco}
						<option value='{$parentesco->id}' selected='selected'>{$parentesco->parantesco}</option>
					{else}
					<option value='{$parentesco->id}'>{$parentesco->parantesco}</option>
					{/if}
				{/foreach}
			</select>
		</div>
		<div class='linha'>Rua<input type='text' name='ruaDestinatario' value='{$destinatario->BnfDireccion}' /></div>
		<div class='linha'>Bairro<input type='text' name='bairroDestinatario' value='{$destinatario->BnfBarrio}' /></div>
		<div class='linha'>Cidade<input type='text' name='localidadeDestinatario' value='{$destinatario->BnfCiudad}' /></div>
		<div class='linha'>Província<input type='text' name='provinciaDestinatario' value='{$destinatario->BnfProvincia}' /></div>
		<div class='linha'>País<input type='text' name='paisDestinatario' value='{$destinatario->pais}' /></div>
		<div class='linha'>Telefone<input type='text' name='telefoneDestinatario' value='{$destinatario->BnfTelefono}' /></div>
		<div class='linha'>Telemóvel<input type='text' name='telemovelDestinatario' value='{$destinatario->BnfTelefono2}' /></div>
		<input type='hidden' name='id' value='{$destinatario->BnfNumero}'/>
		<button type='submit' value='{$destinatario->BnfNumero}' name='actualizarDestinatario'>Actualizar Destinatário</button>
	</div>
</div>
</form>