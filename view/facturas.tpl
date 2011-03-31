<div class='titulo'>Consulta de Remessas
	<div class='texto'>
		<div class='float_left'>
			<form class='form' method="post" action="facturas.php">
		Nº da factura<input type='text' name='numeroDaFactura'/>
				<input  type="submit" value="Pesquisar" />
			</form>
		</div>
{include file='space.tpl'}
{if isset($facturasResultados)}
		<div class='float_right'>
			<INPUT type="image" SRC="../imagens/print.jpg" ALT="print" onClick="window.print();"/>
		</div>
		{include file='space.tpl'}
		<div id="factura">
			<div id="col1">Número</div><div id="col2">{$result->FraReferenciaCo}&nbsp;</div>
			<div id="col3">Nome do Remetente</div><div id="col4">{$result->CliNombre}&nbsp;</div>

			<div id="col1">Data</div><div id="col2">{$result->FraFechaIngreso}&nbsp;</div>
			<div id="col3">Documentos</div><div id="col4">{$result->CliDNI}&nbsp;</div>
			
			<div id="col1">Data Autorizado</div><div id="col2">{$result->FraFechaAlb}&nbsp;</div>
			<div id="col3">Morada</div><div id="col4">{$result->CliDomicilio}{$result->CliPortal}{$result->CliPisoPuerta}{$result->CliLocation}{$result->CliCP}{$result->CliCiudad}{$result->ClPais}&nbsp;</div>

			<div id='col1'>Pagamento</div><div id='col2'>{$result->FraReferenciaCo}&nbsp;</div>
			<div id="col3">País</div><div id="col4">{$pais}&nbsp;</div>

			<div id='col1'>Processo a</div><div id='col2'>{$result->FraFecha}&nbsp;</div>
			<div id="col3">&nbsp;</div><div id="col4">&nbsp;</div>

			<div id='col1'>Enviado</div><div id='col2'>{$result->FraEnviado}&nbsp;€</div>
			<div id="col3">Nome do Destinatário</div><div id="col4">{$result->BnfNombre}&nbsp;</div>
			
			<div id='col1'>Câmbio</div><div id='col2'>{$result->FraTasa}&nbsp;</div>
			<div id='col3'>Documento</div><div id='col4'>{$result->BnfDocType}{$result->BnfCedula}&nbsp;</div>
			
			<div id='col1'>Taxa</div><div id='col2'>{$result->FraCargo}&nbsp;</div>
			<div id='col3'>Morada</div><div id='col4'>{$result->BnfDireccion}{$result->BnfBarrio}&nbsp;</div>

			<div id='col1'>A Pagar</div><div id='col2'>{$result->FraARecibir} {$result->FraMonPagoISO}{$result->miso_ID}&nbsp;</div>
			<div id='col3'>Cidade</div><div id='col4'>{$cidade}&nbsp;</div>
			
			<span style='font-weight:600;'><div id='col1'>Estado</div><div id='col2'>{$estado}&nbsp;</div></span>
			<div id='col3'>País</div><div id='col4'>{$paisB}&nbsp;</div>

			<div id='col1'>Conceito</div><div id='col2'>{$conceito}&nbsp;</div>
			<div id='col3'>Telefone&nbsp;</div><div id='col4'>{$result->BnfTelefono}&nbsp;</div>
			
			<div id='col1'>Notas</div><div id='col2'>{$result->FraNotas}&nbsp;</div>
			<div id='col3'>Banco&nbsp;</div><div id='col4'>{$result->cb_Banco}&nbsp;</div>
			
			<div id='col1'>Mensagem</div><div id='col2'>{$result->FraMensaje}{$result->CliNumero}{$result->CliNombre}&nbsp;</div>
			<div id='col3'>Modo de Pagamento</div><div id='col4'>{$result->mp_ModoPago}&nbsp;</div>
			
			<div id='col1'>&nbsp;</div><div id='col2'>&nbsp;</div>
			<div id='col3'>Balcão</div><div id='col4'>{$result->FraOrigen1}{$result->OriNombre}&nbsp;</div>

			<div id='col1'>&nbsp;</div><div id='col2'>&nbsp;</div>
			<div id='col3'>Número</div><div id='col4'>{$result->cb_Banco},{$result->CorrNumero}{$result->cb_Cuenta}>{$result->cb_TipoCuenta}{$result->cb_Cuenta_prx}{$result->cb_Cuenta_sux}{$result->cb_Cuenta_mod}{$result->cb_TipoCuenta}&nbsp;</div>

			<div id='col1'>&nbsp;</div><div id='col2'>&nbsp;</div>
			<div id='col3'>Agência</div><div id='col4'>{$result->cb_Sucursal}{$result->cb_CiudadSucursal}&nbsp;</div>

			<div id='col1'>&nbsp;</div><div id='col2'>&nbsp;</div>
			<div id='col3'>&nbsp;</div><div id='col4'>&nbsp;</div>
			
		</div>

{/if}
	</div></div>
{include file='space.tpl'}
