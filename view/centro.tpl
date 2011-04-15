<div class="content_conteudo_division_center">
	<div class='center'>
		{if isset($esqueciSenha) and $esqueciSenha==1}
		<form action='esqueciSenha.php' method='post'>
			<p style="text-align: center; margin-top: 20px;">Introduza o email com o qual se cadastrou:</p>
			<p style="text-align: center;">
				<input name='esqueciSenha' type='text' value='email@moneyone.pt' /> <input type='submit' value='enviar' />
			</p>
		</form>
		{else}
		<div class="content_center1">
			<script>new pausescroller(destaque, "pscroller2", "someclass", 5000);</script>
		</div>
		<div class='icons'>
			<div class='title_icons'>Visite o nosso blog e saiba de todas as nossas promoções e eventos</div>
			<div class='clear'></div>
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
		<div class='receber_noticias'>
			<form name='noticias' action='index.php' method='post'>
				<div class='header_content_division_news_in'>
					Receber notícias


				</div>
				<div class='header_content_division_news_in_in'>
					<p>
						<label> <input type='text' name='email' id='news' class='header_textbox' placeholder='email@email.com' /> </label>
					</p>
				</div>
				<div class='header_content_division_news_in_buttom'>
					<input type='submit' class='seta' value='' />
				</div>
			</form>
		</div>

	</div>
	{/if}
	<div class='clear'></div>
</div>
</div>
</div>
