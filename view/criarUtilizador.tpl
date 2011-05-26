{include file='gestaoDeUtilizadores.tpl'}
<form class='form' action='criarUtilizador.php' method='post'>
	<input type="text" name="nome" id="nome" maxlength='20' size='20'/>
	<label for="nome">Nome</label>
	<br />
	<input type="text" name="pass" id='pass' maxlength='20' size='20'/>
	<label for="pass">Pass</label>
	<br />
	<input type="submit" value="Criar" />
</form>
{include file='space.tpl'}