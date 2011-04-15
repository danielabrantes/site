<form action="agenteTornarAgente.php" method='post' enctype='multipart/form-data'>
	<fieldset style="width: 850px;">
		<legend class="cor">Formulário de interesse</legend>
		<div>Nome da empresa:</div>
		<div>
			<input name="empresa" type="text" size="60" placeholder="Empresa" />*
		</div>
		<div>Número de NIF:</div>
		<div>
			<input name="nif" type="text" size="25" placeholder="211234567" />*
		</div>
		<div>Nome de Contacto:</div>
		<div>
			<input name="nome" type="text" size="25" placeholder="nome" />*
		</div>
		<div>Morada da empresa:</div>
		<div>
			<input name="rua" type="text" size="60" placeholder="rua" />*
		</div>
		<div>Cidade:</div>
		<div>
			<input name="cidade" type="text" size="25" placeholder="Lisboa" />* CEP: <input name="cep" type="text" size="25" placeholder="1900" />* País: <input name="pais" type="text" size="25" placeholder="Portugal" />*
		</div>
		<div>Telefone empresa:</div>
		<div>
			<input name="telefone" type="text" size="25" placeholder="213546895" />*
		</div>
		<div>Tipo de negócio:</div>
		<div>
			<input name="tipo" type="text" size="60" placeholder="Comercial" />*
		</div>
		<div>Número do CAE:</div>
		<div>
			<input name="cae" type="text" size="25" placeholder="1256986" />*
		</div>
		<div>Número de filiais:</div>
		<div>
			<input name="filial" type="text" size="25" placeholder="1" />*
		</div>
		<div>Email:</div>
		<div>
			<input name="email" type="text" size="60" placeholder="mail@mail.com" />*
		</div>
		<div>Observações:</div>
		<div>
			<textarea name="obs" cols="55" rows="5" placeholder='Observações'></textarea>
		</div>
	</fieldset>
	<input style='float: right; margin-right: 153px; margin-top: 5px;' name="agente" type="submit" value="GUARDAR" />
</form>
