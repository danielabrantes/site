<div class='titulo'>A Pagamento</div>
<div class='texto'><span style='font-weight: 600;';>
<div class='pagamentoCol'>Número da Factura</div>
<div class='pagamentoCol'>Estado</div>
<div class='pagamentoCol'>Realizado a</div>
<div class='pagamentoCol'>Nome do beneficiário</div>
<div class='pagamentoCol'>Valor:</div>
<div class='pagamentoCol'>Moeda:</div>
</span> {include file='space.tpl'}

<form class='form' method="post" action="facturas.php">{foreach
from=$result key=myId item=i name=foo} <span
	style='color: {$ i- &gt; cor';>
<div class='pagamentoCol'>&nbsp;{$i->FraReferenciaCo}</div>
<div class='pagamentoCol'>&nbsp;{$i->estado}</div>
<div class='pagamentoCol'>&nbsp;{$i->FraFechaIngreso}</div>
<div class='pagamentoCol'>&nbsp;{$i->FraBnfNombre}</div>
<div class='pagamentoCol'>&nbsp;{$i->FraEnviado}</div>
<div class='pagamentoCol'>&nbsp;{$i->miso_id}</div>
<div class='float_left'><input type='hidden' name='numeroDaFactura'
	value='{$i->FraReferenciaCo}' /> <input type="submit" value="Consultar" />
</div>
</span> {include file='space.tpl'} {/foreach}</form>
</div>
