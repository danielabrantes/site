{include file='menu.tpl'}
<div class='header'>
    <a href='taxasdeCambio.php'>
        <div id='cambiocaixa'>
{nocache}
            <div id='taxa'>Taxas de Câmbio</div>

            <div id='taxapais'>
            Brazil {include file='TaxaCambioBrasil.tpl'}
            {if {$language=='en'}}
            <div class='clear'></div>
			Portugal {include file='TaxaCambioUKparaPortugal.tpl'}
			{/if}


{/nocache}
            </div>
        </div>
    </a>
    <a href="index.php"> <img src="imagens/estrutura/logo.png" title="Home" alt='imagem' /></a>
</div>
<div class='clear'></div>