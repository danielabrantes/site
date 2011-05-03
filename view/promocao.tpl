{extends file='pagina.tpl'}
{block name='pagina'}
<div class='promocao'>
	<div class='title'>{block name='title'}{/block}</div>
	<div class='subtitle'>{block name='subtitle'}{/block}</div>
	<div class='texto'>
	{block name='texto'}{/block}
	</div>
	<div class="center">
		<img src="imagens/promocao/{block name='imagem'}{/block}.jpg" alt='imagem' />
	</div>
</div>
{/block}


 {*
 {extends file='promocao.tpl'}
 {block name='title'}{/block}
 {block name='subtitle'}{/block}
 {block name='texto'}{/block}
 {block name='imagem'}{/block}
 *}
