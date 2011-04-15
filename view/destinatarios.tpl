{if $destinatariosFormulario =='aumentar'}
<div class='subtitle'>
	Destinatários
	<div class='botaoAumento'>
		<button name='destinatariosFormulario' value='diminuir'>-</button>
	</div>
</div>
{include file='destinatariosFormulario.tpl'} {else}
<div class='subtitle'>
	Destinatários
	<div class='botaoAumento'>
		<button name='destinatariosFormulario' value='aumentar'>+</button>
	</div>
</div>
{/if}
