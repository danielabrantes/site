<form enctype='multipart/form-data' action='cadastro.php' name='cadastro' method='post'>
	<fieldset style='width: 850px;'>
		<legend class='cor'>cadastro</legend>
		<table class='tabela' cellpadding='0' cellspacing='0'>
			<tr>
				<td class='coluna_in'>
					<strong>Nome Completo:</strong>
				</td>
				<td class='coluna_in_in'>
					<input type='text' name='nome' size='65' value='nome'/>*
				</td>
			</tr>
			<tr>
				<td class='coluna_in'>
					<strong>Contatos:</strong>
				</td>
				<td class='coluna_in_in'>
					<strong>Tel. Fixo:</strong>
					<input name='telefone' type='text' size='15' value='960000000'/>
					*&nbsp;&nbsp;&nbsp;
					<strong>Tel.Móvel:
					</strong>
					<input name='telemovel' type='text'size='15'value='960000000'/>*
				</td>
			</tr>
			<tr>
				<td class='coluna_in'>
					<strong>Email:</strong>
				</td>
				<td class='coluna_in_in'>
					<input name='email' type='text' size='50' value='email@domain.com'/>*
				</td>
			</tr>
			<tr>
				<td class='coluna_in'>
					<strong>País:</strong>
				</td>
				<td class='coluna_in_in'>
					<select name='pais' class='combobox'>
						<option>Portugal</option>
					</select>&nbsp;&nbsp;&nbsp;
					<strong>Concelho:</strong>
                                        <input type='text' name='concelho' value='Lisboa' size='15'/>*&nbsp;&nbsp;&nbsp;
					<strong>Província:</strong>
                                        <input type='text' name='provincia' value='Lisboa' size='15'/>*
				</td>
			</tr>
			<tr>
				<td class='coluna_in'>
					<strong>Localidade:</strong>
				</td>
				<td class='coluna_in_in'>
					<input name='localidade' type='text' size='15' value='Lisboa'/>*&nbsp;&nbsp;&nbsp;
					<strong>Morada:</strong>
					<input name='rua' type='text' size='50' value='Av. da Liberdade'/>*
				</td>
			</tr>
			<tr>
				<td class='coluna_in'>
					<strong>Código Postal:</strong>
				</td>
				<td class='coluna_in_in'>
					<input name='codigoPostal' type='text' size='15' value='1900-170'/>
					*&nbsp;&nbsp;&nbsp;
					<strong>Número:
					</strong>
					<input name='porta' type='text' size='10' value='10'/>
					*&nbsp;&nbsp;&nbsp;
					<strong>Andar/ Porta:</strong>
					<input name='piso' type='text' size='10' value='1ºE'/>
				</td>
			</tr>
			<tr>
				<td class='coluna_in'>
					<strong>Naturalidade:</strong>
				</td>
				<td class='coluna_in_in'>
					<select name='nacionalidade' class='combobox'>
						{foreach from=$paises item=pais}
						<option {$pais->id}>{$pais->nome}</option>
						{/foreach}

					</select>*&nbsp;&nbsp;&nbsp;
					<strong>Data De Nascimento:</strong>
	Dia<select name='dataDeNascimentoDia'>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
						<option>13</option>
						<option>14</option>
						<option>15</option>
						<option>16</option>
						<option>17</option>
						<option>18</option>
						<option>19</option>
						<option>20</option>
						<option>21</option>
						<option>22</option>
						<option>23</option>
						<option>24</option>
						<option>25</option>
						<option>26</option>
						<option>27</option>
						<option>28</option>
						<option>29</option>
						<option>30</option>
						<option>31</option>
					</select>
			Mês
					<select name='dataDeNascimentoMes'>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
					</select>
			Ano
					<select name='dataDeNascimentoAno'>
						<option>2000</option>
						<option>1999</option>
						<option>1998</option>
						<option>1997</option>
						<option>1996</option>
						<option>1995</option>
						<option>1994</option>
						<option>1993</option>
						<option>1992</option>
						<option>1991</option>
						<option>1990</option>
						<option>1989</option>
						<option>1988</option>
						<option>1987</option>
						<option>1986</option>
						<option>1985</option>
						<option>1984</option>
						<option>1983</option>
						<option>1982</option>
						<option>1981</option>
						<option>1980</option>
						<option>1979</option>
						<option>1978</option>
						<option>1977</option>
						<option>1976</option>
						<option>1975</option>
						<option>1974</option>
						<option>1973</option>
						<option>1972</option>
						<option>1971</option>
						<option>1970</option>
						<option>1969</option>
						<option>1968</option>
						<option>1967</option>
						<option>1966</option>
						<option>1965</option>
						<option>1964</option>
						<option>1963</option>
						<option>1962</option>
						<option>1961</option>
						<option>1960</option>
						<option>1959</option>
						<option>1958</option>
						<option>1957</option>
						<option>1956</option>
						<option>1955</option>
						<option>1954</option>
						<option>1953</option>
						<option>1952</option>
						<option>1951</option>
						<option>1950</option>
						<option>1949</option>
						<option>1948</option>
						<option>1947</option>
						<option>1946</option>
						<option>1945</option>
						<option>1944</option>
						<option>1943</option>
						<option>1942</option>
						<option>1941</option>
						<option>1940</option>
						<option>1939</option>
						<option>1938</option>
						<option>1937</option>
						<option>1936</option>
						<option>1935</option>
						<option>1934</option>
						<option>1933</option>
						<option>1932</option>
						<option>1931</option>
						<option>1930</option>
						<option>1929</option>
						<option>1928</option>
						<option>1927</option>
						<option>1926</option>
						<option>1925</option>
						<option>1924</option>
						<option>1923</option>
						<option>1922</option>
						<option>1921</option>
						<option>1920</option>
					</select>*&nbsp;&nbsp;&nbsp;


					<strong>Sexo:</strong>

					<select name='sexo' class='combobox'>
						<option value='f'>Feminino</option>
						<option value='m'>Masculino</option>
					</select> *
				</td>
			</tr>
			<tr>
				<td class='coluna_in'>
					<strong>Nacionalidade:</strong>
				</td>
				<td class='coluna_in_in'>
					<input type='text' name='naturalidade1' value ='Portuguesa'/>
						*&nbsp;&nbsp;&nbsp;
					<strong>Outra Nacionalidade:</strong>
					<input type='text' name='naturalidade2' value ='Portuguesa'/>
					*
				</td>
			</tr>
			<tr>
				<td class='coluna_in'>
					<strong>Actividade:</strong>
				</td>
				<td class='coluna_in_in'>
					<input name='actividade' type='text' size='40' value='Taxista'/> *
				</td>
			</tr>
			<tr>
				<td class='coluna_in'>
					<strong>Conhecimento:</strong>
				</td>
				<td class='coluna_in_in'>
					<select name='meioDeConhecimento' class='combobox'>
						<option value='revista'>Revista</option>
						<option value='sms'>SMS</option>
						<option value='tv'>TV</option>
						<option value='internet'>Internet</option>
						<option value='amigo'>Amigo</option>
						<option value='loja'>Loja</option>
						<option value='funcionario'>Funcionario</option>
						<option value='flyer'>Flyer</option>
						<option value='outro'>Outro</option>
					</select>*
				</td>
			</tr>
			<tr>
				<td class='coluna_in'>
					<strong>Escolaridade:</strong>
				</td>
				<td class='coluna_in_in'>
					<select name='escolaridade' class='combobox'>
						<option value='4classe'>4º Classe</option>
						<option value='6classe'>6º Classe</option>
						<option value='9classe'>9º Classe</option>
						<option value='12classe'>12º Classe</option>
						<option value='barcharlato'>Barcharlato</option>
						<option value='licenciatura'>Licenciatura</option>
						<option>outros</option>
					</select>*
                                        &nbsp;&nbsp;&nbsp;
					<strong>Estado Civil:</strong>

					<select name='estadoCivil' class='combobox'>
						<option value='solteiro'>Solteiro</option>
						<option value='casado'>Casado</option>
						<option value='divorciado'>Divorciado</option>
						<option value='separado'>Separado</option>
						<option value='viuvo'>Viúvo</option>
					</select>
					*
				</td>
			</tr>
			<tr>
				<td class='coluna_in'>
					<strong>Valor Mensal:</strong>
				</td>
				<td class='coluna_in_in'>
					<input name='valorMensal' type='text' size='20' value='500'/>
					€*&nbsp;&nbsp;&nbsp;
					<strong>Origem do Vencimento:</strong>
					<select name='origemVencimento' class='combobox'>
						<option value='irs'>I.R.S</option>
						<option value='recibo de vencimento'>Recibo de Vencimento</option>
					</select>*
				</td>
			</tr>
			<tr>
				<td class='coluna_in'>
					<strong>Mês/Ano de referências:</strong>
				</td>
				<td class='coluna_in_in'>
					<input name='referenciaVencimento' type='text' size='15' value='2010'/>
					*
				</td>
			</tr>
			<tr>
				<td class='coluna_in'><br/>
					<strong>Documentos:</strong>
					
				</td>
				<td>
					* Caso o documento escolhido seja o passaporte do Brasil e a versão deste seja a antiga (capa verde), enviar as 3 primeiras páginas.
					Caso contrário, a versão mais recente contem a informação toda na 1ª página.
				</td>
			</tr>
			<tr>
				<td class='coluna_in'>
					<strong>Tipo:</strong>
				</td>
				<td class='coluna_in_in'>
					<select name='tipo' class='combobox'>
						<option value='passaporte'>Passaporte</option>
						<option value='bilhete de identidade'>Bilhete de Identidade</option>
						<option value='nif'>NIF</option>
						<option value='titulo de residencia'>Titulo de Residencia</option>
						<option value='carta de conducao'>Carta de Condução</option>
						<option value='ficha de inscricao'>Ficha de Inscrição</option>
						<option value='comprovativo de morada'>Comprovativo de Morada</option>
						<option value='cartao do cidadao'>Cartão do Cidadão</option>
					</select>
					<select name='nacionalidadeDocumento' class='combobox'>
						<option value='Brasil'>Brasil</option>
						<option value=''>Outra</option>
					</select>
					*&nbsp;&nbsp;&nbsp;
					<strong>Data de Emissão:</strong>
					<input name='dataDeEmissao' type='text' size='15' value='01/01/2006'/>
					*
				</td>
			</tr>
			<tr>
				<td class='coluna_in'>
					<strong>Número:</strong>
				</td>
				<td class='coluna_in_in'>
					<input name='numero' type='text' size='15' value='11989536'/>
					*&nbsp;&nbsp;&nbsp;
					<strong>Caducidade:</strong>
					<input name='dataDeCaducidade' type='text' size='15' value='01/01/2016'/>
					*&nbsp;&nbsp;&nbsp;
					<strong>Orgão Expedidor:</strong>
					<input name='orgaoRegisto' type='text' size='15' value='PF'/>*
				</td>
			</tr>
		</table>
		<table class='tabela' cellpadding='0' cellspacing='0'>
			<tr>
				<td height='40'>
					<label class='coluna_in'>
						<strong>Documento  ser enviado:</strong>
					</label>
					<input id='file'name='uploaded_file' type='file'/>
					*
				</td>
			</tr>
		</table>
	</fieldset>
	<input style='float: right; margin-right: 153px; margin-top: 5px;' name='cadastro' type='submit' value='GUARDAR'/>
</form>