<div class="content_conteudo_division_center">
	<div class='texto'>
		<div class='center'>
			{if isset($esqueciSenha) and $esqueciSenha==1}
			<form action='esqueciSenha.php' method='post'>
				<p style="text-align: center; margin-top: 20px;">Introduza o email
					com o qual se cadastrou:</p>
				<p style="text-align: center;">
					<br /> <input name='esqueciSenha' type='text'
						value='email@moneyone.pt' /> <input type='submit' value='enviar' />
				</p>
			</form>
			{else}

			<div class="content_center1">

				<div class='texto'>
					<script>new pausescroller(destaque, "pscroller2", "someclass", 5000);</script>
				</div>






				
				<div class='icons'>
				<div class='titulo'>VISITE O NOSSO BLOG E SAIBA DE TODAS AS NOSSAS
					PROMOÇÕES E EVENTOS</div>
				{*VISITE O NOSSO BLOG E SAIBA DE TODAS AS NOSSAS PROMOÇÕES E
				EVENTOS*}
					<div id='texto' class='iconmaistexto'>
						<a href="http://moneyone-moneyone.blogspot.com/"
							title="Pedir Cartão de Pontos"> <img class='icon'
							src="imagens/estrutura/blogger.png" alt='imagem' /> </a>
						<div class='icontexto'>Blog</div>
					</div>
					<div id='texto' class='iconmaistexto'>
						<a
							href="http://www.facebook.com/home.php?#!/profile.php?id=100001553641511"
							target="_blank" title="Facebook"> <img class='icon'
							src="imagens/estrutura/facebook.png" alt='imagem' /> </a>
						<div class='icontexto'>Facebook</div>
					</div>

					<div id='texto' class='iconmaistexto'>
						<a href="http://www.orkut.com" target="_blank" title="Orkut"> <img
							class='icon' src="imagens/estrutura/orkut.png" alt='imagem' /> </a>
						<div class='icontexto'>Orkut</div>
					</div>
					<div class='clear'></div>
				</div>


				<div class='receber_noticias'>
					<form name='noticias' action='index.php' method='post'>
						<div class='header_content_division_news_in'>
							<span class='wrapper_text_titles'>Receber notícias</span>
						</div>
						<div class='header_content_division_news_in_in'>
							<span> <label> <input type='text' name='email' id='news'
									class='header_textbox' placeholder='email@email.com' /> </label>
							</span>
						</div>
						<div class='header_content_division_news_in_buttom'>
							<input type='submit' class='seta' value='' />
						</div>
					</form>
				</div>

				{*
				<form action="index.php" method='post'>
					<div class='header_content_division_news_in'>
						<span class='wrapper_text_titles'>Verificar o estado da sua
							transferência</span>
					</div>
					<div>
						<div style="text-align: left;">
							<input name="id" type="text" size="24"
								placeholder='Número de controlo da transferência' />
							<div class='header_content_division_news_in_buttom'>
								<input name="verificar" type='submit' class='seta' value='' />
							</div>
						</div>
					</div>
				</form>
				*}
			</div>
			{/if}
			<div class='clear'>&nbsp</div>
		</div>
	</div>
</div>
