
{if isset($esqueciSenha) and $esqueciSenha==1}
<form action='esqueciSenha.php' method='post'>
    <p style="text-align: center; margin-top: 20px;">Introduza o email com o qual se cadastrou:</p>
    <p style="text-align: center;">
        <input name='esqueciSenha' type='text' value='email@moneyone.pt' /> <input type='submit' value='enviar' />
    </p>
</form>
{else}
<script>new pausescroller(destaque, "pscroller2", "someclass", 5000);</script>
<div class='icons'>
    <div id='title_icons'>Visite o nosso blog e saiba de todas as nossas promoções e eventos</div>
    <div class='iconmaistexto'>
        <a href="http://moneyone-moneyone.blogspot.com/" title="Pedir Cartão de Pontos"> <img class='icon' src="imagens/estrutura/blogger.png" alt='imagem' /> </a>
        <div class='icontexto'>Blog</div>
    </div>
    <div class='iconmaistexto'>
        <a href="http://www.facebook.com/home.php?#!/profile.php?id=100001553641511" target="_blank" title="Facebook"> <img class='icon' src="imagens/estrutura/facebook.png" alt='imagem' /> </a>
        <div class='icontexto'>Facebook</div>
    </div>
    <div class='iconmaistexto'>
        <a href="http://www.orkut.com" target="_blank" title="Orkut"> <img class='icon' src="imagens/estrutura/orkut.png" alt='imagem' /> </a>
        <div class='icontexto'>Orkut</div>
    </div>
    <div class='clear'></div>
</div>
<div id='receber_noticias'>
    <p>Receba as últimas notícias sobre promoções e eventos no seu email, subscreva:</p>

    <form name='noticias' action='index.php' method='post'>
        <div class='seta'>
            <input type='text' name='email' id='news' class='header_textbox' placeholder='email@email.com' />
            <input type='image' src='../../imagens/estrutura/seta.png'/>
        </div>
    </form>		
    <div class='clear'></div>
</div>
{/if}


