<form  action="" method='post' action="pedirCartao.php">
    <fieldset style="width:850px;">
        <legend class="cor">Pedir Cartão de Pontos</legend>
        <table class="tabela" cellpadding="0" cellspacing="0">
            <tr>
                <td class="coluna_in"><strong>Nome Completo:</strong></td>
                <td  class="coluna_in_in"><input type="text" name="nome"  size="65" value="nome" />*
                </td>
            </tr>
            <tr>
                <td class="coluna_in"><strong>Email:</strong></td>
                <td class="coluna_in_in"><input name="email" type="text"  size="65" value="email@dominio.pt" />*
                </td>
            </tr>
            <tr>
                <td class="coluna_in"><strong>Telefone:</strong></td>
                <td class="coluna_in_in"><input name="telefone"  type="text"  size="20" value="961236985" />*
                </td>
            </tr>
        </table>
        <table class="tabela" cellpadding="0" cellspacing="0">
            <p><br/></p>
            <tr>
                <td class="coluna_in_in">
                    <input name="cadastro" type="checkbox" />
                    <span class="content_texto"> Já tenho cadastro numa das lojas da MoneyOne - Portugal.
                    </span>
                    <p><br/></p>
                    <input name="regulamento" type="checkbox" />
                    <span class="content_texto"> Li e concordo com o <a href="regulamento.php"  class="content_link">Regulamento do Cartão de Pontos</a>.&nbsp;&nbsp;<span class="coluna_in_in">*</span>
                    </span>
                    <p><br/></p>
                    <input name="informacao" type="checkbox" />
                    <span class="content_texto"> Não desejo receber informações sobre promoções da MoneyOne.
                    </span>
                    <p><br/></p>
                </td>
            </tr>
        </table>
    </fieldset>
    <input style='float: right; margin-right: 153px; margin-top: 5px;' type='submit' name ='enviar' value="ENVIAR"/>
</form>
