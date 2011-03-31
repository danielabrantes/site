{if $alteracaoSenha =='aumentar'}
<label for='alteracaoSenha'>
	<div class='subtitulo'>Alterar Senha
		<div class='botaoAumento'>
			<button id='alteracaoSenha' name='alteracaoSenha' value='diminuir'>-</button>
		</div>
	</div>
</label>
{include file='alteracaoSenhaFormulario.tpl'}
{else}
<div class='subtitulo'>Alterar Senha
	<div class='botaoAumento'>
		<button name='alteracaoSenha' value='aumentar'>+
		</button>
	</div>
</div>
{/if}
