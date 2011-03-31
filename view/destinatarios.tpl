{if $destinatariosFormulario =='aumentar'}
<div class='subtitulo'>Destinatários<div class='botaoAumento'><button name='destinatariosFormulario' value='diminuir'>-</button></div></div>
{include file='destinatariosFormulario.tpl'}
{else}
<div class='subtitulo'>Destinatários<div class='botaoAumento'><button name='destinatariosFormulario' value='aumentar'>+</button></div></div>
{/if}

