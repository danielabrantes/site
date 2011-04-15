{if $documentos =='aumentar'}
<div class='subtitle'>
	Documentos
	<div class='botaoAumento'>
		<button name='documentos' value='diminuir'>-</button>
	</div>
</div>
{include file='documentosFormulario.tpl'} {else}
<div class='subtitle'>
	Documentos
	<div class='botaoAumento'>
		<button name='documentos' value='aumentar'>+</button>
	</div>
</div>
{/if}
