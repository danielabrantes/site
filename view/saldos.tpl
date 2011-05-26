<div class='titulo'>Saldos</div>
<div class='texto'>
	Saldo&nbsp;<span style='font-weight: 600;';>{$result[0]->ctoSaldo}</span>
	Moeda&nbsp;<span style='font-weight: 600;';>{$result[0]->miso_id}</span>
	{include file='space.tpl'}	
	<span style='font-weight: 600;';>
		  <div class='saldos'>Data de Movimento</div>
		<div class='saldos'>Data Valor</div>
		<div class='saldos'>Valor</div>
		<div class='saldos'>Saldo Anterior</div>
		<div class='saldos'>Saldo Actual</div>
	</span>
	<form class='form' method="post" action="facturas.php">
	{foreach from=$result key=myId item=i name=foo}
		<div class='saldos'>&nbsp;{$i->cto_Fecha}</div>
		<div class='saldos'>&nbsp;{$i->cto_FechaValor}</div>
		<div class='saldos'>&nbsp;{$i->cto_Valor}</div>
		<div class='saldos'>&nbsp;{$i->cto_SaldoAnt}</div>
		<div class='saldos'>&nbsp;{$i->cto_SaldoAct}</div>
	{include file='space.tpl'}
	{/foreach}
	</form>
</div>
