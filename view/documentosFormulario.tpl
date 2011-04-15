 Actividade:
<input type='text' name='actividade' value='{$user->actividade}' />
Conhecimento:
<select class='combobox' name='meioDeConhecimento'>
	<option>Revista</option>
	<option>SMS</option>
	<option>TV</option>
	<option>Internet</option>
	<option>Amigo</option>
	<option>Loja</option>
	<option>Funcionario</option>
	<option>Flyer</option>
	<option>Outro</option>
</select>
Escolaridade:
<select class='combobox' name='escolaridade'>
	<option value='4classe'>4º Classe</option>
	<option value='6classe'>6º Classe</option>
	<option value='9classe'>9º Classe</option>
	<option value='12classe'>12º Classe</option>
	<option value='barcharlato'>Barcharlato</option>
	<option value='licenciatura'>Licenciatura</option>
	<option>outros</option>
</select>
Estado Civil:
<select class='combobox' name='estadoCivil'>
	<option>{$user->estadoCivil}</option>
	<option value='solteiro'>Solteiro</option>
	<option value='casado'>Casado</option>
	<option value='divorciado'>Divorciado</option>
	<option value='separado'>Separado</option>
	<option value='viuvo'>Viúvo</option>
</select>
Valor Mensal:
<input type='text' value='' name='valorMensal' />
€ Origem do Vencimento:
<select class='combobox' name='origemVencimento'>
	<option value='irs'>I.R.S</option>
	<option value='recibo de vencimento'>Recibo de Vencimento</option>
</select>
Mês/Ano de referências:
<input type='text' value='' name='referenciaVencimento' />
Documentos: Tipo: {*O tipo é necessário ir preenchido *}
<select class='combobox' name='tipo'>
	<option>{$user->tipoDocumento}</option>
	<option value='passaporte'>Passaporte</option>
	<option value='bilheteDeIdentidade'>Bilhete de Identidade</option>
	<option value='nif'>NIF</option>
	<option value='titleDeResidencia'>title de Residencia</option>
	<option value='cartaDeConducao'>Carta de Condução</option>
	<option value='fichaDeInscricao'>Ficha de Inscrição</option>
	<option value='comprovativoDeMorada'>Comprovativo de Morada</option>
	<option value='cartaoDoCidadao'>Cartão do Cidadão</option>
</select>
Número:
<input type='text' name='numero' value='{$user->numeroDocumento}' />
Data de Emissão:
<input type='text' name='dataDeEmissao' value='{$user->dataDeEmissao}' />
Caducidade:
<input type='text' name='dataDeCaducidade' value='{$user->dataDeCaducidade}' />
Orgão Expedidor:
<input type='text' value='' name='orgaoRegisto' />
{*
<div>
	Documento a ser enviado:<input name='uploaded_file' type='file' />
</div>
*}
</div>
{if empty($mensagemDocumentos) }
<button type='submit' name='formulario' value='documentos' class='right'>Alterar Documentos</button>
{else}
<div class='mensagem'>{$mensagemDocumentos}</div>
{/if}
