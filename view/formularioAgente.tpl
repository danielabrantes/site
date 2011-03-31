<form action="agenteTornarAgente.php" method='post' enctype='multipart/form-data'>
    <fieldset style="width: 850px;">
        <legend class="cor">Formulário de interesse</legend>
        <table class="tabela" cellpadding="0" cellspacing="0">
            <tr>
                <td class="coluna_in"><strong>Nome da empresa:</strong></td>
                <td class="coluna_in_in">
                    <input name="empresa" type="text" size="60" placeholder="Empresa" />*
                </td>
            </tr>
            <tr>
                <td class="coluna_in">
                    <strong>Número de NIF:</strong>
                </td>
                <td class="coluna_in_in">
                    <input name="nif" type="text" size="25" placeholder="211234567" />*
                </td>
            </tr>
            <tr>
                <td class="coluna_in"><strong>Nome de Contacto:</strong></td>
                <td class="coluna_in_in">
                    <input name="nome" type="text" size="25" placeholder="nome" />*
                </td>
            </tr>
            <tr>
                <td class="coluna_in"><strong>Morada da empresa:</strong></td>
                <td class="coluna_in_in">
                    <input name="rua" type="text" size="60" placeholder="rua" />*
                </td>
            </tr>
            <tr>
                <td class="coluna_in"><strong>Cidade:</strong></td>
                <td class="coluna_in_in">
                    <input name="cidade"
                           type="text"
                           size="25"
                           placeholder="Lisboa" />*&nbsp;&nbsp;&nbsp;
                    <strong>CEP:</strong>
                    <input name="cep" type="text" size="25" placeholder="1900" />*&nbsp;&nbsp;&nbsp; <strong>País:</strong>
                    <input name="pais" type="text" size="25" placeholder="Portugal" />*
                </td>
            </tr>
            <tr>
                <td class="coluna_in"><strong>Telefone empresa:</strong></td>
                <td class="coluna_in_in">
                    <input name="telefone" type="text" size="25" placeholder="213546895" />*
                </td>
            </tr>
            <tr>
                <td class="coluna_in"><strong>Tipo de negócio:</strong></td>
                <td class="coluna_in_in">
                    <input name="tipo" type="text" size="60" placeholder="Comercial" />*
                </td>
            </tr>
            <tr>
                <td class="coluna_in"><strong>Número do CAE:</strong></td>
                <td class="coluna_in_in">
                    <input name="cae" type="text" size="25" placeholder="1256986" />*
                </td>
            </tr>
            <tr>
                <td class="coluna_in"><strong>Número de filiais:</strong></td>
                <td class="coluna_in_in">
                    <input name="filial" type="text" size="25" placeholder="1" />*
                </td>
            </tr>
            <tr>
                <td class="coluna_in">
                    <strong> Email:</strong></td>
                <td class="coluna_in_in">
                    <input name="email" type="text" size="60" placeholder="mail@mail.com" />*
                </td>
            </tr>
            <tr>
                <td class="coluna_in"><strong>Observações:</strong></td>
                <td class="coluna_in_in" colspan="2"><br/>
                    <textarea name="obs" cols="55" rows="5" placeholder='Observações'></textarea>
                    <p><br/></p>
                </td>

            </tr>
        </table>
    </fieldset>

    <input style='float: right; margin-right: 153px; margin-top: 5px;' name="agente" type="submit" value="GUARDAR" />

</form>
