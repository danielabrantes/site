<form  action="faleConosco.php" method='post'>
    <fieldset style="width:850px;">
        <legend class="cor">Formulário de Contato</legend>
        
        <table class="tabela" cellpadding="0" cellspacing="0">
            <tr>
                <td class="coluna_in"><strong>Nome:</strong></td>
                <td  class="coluna_in_in"><input type="text" name="nome"  size="65" value="nome" />*
                </td>
            </tr>
            <tr>
                <td class="coluna_in"><strong>Email:</strong></td>
                <td class="coluna_in_in"><input name="email" type="text"  size="65" value="email@dominio.pt" />*
                </td>
            </tr>
            <tr>
                <td class="coluna_in"><strong>Loja:</strong></td>
                <td class="coluna_in_in">
                    <select name="loja" class="combobox"  >
                        <option value="Albufeira" >Albufeira</option>
                        <option value="Amadora" >Amadora</option>
                        <option value="Amora" >Amora</option>
                        <option value="Aveiro" >Aveiro</option>
                        <option value="Braga" >Braga</option>
                        <option value="Carcavelos" >Carcavelos</option>
                        <option value="Cascais" >Cascais</option>
                        <option value="Charneca da Caparica" >Charneca da Caparica</option>
                        <option value="Costa da Caparica" >Costa da Caparica</option>
                        <option value="Funchal/Madeira" >Funchal/Madeira</option>
                        <option value="Lagos" >Lagos</option>
                        <option value="Leiria" >Leiria</option>
                        <option value="Lisboa - Sede" selected="selected">Lisboa - Sede</option>
                        <option value="Lisboa - Baixa do Chiado" >Lisboa - Baixa do Chiado</option>
                        <option value="Odivelas" >Odivelas</option>
                        <option value="Portimão" >Portimão</option>
                        <option value="Porto" >Porto</option>
                        <option value="Quarteira" >Quarteira</option>
                        <option value="Queluz" >Queluz</option>
                        <option value="Setúbal" >Setúbal</option>
                    </select>*</td>
            </tr>
            <tr>
                <td class="coluna_in"><strong>Assunto:</strong></td>
                <td class="coluna_in_in"><input name="assunto"  type="text"  size="65" value="assunto" />*
                </td>
            </tr>
            <tr>
                <td class="coluna_in"><strong>Mensagem:</strong></td>
            </tr>
            <tr>
                <td height="259" colspan="2" valign="middle">
                    <textarea name="mensagem"  cols="95" rows="15" >Mensagem</textarea>*<p><br/></p>
                    <input name="receber" type="checkbox" />&nbsp;&nbsp;
                    <span class="content_texto" >Desejo receber informações sobre promoções da MoneyOne.</span><p><br/></p>
                </td>
            </tr>
        </table>
    </fieldset>
    <input style='float: right; margin-right: 153px; margin-top: 5px;' type='submit' name ='contacto' value="ENVIAR"/>
</form>
<div class='clear'></div>
