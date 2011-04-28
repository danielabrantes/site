
<div id="preload-slideshow">
{if isset($language)}
    <div class='cartaz'>
        <div class="close">
            <a href="#" onClick="document.getElementById('preload-slideshow').style.display = 'none';">
                <img src="imagens/fechar.gif" title="Fechar" alt='imagem'>
            </a>
        </div>
        <a href='promocao11.php'>
            <img src="imagens/promocao/10euros.jpg" height=650 alt='imagem' />
        </a>
    </div>
    <div id="timer" style="display: none">
        <form name="redirect">
            <input type="text" size="3" name="redirect2" />
        </form>
    </div>
{else}
    <div class='language'>
        <ul>
            <li><a href='?language=pt'><img src='imagens/bandeiras/pt.gif'/></a></li>
        {*<li><a href='http://www.moneyone.pt?language=pt'><img src='imagens/bandeiras/pt.gif'/></a></li>*}
            <li><a href='http://www.moneyexpress.com.es?language=es'><img src='imagens/bandeiras/es.gif'/></a></li>
            <li><a href='http://www.money1transfer.co.uk?language=uk'><img src='imagens/bandeiras/uk.gif'/></a></li>
        </ul>
    </div>
{/if}
</div>

