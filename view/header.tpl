{nocache}
{include file='menu.tpl'}

<div class='header'>
<a href="index.php"> <img src='/imagens/banner/banner{$language}.png'/>{*<img src="imagens/estrutura/logo.png" title="Home" alt='imagem' />*}</a>    
    <a href='taxasdeCambio.php'>
        <div id='cambiocaixa'>

            
            {if {$language=='pt'} or {$language=='es'}}
            <div id='taxapais'>
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
            {/if}
            </div>


            
        </div>
    </a>
    
</div>
<div class='clear'></div>
{/nocache}
{*debug*}