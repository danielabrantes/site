<form name="candidatura" action="emprego.php" method='post'>
    <fieldset style="width:850px;">
        <legend class="cor">Dados Pessoais</legend>
        <table class="tabela" cellpadding="0" cellspacing="0">
            <tr>
                <td class="coluna_in"><strong>Nome Completo:</strong></td>
                <td class="coluna_in_in"><input name="nome" type="text" size="87" value="nome" />*</td>
            </tr>
            <tr>
                <td class="coluna_in" ><strong>Nacionalidade:</strong></td>
                <td class="coluna_in_in"><input name="nacionalidade" type="text"  size="25" value="Portuguesa" />*</td>
            </tr>
            <tr>
                <td class="coluna_in"><strong> N.º Doc. Identificação:</strong></td>
                <td class="coluna_in_in"><input name="identifDoc" type="text" size="25" value="12345678" />*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="tipoDoc" id="radio" value="Passaporte" />
                    Passaporte&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="tipoDoc" id="radio" value="C. Cidadao" />
                    C. Cidadão&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="tipoDoc" id="radio" value="B. Identidade" checked='checked'/>
                    B.Ident.&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="tipoDoc" id="radio" value="A.Residência" />
                    A.Residência&nbsp;&nbsp;&nbsp;&nbsp;*</td>
            </tr>
            <tr>
                <td class="coluna_in"><strong>Data de Emissão:</strong></td>
                <td class="coluna_in_in"><input name="dataEmissao" type="text" maxlength="10" size="25" value="01/01/2010"  />
                    (dd/mm/aaaa)&nbsp;&nbsp;*</td>
            </tr>
            <tr>
                <td class="coluna_in"><strong>Data de Nascimento:</strong></td>
                <td class="coluna_in_in"><input name="dataNascimento" type="text" size="25" maxlength="10" value="01/01/2010" />
                    (dd/mm/aaaa)&nbsp;&nbsp;*</td>
            </tr>
            <tr>
                <td class="coluna_in"><strong>Morada:</strong></td>
                <td class="coluna_in_in"><input name="morada" type="text" size="87" value="Rua..." />*</td>
            </tr>
            <tr>
                <td class="coluna_in"> <strong>Código Postal:</strong></td>
                <td class="coluna_in_in"><input name="codPostal1" type="text" maxlength="4" size="6" value="1900" />-
                    <input name="codPostal2" type="text" maxlength="3" size="4" value="123"/>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong>Localidade:</strong>&nbsp;&nbsp;
                    <input name="localidade" type="text"  size="30" value="Lisboa" />*</td>
            </tr>
            <tr>
                <td class="coluna_in"><strong>Telefone:</strong></td>
                <td class="coluna_in_in"><input name="telefone" type="text"  size="20" maxlength="9" value="961213456"  />*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong>Email:</strong>&nbsp;&nbsp;
                    <input name="email" type="text"  size="46" value="email@mail.com"  />*
                </td>
            </tr>
            <tr>
                <td class="coluna_in"><strong>N.º Carta de Condução:</strong></td>
                <td class="coluna_in_in"><input name="cartaConducao" type="text"  size="9" value="123456789"   /></td>
            </tr>
        </table>
    </fieldset>
    <p><br/></p>
    <fieldset style="width:850px;">
        <legend class="cor">Dados Académicos</legend>
        <table class="tabela" cellpadding="0" cellspacing="0">
            <tr>
                <td class="coluna_in"><strong>Grau de Ensino</strong></td>
                <td class="coluna_in_in"><select name="grauEnsino" class="combobox" >
                        <option value="Ensino Basico">Ensino Básico</option>
                        <option value="Ensino Secundario">Ensino Secundário</option>
                        <option value="Licenciatura">Licenciatura</option>
                        <option value="Mestrado">Mestrado</option>
                        <option value="Doutoramento">Doutoramento</option>
                    </select>*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong>Área/Curso:</strong>&nbsp;&nbsp;
                    <input name="areaCurso" type="text"  size="59" value="curso" />
                </td>
            </tr>
            <tr>
                <td class="coluna_in"><strong>Data de Início:</strong></td>
                <td class="coluna_in_in">
					<input name="dataInicio" type="text"  size="15" value="2010" />
                    (ano)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong>Data de Fim:</strong>&nbsp;&nbsp;
                    <input name="dataFim" type="text"  size="15" value="2010"/>(ano)
                </td>
            </tr>
            <tr>
                <td class="coluna_in"><strong>Línguas:</strong></td>
                <td class="coluna_in_in">&nbsp;</td>
            </tr>
            <tr>
                <td class="coluna_in" ><blockquote>
                        <p><strong>Português</strong></p>
                    </blockquote></td>
                <td class="coluna_in_in"><span >
                        <input type="radio" name="valorPT"  value="Bom" />
                        Bom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="valorPT"  value="Razoável" checked='checked'/>
                        Razoável&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="valorPT"  value="Fraco" />
                        Fraco
                    </span></td>
            </tr>
            <tr>
                <td class="coluna_in"><blockquote>
                        <p><strong>Inglês</strong></p>
                    </blockquote></td>
                <td class="coluna_in_in" ><span >
						<input type="radio" name="valorUK" value="Bom" />
                        Bom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="valorUK"  value="Razoável" checked='checked'/>
                        Razoável&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="valorUK"  value="Fraco" />
                        Fraco </span></td>
            </tr>
            <tr>
                <td class="coluna_in" ><blockquote>
                        <p><strong>Espanhol</strong></p>
                    </blockquote></td>
                <td class="coluna_in_in"><span>
						<input type="radio" name="valorES"  value="Bom" />
                        Bom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="valorES"  value="Razoável" checked='checked'/>
                        Razoável&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="valorES"  value="Fraco" />
                        Fraco </span></td>
            </tr>
            <tr>
                <td class="coluna_in"><blockquote>
                        <p><strong>Russo</strong></p>
                    </blockquote></td>
                <td class="coluna_in_in"><span >
						<input type="radio" name="valorRU"  value="Bom" />
                        Bom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="valorRU"  value="Razoável" checked='checked'/>
                        Razoável&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="valorRU"  value="Fraco" />
                        Fraco </span></td>
            </tr>
            <tr>
                <td class="coluna_in"><blockquote>
                        <p><strong>Outra língua</strong></p>
                    </blockquote></td>
                <td class="coluna_in_in">
					<input name="linguaOutra" type="text"  size="25" value="Portuguesa" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="content-font">
						<input type="radio" name="valorOutra"  value="Bom" />
                        Bom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="valorOutra"  value="Razoável" checked='checked'/>
                        Razoável
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="valorOutra"  value="Fraco" />
                        Fraco</span></td>
            </tr>
        </table>
        <table class="tabela" cellpadding="0" cellspacing="0">
            <tr>
                <td class="coluna_in_in"><strong>Conhecimentos de informática:</strong></td>
            </tr>
        </table>
        <table class="tabela" cellpadding="0" cellspacing="0">
            <tr>
                <td class="coluna_in"><blockquote>
                        <p><strong> Microsoft Word</strong></p>
                    </blockquote></td>
                <td class="coluna_in_in"><span >
						<input type="radio" name="valorWord"  value="Bom" />
                        Bom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="valorWord"  value="Razoável" checked='checked'/>
                        Razoável&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="valorWord"  value="Fraco" />
                        Fraco</span>&nbsp;&nbsp;&nbsp; *</td>
            </tr>
            <tr>
                <td class="coluna_in"><blockquote>
                        <p><strong>Microsoft Excel</strong></p>
                    </blockquote></td>
                <td class="coluna_in_in"><span >
						<input type="radio" name="valorExcel"  value="Bom" />
                        Bom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="valorExcel"  value="Razoável" checked='checked'/>
                        Razoável&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="valorExcel"  value="Fraco" />
                        Fraco</span>&nbsp;&nbsp;&nbsp; *</td>
            </tr>
        </table>
    </fieldset>
    <p><br/></p>
    <fieldset style="width:850px;">
        <legend class="cor">Dados Profissionais</legend>
        <table class="tabela" cellpadding="0" cellspacing="0">
            <tr>
                <td class="coluna" ><strong>Situação profissional atual:</strong></td>
                <td class="coluna_in_in"><select name="situacaoProfissional"  >
                        <option value="Estagio">Estágio</option>
                        <option value="1.º Emprego">1.º Emprego</option>
                        <option value="Empregado">Empregado</option>
                        <option value="Desempregado">Desempregado</option>
                    </select>*
                </td>
            </tr>
        </table>
        <table class="tabela" cellpadding="0" cellspacing="0">
            <tr>
                <td class="coluna"><strong>Área de emprego que se candidata:</strong></td>
                <td class="coluna_in_in"><select name="areaCadidatura" >
                        <option value="Operador de loja">Operador de loja</option>
                        <option value="Secretariado">Secretariado</option>
                        <option value="Comercial">Comercial</option>
                        <option value="Financeira">Financeira</option>
                        <option value="Tecnologia">Tecnologia</option>
                    </select>*
                </td>
            </tr>
        </table>
        <table class="tabela" cellpadding="0" cellspacing="0">
            <tr>
                <td class="coluna_in"><strong>Disponibilidade:</strong></td>
                <td class="coluna_in_in"><input name="disponibilidade" type="text"  size="35" value="Imediata" /></td>
            </tr>

            <tr>
                <td class="coluna" ><strong>Experiência profissional?</strong></td>
                <td class="coluna_in_in">&nbsp;</td>
            </tr>
            <tr>
                <td class="coluna_in" colspan="2" ><textarea name="experienciaProfissional"  cols="55" rows="5" >Experiência</textarea>*</td>
            </tr>
            <tr>
                <td class="coluna"><strong>Empresas onde trabalhou?</strong></td>
                <td class="coluna_in_in">&nbsp;</td>
            </tr>
            <tr>
                <td class="coluna_in" colspan="2"><textarea name="empresaTrabalhou"  cols="55" rows="5" >Empresa</textarea>*</td>
            </tr>
            <tr>
                <td class="coluna" colspan="2" valign="middle"><strong>Motivo pelo qual gostaria de trabalhar na MoneyOne?</strong></td>
            </tr>
            <tr>
                <td class="coluna_in" colspan="2" ><textarea name="motivoMoney"  cols="55" rows="5" >Motivo</textarea>*</td>
            </tr>
            <tr>
                <td class="coluna_in_in" colspan="2"><strong>Como reagiria se um/a cliente o/a acusasse de não ter feito um pedido como solicitado?</strong></td>
            </tr>
            <tr>
                <td height="25" colspan="2" valign="middle">
					<textarea name="pedidoSolicitado" cols="55" rows="5" >Tentaria resolver com calma
					</textarea>*
				</td>
            </tr>
        </table>
        <table class="tabela" cellpadding="0" cellspacing="0">
            <p><br/></p>
            <tr>
                <td class="coluna_in_in">
                    <input name="informacao" type="checkbox" />
                    <span class="content_texto"> Não desejo receber informações sobre promoções da MoneyOne. <p><br/></p>
                        <p><strong>Nota de Privacidade</strong>:<br/>
                            A informação requisitada neste formulário é pedida com o objetivo de obtermos de você os dados mínimos necessários para avaliação da sua candidatura, não servindo para partilhar a sua informação pessoal com  terceiros, sem o seu consentimento explícito.
						</p>
                    </span><br/>
                </td>
            </tr>
        </table>
    </fieldset>
            <input style='float: right; margin-right: 153px; margin-top: 5px;' name="emprego"  type="submit" value="GUARDAR" />

</form>