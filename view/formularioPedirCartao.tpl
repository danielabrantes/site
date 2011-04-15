<form action="" method='post' action="pedirCartao.php">
	<fieldset style="width: 850px;">
		<legend class="cor">Pedir Cartão de Pontos</legend>
		<div>Nome Completo:</div>
		<div>
			<input type="text" name="nome" size="65" value="nome" />*
		</div>
		<div>Email:</div>
		<div>
			<input name="email" type="text" size="65" value="email@dominio.pt" />*
		</div>
		<div>Telefone:</div>
		<div>
			<input name="telefone" type="text" size="20" value="961236985" />*
		</div>
		<div>
			<input name="cadastro" type="checkbox" />Já tenho cadastro numa das lojas da MoneyOne - Portugal. <input name="regulamento" type="checkbox" />Li e concordo com o <a href="regulamento.php" class="content_link">Regulamento do Cartão de Pontos</a>.* <input name="informacao" type="checkbox" />Não desejo receber informações sobre promoções da MoneyOne.
		</div>
	</fieldset>
	<input style='float: right; margin-right: 153px; margin-top: 5px;' type='submit' name='enviar' value="ENVIAR" />
</form>
