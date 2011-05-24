{extends file='pagina.tpl'}
{block name='pagina'}
{include file='banner.tpl'}
<div class='terco'>{include file='esquerda.tpl'}</div>
<div class='terco'>{include file='centro.tpl'}</div>
<div class='terco'>{include file='direita.tpl'}</div>

{*if {$language=='pt'}}
<div id='unigran'><a href='http://www.unigran.pt/'><img src='imagens/unigran.png'></a></div>
{/if*}


{/block}

