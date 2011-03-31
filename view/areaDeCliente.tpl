{include file='space.tpl'}
<div id='areaDeCliente'>
	{include file='dadosDoCliente.tpl'}
	<div id='transferencia'>
	{if isset($menu)}
		{if $menu=='novaTransferencia'}{include file='transferencia/novaTransferencia.tpl'}
		{elseif $menu=='transferencia'}{include file='transferencia/transferencia.tpl'}
		{elseif $menu=='transferenciaCambio'}{include file='transferencia/transferenciaCambio.tpl'}
		{elseif $menu=='transferenciaResumo'}{include file='transferencia/transferenciaResumo.tpl'}
		{elseif $menu=='estadosDasTransferencias'}{include file='transferencia/estadosDasTransferencias.tpl'}
		{/if}
	{/if}
	
	</div>
	{include file='space.tpl'}
</div>