<div id='conversor'>
    <form action='taxasdeCambio.php' method='post'>
        <fieldset>
            <legend class='cor'>Conversor</legend>
            Enviar dinheiro para:
            <br />
            <select name='destino'>
                
                    {if $language=='pt' or $language=='es'}
                    <option {if $destino=='Brasil'} selected='selected'{/if}>Brasil</option>
                    {/if}
                    {if $language=='en'}
                    <option {if $destino=='Brasil'} selected='selected'{/if}>Brasil</option>
                    <option {if $destino=='Portugal'} selected='selected'{/if}>Portugal</option>
                    {/if}
                
                
            </select>
            <br />
            Taxa:
            <br />
            <select name='taxa'>
                    {if $language=='pt'}
                    <option {if $taxa=='Normal'} selected='selected'{/if}>Normal</option>
                    <option {if $taxa=='24 HS'} selected='selected'{/if}>24 HS</option>
                    <option {if $taxa=='Expressa'} selected='selected'{/if}>Expressa</option>
                    {/if}
                    {if $language=='es'}
                    <option {if $taxa=='Normal'} selected='selected'{/if}>Normal</option>
                    <option {if $taxa=='Expressa'} selected='selected'{/if}>Expressa</option>
                    {/if}
                    {if $language=='en'}
                    <option {if $taxa=='24 HS'} selected='selected'{/if}>24 HS</option>
                    <option {if $taxa=='Expressa'} selected='selected'{/if}>Expressa</option>
                    {/if}
            </select>
            <br />
            Quantia:
            <br />
            <input type='text' name='valor' value='{$valor}' size='10'/>
            <input type='submit' value='Converter'/>
            <br />
            {if $vazio==false}
            <div id='valor'>{$valorFinal}&nbsp{$moedaFinal}</div>
            {/if}
        </fieldset>
    </form>
</div>