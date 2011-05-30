<form action="faleConosco.php" method='post'>
    <fieldset>
        <legend class="cor">Formulário de Contato</legend>
        <div class='clear'>&nbsp;</div>
        <div class='left'>Nome:</div><div class='right'><input type="text" name="nome" size="65" value="nome" /></div>
        <div class='left'>Email:</div><div class='right'><input name="email" type="text" size="65" value="email@dominio.pt" /></div>
        {if {$language}=='pt'}
        <div class='left'>Loja:</div><div class='right'>
            <select name="loja" >
                <option value="Albufeira">Albufeira</option>
                <option value="Amadora">Amadora</option>
                <option value="Amora">Amora</option>
                <option value="Aveiro">Aveiro</option>
                <option value="Braga">Braga</option>
                <option value="Carcavelos">Carcavelos</option>
                <option value="Cascais">Cascais</option>
                <option value="Charneca da Caparica">Charneca da Caparica</option>
                <option value="Costa da Caparica">Costa da Caparica</option>
                <option value="Funchal/Madeira">Funchal/Madeira</option>
                <option value="Lagos">Lagos</option>
                <option value="Leiria">Leiria</option>
                <option value="Lisboa - Sede" selected="selected">Lisboa - Sede</option>
                <option value="Lisboa - Baixa do Chiado">Lisboa - Baixa do Chiado</option>
                <option value="Odivelas">Odivelas</option>
                <option value="Portimão">Portimão</option>
                <option value="Porto">Porto</option>
                <option value="Quarteira">Quarteira</option>
                <option value="Queluz">Queluz</option>
                <option value="Setúbal">Setúbal</option>
            </select>
        </div>
        {/if}
        <div class='left'>Assunto:</div><div class='right'><input name="assunto" type="text" size="65" value="assunto" /></div>
        <div class='left'>Mensagem:</div><div class='right'><textarea name="mensagem" cols="50" rows="10">Mensagem</textarea></div>


        <div class='clear'>&nbsp;</div>
        <div class='onlyleft'><input name="receber" type="checkbox" />Não desejo receber informações sobre promoções da MoneyOne.</div>
        <div class='texto'>
            <div class='onlyright'>
                <input type='submit' name='contacto' value="ENVIAR" />
            </div>
        </div>
        <div class='clear'>&nbsp;</div>
    </fieldset>
</form>
<div class='clear'></div>
{if isset($mensagem)}
<div class='mensagem'>{$mensagem}</div>
{/if}