<form action="" method='post' action="pedirCartao.php">
	<fieldset style="width: 850px;">
		<legend class="cor">Pedir Cartão de Pontos</legend>
                <div class='left'>Nome Completo:</div><div class='right'><input type="text" name="nome" size="65" value="nome" /></div>
                <div class='left'>Email:</div><div class='right'><input name="email" type="text" size="65" value="email@dominio.pt" /></div>
                <div class='left'>Telefone</div><div class='right'><input name="telefone" type="text" size="20" value="961236985" /></div>
		<div><input name="cadastro" type="checkbox" />Já tenho cadastro numa das lojas da MoneyOne - Portugal.</div>
                <div><input name="regulamento" type="checkbox" />Li e concordo com o <a href="regulamento.php" >Regulamento do Cartão de Pontos</a><div>
                <div><input name="informacao" type="checkbox" />Não desejo receber informações sobre promoções da MoneyOne.</div>
                <input class='onlyright' type='submit' name='enviar' value="ENVIAR" />
        </fieldset>
</form>
