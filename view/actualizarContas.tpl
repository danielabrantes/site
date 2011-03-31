<form action='destinatario.php' method='post'>
	<div class='seccao'>
		<div class='titulo'>Contas</div>
		<div>Nome:<input type='text' name='nome'	 value='{$conta->nome}'/></div>
		<div>Número:<input type='text' name='numero' value='{$conta->conta}'/></div>
		<div>Banco:<input type='text' name='banco'   value='{$conta->banco}'/></div>
		<div>Pais:<input type='text' name='pais'     value='{$conta->pais}'/></div>
			{include file='space.tpl'}
		<div><button type='submit' name='actualizarContas'>Actualizar Conta</button></div>
	</div>
{include file='space.tpl'}
</form>