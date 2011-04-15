<form name="candidatura" action="emprego.php" method='post'>
	<fieldset style="width: 850px;">
		<legend class="cor">Dados Pessoais</legend>
		<div>Nome Completo:</div>
		<div>
			<input name="nome" type="text" size="87" value="nome" />*
		</div>
		<div>Nacionalidade:</div>
		<div>
			<input name="nacionalidade" type="text" size="25" value="Portuguesa" />*
		</div>
		<div>N.º Doc. Identificação:</div>
		<div>
			<input name="identifDoc" type="text" size="25" value="12345678" />* <input type="radio" name="tipoDoc" id="radio" value="Passaporte" /> Passaporte <input type="radio" name="tipoDoc" id="radio" value="C. Cidadao" /> C. Cidadão <input type="radio" name="tipoDoc" id="radio" value="B. Identidade" checked='checked' /> B.Ident. <input type="radio" name="tipoDoc" id="radio" value="A.Residência" /> A.Residência*
		</div>
		<div>Data de Emissão:</div>
		<div>
			<input name="dataEmissao" type="text" maxlength="10" size="25" value="01/01/2010" /> (dd/mm/aaaa)*
		</div>
		<div>Data de Nascimento:</div>
		<div>
			<input name="dataNascimento" type="text" size="25" maxlength="10" value="01/01/2010" /> (dd/mm/aaaa)*
		</div>
		<div>Morada:</div>
		<div>
			<input name="morada" type="text" size="87" value="Rua..." />*
		</div>
		<div>Código Postal:</div>
		<div>
			<input name="codPostal1" type="text" maxlength="4" size="6" value="1900" />- <input name="codPostal2" type="text" maxlength="3" size="4" value="123" />* Localidade: <input name="localidade" type="text" size="30" value="Lisboa" />*
		</div>
		<div>Telefone:</div>
		<div>
			<input name="telefone" type="text" size="20" maxlength="9" value="961213456" />* Email: <input name="email" type="text" size="46" value="email@mail.com" />*
		</div>
		<div>N.º Carta de Condução:</div>
		<div>
			<input name="cartaConducao" type="text" size="9" value="123456789" />
		</div>
		<legend class="cor">Dados Académicos</legend>
		<div>Grau de Ensino</div>
		<div>
			<select name="grauEnsino" class="combobox">
				<option value="Ensino Basico">Ensino Básico</option>
				<option value="Ensino Secundario">Ensino Secundário</option>
				<option value="Licenciatura">Licenciatura</option>
				<option value="Mestrado">Mestrado</option>
				<option value="Doutoramento">Doutoramento</option>
			</select>* Área/Curso: <input name="areaCurso" type="text" size="59" value="curso" />
		</div>
		<div>Data de Início:</div>
		<div>
			<input name="dataInicio" type="text" size="15" value="2010" /> (ano) Data de Fim: <input name="dataFim" type="text" size="15" value="2010" />(ano)
		</div>
		<div>Línguas:</div>
		<div></div>
		<div>
			<blockquote>
				<p>Português</p>
			</blockquote>
		</div>
		<div>
			<input type="radio" name="valorPT" value="Bom" /> Bom <input type="radio" name="valorPT" value="Razoável" checked='checked' /> Razoável <input type="radio" name="valorPT" value="Fraco" /> Fraco
		</div>
		<div>
			<blockquote>
				<p>Inglês</p>
			</blockquote>
		</div>
		<div>
			<input type="radio" name="valorUK" value="Bom" /> Bom <input type="radio" name="valorUK" value="Razoável" checked='checked' /> Razoável <input type="radio" name="valorUK" value="Fraco" /> Fraco
		</div>
		<div>
			<blockquote>
				<p>Espanhol</p>
			</blockquote>
		</div>
		<div>
			<p>
				<input type="radio" name="valorES" value="Bom" /> Bom <input type="radio" name="valorES" value="Razoável" checked='checked' /> Razoável <input type="radio" name="valorES" value="Fraco" /> Fraco
			</p>
		</div>
		<div>
			<blockquote>
				<p>Russo</p>
			</blockquote>
		</div>
		<div>
			<input type="radio" name="valorRU" value="Bom" /> Bom <input type="radio" name="valorRU" value="Razoável" checked='checked' /> Razoável <input type="radio" name="valorRU" value="Fraco" /> Fraco
		</div>
		<div>
			<blockquote>
				<p>Outra língua</p>
			</blockquote>
		</div>
		<div>
			<input name="linguaOutra" type="text" size="25" value="Portuguesa" /> <input type="radio" name="valorOutra" value="Bom" /> Bom <input type="radio" name="valorOutra" value="Razoável" checked='checked' /> Razoável  <input type="radio" name="valorOutra" value="Fraco" /> Fraco

		</div>
		<div>Conhecimentos de informática:</div>
		<div>
			<blockquote>
				<p>Microsoft Word</p>
			</blockquote>
		</div>
		<div>
			<input type="radio" name="valorWord" value="Bom" /> Bom <input type="radio" name="valorWord" value="Razoável" checked='checked' /> Razoável <input type="radio" name="valorWord" value="Fraco" /> Fraco

			 *
		</div>
		<div>
			<blockquote>
				<p>Microsoft Excel</p>
			</blockquote>
		</div>
		<div>
			<input type="radio" name="valorExcel" value="Bom" /> Bom <input type="radio" name="valorExcel" value="Razoável" checked='checked' /> Razoável <input type="radio" name="valorExcel" value="Fraco" /> Fraco

			 *
		</div>
		<legend class="cor">Dados Profissionais</legend>

			<div>Situação profissional atual:
				</div>
				<div>
					<select name="situacaoProfissional">
						<option value="Estagio">Estágio</option>
						<option value="1.º Emprego">1.º Emprego</option>
						<option value="Empregado">Empregado</option>
						<option value="Desempregado">Desempregado</option>
					</select>*
				</div>

					<div>Área de emprego que se candidata:
						</div>
						<div>
							<select name="areaCadidatura">
								<option value="Operador de loja">Operador de loja</option>
								<option value="Secretariado">Secretariado</option>
								<option value="Comercial">Comercial</option>
								<option value="Financeira">Financeira</option>
								<option value="Tecnologia">Tecnologia</option>
							</select>*
						</div>

							<div>Disponibilidade:</div>
							<div>
								<input name="disponibilidade" type="text" size="35" value="Imediata" />
							</div>
							<div>Experiência profissional?
								</div>
								<div></div>

							<td class="coluna_in" colspan="2"><textarea name="experienciaProfissional" cols="55" rows="5">Experiência</textarea>*
								</div>

							<div>Empresas onde trabalhou?
								</div>
								<div></div>

							<td class="coluna_in" colspan="2"><textarea name="empresaTrabalhou" cols="55" rows="5">Empresa</textarea>*
								</div>

							<td class="coluna" colspan="2" valign="middle">Motivo pelo qual gostaria de trabalhar na MoneyOne?
								</div>

							<td class="coluna_in" colspan="2"><textarea name="motivoMoney" cols="55" rows="5">Motivo</textarea>*
								</div>

							<td class="coluna_in_in" colspan="2">Como reagiria se um/a cliente o/a acusasse de não ter feito um pedido como solicitado?
								</div>

							<td height="25" colspan="2" valign="middle"><textarea name="pedidoSolicitado" cols="55" rows="5">Tentaria resolver com calma
														</textarea>*
								</div>

									<div>
										<input name="informacao" type="checkbox" /> Não desejo receber informações sobre promoções da MoneyOne.
											<p>Nota de Privacidade: A informação requisitada neste formulário é pedida com o objetivo de obtermos de você os dados mínimos necessários para avaliação da sua candidatura, não servindo para partilhar a sua informação pessoal com terceiros, sem o seu consentimento explícito.</p>
											</p>

									</div>
									</fieldset>
									<input style='float: right; margin-right: 153px; margin-top: 5px;' name="emprego" type="submit" value="GUARDAR" />
									</form>