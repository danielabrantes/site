{nocache}
{include file='menu.tpl'}

<div class='header{$language}'>


{*
    <a href="index.php"><img src='/imagens/banner/banner{$language}.png'/></a>
    
*}
    <a href="index.php"> <img src="imagens/estrutura/logo.png" title="Home" alt='imagem' id='logo'/></a>


    <a href='taxasdeCambio.php'>
        <div id='cambiocaixa'>
            {if {$language=='pt'} or {$language=='es'}}

            {include file='TaxaCambioBrasil.tpl'}
            <div class='clear'></div>
            {include file='TaxaCambioBrasil24h.tpl'}
            <div class='clear'></div>
            {include file='TaxaCambioBrasilExpressa.tpl'}
            {/if}
            {if {$language=='en'}}
            <div id='taxapaisen'>
            {include file='TaxaCambioBrasil.tpl'}
                <div class='clear'></div>
            {include file='TaxaCambioBrasilExpressa.tpl'}
                <div class='clear'>&nbsp;</div>
            {include file='TaxaCambioUKparaPortugal.tpl'}
            </div>
            {/if}
        </div>
    </a>
</div>
{/nocache}
