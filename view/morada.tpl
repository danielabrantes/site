{if $morada =='aumentar'}
<div class='subtitle'>
	Morada
	<div class='botaoAumento'>
		<button name='morada' value='diminuir'>-</button>
	</div>
</div>
{include file='moradaFormulario.tpl'} {else}
<div class='subtitle'>
	Morada
	<div class='botaoAumento'>
		<button name='morada' value='aumentar'>+</button>
	</div>
</div>
{/if}
