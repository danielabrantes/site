{if $dadosPessoais =='aumentar'}
<label for='dadosPessoais'><div class='subtitulo'>Dados Pessoais<div class='botaoAumento'><button id='dadosPessoais' name='dadosPessoais' value='diminuir'>-</button></div></div></label>
{include file='dadosPessoaisFormulario.tpl'}
{else}
<div class='subtitulo'>Dados Pessoais<div class='botaoAumento'><button name='dadosPessoais' value='aumentar'>+</button></div></div>
{/if}
