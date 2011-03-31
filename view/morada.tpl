{if $morada =='aumentar'}
<div class='subtitulo'>Morada
<div class='botaoAumento'>
<button name='morada' value='diminuir'>-</button>
</div>
</div>
{include file='moradaFormulario.tpl'} {else}
<div class='subtitulo'>Morada
<div class='botaoAumento'>
<button name='morada' value='aumentar'>+</button>
</div>
</div>
{/if}
