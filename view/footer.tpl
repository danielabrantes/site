{if !isset($login)}
<div class="footer">
    <div class="footer_in">
        <div class='footer_link'>

            <a href='faq.php' title='FAQ`s' class='footer_text'>FAQ`s</a>
            <span class='risco'> &nbsp; | &nbsp; </span>
            <a href="publicacao.php" title='Relatórios Anuais' class='footer_text'>Relatórios Anuais</a>
            <span class='risco'> &nbsp; | &nbsp; </span>
            <a href='sistbancario.php' title='Sistema Báncario' class='footer_text'>Sistema Báncario</a>
            <span class='risco'> &nbsp; | &nbsp; </span>
            <a href='condicoes.php' title='Termos e Condições' class='footer_text'>Termos e Condições</a>
            <span class='risco'> &nbsp; | &nbsp; </span>
            <a href='obrigacao.php' title='Obrigações' class='footer_text'>Obrigações</a>
            <span class='risco'> &nbsp; | &nbsp; </span>
            <a href='privacidade.php' title='Políticas de Privacidade' class='footer_text'>Políticas de Privacidade</a>
        </div>
        <div class='footer_texto'>
            <span>2004 - {$smarty.now|date_format:"%Y"} © MoneyOne - Todos os direitos reservados</span>
            <br />
            {include file='validadores.tpl'}
        </div>
    </div>
</div>
{/if}

{*literal}
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-17270964-2']);
    _gaq.push(['_trackPageview']);
    (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
{/literal*}
</body>
</html>