<div class="content_conteudo_division_center">
{if isset($esqueciSenha) and $esqueciSenha==1}
    <form action='esqueciSenha.php' method='post' >
    <p style=" text-align:center; margin-top: 20px; ">Introduza o email com o qual se cadastrou:</p>
    <p style=" text-align:center; ">
        <br/><input  name='esqueciSenha' type='text' value='email@moneyone.pt'/>
        <input type='submit'  value='enviar'/>
    </p>
</form>
{else}
    <div class="content_center1">
        <span class="content_center_title_text" style="color: #23466c; font-size: 15px; font-weight: bold;">Rapidez,
            segurança e taxas grátis no envio do seu dinheiro <br />
            </span>
        <p><br />
        </p>
        <p><br />
        </p>
        <div class='texto'><script>new pausescroller(destaque, "pscroller2", "someclass", 5000);</script></div>
    </div>
    <div class ='icons'>
        <div class='iconmaistexto'>
            <a href="http://moneyone-moneyone.blogspot.com/" title="Pedir Cartão de Pontos">
                <img  class ='icon' src="imagens/estrutura/blogger.png" alt='imagem'/>
            </a>
            <div class='icontexto'>Blog</div>
        </div>
        <div class='iconmaistexto'>
            <a href="http://www.facebook.com/home.php?#!/profile.php?id=100001553641511" target="_blank" title="Facebook">
                <img  class ='icon' src="imagens/estrutura/facebook.png" alt='imagem'/>
            </a>
            <div class='icontexto'>Facebook</div>
        </div>

        <div class='iconmaistexto'>
            <a href="http://www.orkut.com" target="_blank" title="Orkut">
                <img  class ='icon' src="imagens/estrutura/orkut.png" alt='imagem'/>
            </a>
            <div class='icontexto'>Orkut</div>
        </div>
    </div>
{/if}
</div>
