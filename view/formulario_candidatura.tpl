<form name="candidatura" action="emprego.php" method='post'>
    <fieldset >
        <legend class="cor">Dados Pessoais</legend>
        <div class='left'>Nome Completo:</div><div class='right'><input name="nome" type="text" size="60" value="nome" /></div>
        <div class='left'>Nacionalidade:</div><div class='right'><input name="nacionalidade" type="text" size="25" value="Portuguesa" /></div>
        <div class='left'>N.º Doc. Identificação:</div><div class='right'><input name="identifDoc" type="text" size="25" value="12345678" /></div>
        <div class='left'>&nbsp;</div><div class='right'><input type="radio" name="tipoDoc" id="radio" value="Passaporte" />Passaporte</div>
        <div class='left'>&nbsp;</div><div class='right'><input type="radio" name="tipoDoc" id="radio" value="C. Cidadao" />C.Cidadão</div>
        <div class='left'>&nbsp;</div><div class='right'><input type="radio" name="tipoDoc" id="radio" value="B. Identidade" checked='checked' />B.I.</div>
        <div class='left'>&nbsp;</div><div class='right'><input type="radio" name="tipoDoc" id="radio" value="A.Residência" />Residência</div>
        <div class='left'>Data de Emissão:</div><div class='right'><input name="dataEmissao" type="text" maxlength="10" size="25" value="01/01/2010" /> (dd/mm/aaaa)</div>
        <div class='left'>Data de Nascimento:</div><div class='right'><input name="dataNascimento" type="text" size="25" maxlength="10" value="01/01/2010" /> (dd/mm/aaaa)</div>
        <div class='left'>Morada:</div><div class='right'><input name="morada" type="text" size="60" value="Rua..." /></div>
        <div class='left'>Código Postal:</div>
        <div class='right'>
            <input name="codPostal1" type="text" maxlength="4" size="6" value="1900" />-
            <input name="codPostal2" type="text" maxlength="3" size="4" value="123" />
        </div>
        <div class='left'>Localidade:</div><div class='right'><input name="localidade" type="text" size="30" value="Lisboa" /></div>
        <div class='left'>Telefone:</div><div class='right'><input name="telefone" type="text" size="20" maxlength="9" value="961213456" /></div>
        <div class='left'>Email:</div><div class='right'><input name="email" type="text" size="46" value="email@mail.com" /></div>
        <div class='left'>Nº Carta de Condução</div><div class='right'><input name="cartaConducao" type="text" size="9" value="123456789" /></div>
        <legend class="cor">Dados Académicos</legend>
        <div class='left'>Grau de Ensino</div><div class='right'>
            <select name="grauEnsino" class="combobox">
                <option value="Ensino Basico">Ensino Básico</option>
                <option value="Ensino Secundario">Ensino Secundário</option>
                <option value="Licenciatura">Licenciatura</option>
                <option value="Mestrado">Mestrado</option>
                <option value="Doutoramento">Doutoramento</option>
            </select>
        </div>
        <div class='left'>Área/Curso:</div><div class='right'><input name="areaCurso" type="text" size="59" value="curso" /></div>
        <div class='left'>Data de Início:</div><div class='right'><input name="dataInicio" type="text" size="15" value="2010" /> (ano) Data de Fim: <input name="dataFim" type="text" size="15" value="2010" />(ano)</div>
        <div>Línguas:</div>
        <div class='left'>Português</div><div class='right'><input type="radio" name="valorPT" value="Bom" /> Bom <input type="radio" name="valorPT" value="Razoável" checked='checked' /> Razoável <input type="radio" name="valorPT" value="Fraco" /> Fraco</div>
        <div class='left'>Inglês</div><div class='right'><input type="radio" name="valorUK" value="Bom" /> Bom <input type="radio" name="valorUK" value="Razoável" checked='checked' /> Razoável <input type="radio" name="valorUK" value="Fraco" /> Fraco</div>
        <div class='left'>Espanhol</div><div class='right'><input type="radio" name="valorES" value="Bom" /> Bom <input type="radio" name="valorES" value="Razoável" checked='checked' /> Razoável <input type="radio" name="valorES" value="Fraco" /> Fraco</div>
        <div class='left'>Russo</div><div class='right'><input type="radio" name="valorRU" value="Bom" /> Bom <input type="radio" name="valorRU" value="Razoável" checked='checked' /> Razoável <input type="radio" name="valorRU" value="Fraco" /> Fraco</div>
        <div class='left'>Outra língua</div><div class='right'><input name="linguaOutra" type="text" size="25" value="Portuguesa" /> <input type="radio" name="valorOutra" value="Bom" /> Bom <input type="radio" name="valorOutra" value="Razoável" checked='checked' /> Razoável  <input type="radio" name="valorOutra" value="Fraco" /> Fraco</div>
        <div>Conhecimentos de informática:</div>
        <div class='left'>Microsoft Word</div><div class='right'><input type="radio" name="valorWord" value="Bom" /> Bom <input type="radio" name="valorWord" value="Razoável" checked='checked' /> Razoável <input type="radio" name="valorWord" value="Fraco" /> Fraco</div>
        <div class='left'>Microsoft Excel</div><div class='right'><input type="radio" name="valorExcel" value="Bom" /> Bom <input type="radio" name="valorExcel" value="Razoável" checked='checked' /> Razoável <input type="radio" name="valorExcel" value="Fraco" /> Fraco</div>
        <legend class="cor">Dados Profissionais</legend>
        <div class='left'>Situação profissional atual:</div><div class='right'>
            <select name="situacaoProfissional">
                <option value="Estagio">Estágio</option>
                <option value="1.º Emprego">1.º Emprego</option>
                <option value="Empregado">Empregado</option>
                <option value="Desempregado">Desempregado</option>
            </select>
        </div>
        <div class='left'>Área de emprego que se candidata:</div><div class='right'>
            <select name="areaCadidatura">
                <option value="Operador de loja">Operador de loja</option>
                <option value="Secretariado">Secretariado</option>
                <option value="Comercial">Comercial</option>
                <option value="Financeira">Financeira</option>
                <option value="Tecnologia">Tecnologia</option>
            </select>
        </div>
        <div class='left'>Disponibilidade:</div><div class='right'><input name="disponibilidade" type="text" size="35" value="Imediata" /></div>
        <div class='left'>Experiência profissional?</div><div class='right'><textarea name="experienciaProfissional" cols="50%" rows="5">Experiência</textarea></div>
        <div class='clear'>&nbsp;</div>
        <div class='left'>Empresas onde trabalhou?</div><div class='right'><textarea name="empresaTrabalhou" cols="50%" rows="5">Empresa</textarea></div>
        <div class='clear'>&nbsp;</div>
        <div class='left'>Motivo pelo qual gostaria de trabalhar na MoneyOne?</div><div class='right'><textarea name="motivoMoney" cols="50%" rows="5">Motivo</textarea></div>
        <div class='clear'>&nbsp;</div>
        <div class='left'>Como reagiria se um/a cliente o/a acusasse de não ter feito um pedido como solicitado?</div><div class='right'><textarea name="pedidoSolicitado" cols="50%" rows="5">Tentaria resolver com calma</textarea></div>
        <div class='clear'>&nbsp;</div>
        <div class='onlyleft'><input name="informacao" type="checkbox" />Desejo receber informações sobre promoções da MoneyOne.Nota de Privacidade: A informação requisitada neste formulário é pedida com o objetivo de obtermos de você os dados mínimos necessários para avaliação da sua candidatura, não servindo para partilhar a sua informação pessoal com terceiros, sem o seu consentimento explícito.</div>
        <div class='onlyright'><input name="emprego" type="submit" value="GUARDAR" /></div>
    </fieldset>
</form>