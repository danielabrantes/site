{if !isset($login)}
<div class="wrapper">
    <!-- PAÍS -->
    <div class="wrapper_left">
        <div class="wrapper_division">
            <span class="wrapper_text_titles">País</span>
        </div>
        <div class="wrapper_division">
            <a href="#" class="imagem" title="Portugal" ><img src="imagens/estrutura/bandeira_port.jpg" alt='imagem'/></a>
            &nbsp;&nbsp;&nbsp;
            <a href="#" class="imagem" title="England" ><img src="imagens/estrutura/bandeira_UK.jpg" alt='imagem'/></a>
            &nbsp;&nbsp;&nbsp;
            <a href="#" class="imagem" title="España" ><img src="imagens/estrutura/bandeira_espanha.jpg" alt='imagem'/></a>
        </div>
    </div>
    <!-- IDIOMA -->
    <div class="wrapper_left">
        <div class="wrapper_division">
            <span class="wrapper_text_titles">Idioma</span>
        </div>
        <div class="wrapper_division">
            <a href="index.php" class="imagem" title="Português" ><img src="imagens/estrutura/bandeira_port.jpg" alt='imagem'/></a>
            &nbsp;&nbsp;&nbsp;
            <a href="#" class="imagem" title="English" ><img src="imagens/estrutura/bandeira_UK.jpg" alt='imagem'/></a>
            &nbsp;&nbsp;&nbsp;
            <a href="#" class="imagem" title="Español" ><img src="imagens/estrutura/bandeira_espanha.jpg" alt='imagem'/></a>
        </div>
    </div>
    <!-- CENTRO -->
    <div class="wrapper_center"></div>
    <!-- LOGIN -->

   <!-- <form action ='index.php' method='post'>-->
        <div class="wrapper_right">
            <div class="wrapper_division">
                <span class="wrapper_text_titles">Login</span>
            </div>
            <div class="wrapper_division">
                <label>
                    <input type="text" name="nome" id="email" class="wrapper_textbox" value='email'>
                </label>
            </div>
        </div>
        <div class="wrapper_right">
            <div class="wrapper_division"></div>
            <div class="wrapper_division">
                <label>
                    <input type="password" name="pass" id="password" class="wrapper_textbox" value=''>
                </label>
            </div>
        </div>
        <!-- BOTÃO -->
        <div class="wrapper_bottom">
            <div class="wrapper_division"></div>
            <div class="wrapper_division">
                <input type='image' src='imagens/estrutura/seta.png' alt='imagem'/>
            </div>
        </div>
   <!-- </form>-->
    <!-- FOOTER -->
    <a href="esqueciSenha.php" title="Esqueci senha" class="wrapper_link">Esqueci senha</a>
</div>
{/if}

