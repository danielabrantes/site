<div class='titulo'><div class='texto'>Resumo da Transferência</div></div>
<div class='subtitulo'><div class='texto'>Dados do Destinarário</div></div>
<div class='texto'>
		Nome:{$receptor->nome}<br />
</div>
<div class='subtitulo'><div class='texto'>Modo de Cobrança</div></div>
<div class='texto'>
	{if $modoDeCobranca == 133}
		Entidade:&nbsp;<b>{$entidade}</b><br />
		Referência:&nbsp;<b>{$referencia}</b><br />
		{*Data Limite de pagamento:<b>{$smarty.now|date_format:"%d-%m-%Y"}</b>*}
	{else}
		<p></p>
		Poderá enviar dinherio para uma das seguintes contas:
		<p></p>
		{$conta}
		<br />
	{/if}
		<b>Total a pagar:{$total}&nbsp;{$moedaEmissor->nome}</b>
</div>
<div class='subtitulo'><div class='texto'>Modo de Pagamento</div></div>
<div class='texto'>
		Modo de entrega:&nbsp;<b>{$modoDePagamentoReceptor->nome}</b><br />
		Conta:<b>{$receptor->conta}</b><br />
		Banco:<b>{$receptor->banco}</b><br />
		Pais:<b>{$receptor->pais}</b><br />
		{$valor}&nbsp;{$moedaEmissor->nome}&nbsp;x&nbsp;{$cambio->taxa} = <b>{$valorReceptor}&nbsp;{$moedaReceptor->nome}</b>
</div>
<form action='transferencia.php' method='post'>
	<center><button type='submit' value='confirmar' name='pagina'>Confirmar Transferência</button></center>
</form>