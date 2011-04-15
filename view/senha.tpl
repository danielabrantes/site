<div class='seccao'>
	<form action='senha.php' method='post'>
		<div>Senha Actual:{$senha}</div>
		<div>
			<input type='text' name='senha' value='Introduza a nova senha'>
		</div>
		{if empty($mensagem) }
		<button type='submit' name='formulario' value='alterarSenha' class='right'>Alterar Senha</button>
		{/if}
	</form>
</div>
{include file='space.tpl'}
