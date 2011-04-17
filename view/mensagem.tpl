{if isset($mensagem) && $mensagem != ''}
<div class='mensagem'>
	{$mensagem} <img src='imagens/area/{$imagem}' alt='imagem'>
</div>
{else}
<div class='mensagem_branco'></div>
{/if} {include file='space.tpl'}
