{*include file='bandeiraslinks.tpl'*}
<div class='bandeiras'>
    <ul>
    	<li>Escolha outro país:</li>
        <li><a href='/?language=pt'><img src='imagens/bandeiras/ptsmall.png'/></a></li>
        <li><a href='/?language=es'><img src='imagens/bandeiras/essmall.png'/></a></li>
        <li><a href='/?language=en'><img src='imagens/bandeiras/ensmall.png'/></a></li>
    </ul>
</div>
{nocache}
<div class='cartaz'>
<p>
{*
Site Espanha: cartaz 7, 9, 10, 11 e 13
Site Inglaterra: cartaz 7, 8, 10 e 13
*}

{if $language=='es'}
 <script type="text/javascript">
	var pausecontent=new Array()
	pausecontent[0]='<a href="promocao13.php" alt="blank" title="Saber mais" style="width: 100%;max-width: 100%;min-width: 100%;"><img style="width: 100%;max-width: 100%;min-width: 100%;" src="imagens/promocao/regulamentoes.png" alt="imagem"/></a>'
	pausecontent[1]='<a href="promocao11.php" alt="blank" title="Saber mais" style="width: 100%;max-width: 100%;min-width: 100%;"><img style="width: 100%;max-width: 100%;min-width: 100%;" src="imagens/promocao/10euroses.png" alt="imagem"/></a>'
	pausecontent[2]='<a href="promocao10.php" alt="blank" title="Saber mais" style="width: 100%;max-width: 100%;min-width: 100%;"><img style="width: 100%;max-width: 100%;min-width: 100%;" src="imagens/promocao/fiqueligado.png" alt="imagem"/></a>'
	pausecontent[3]='<a href="promocao9.php" alt="blank" title="Saber mais" style="width: 100%;max-width: 100%;min-width: 100%;"><img style="width: 100%;max-width: 100%;min-width: 100%;" src="imagens/promocao/cartaz.png" alt="imagem"/></a>'
	pausecontent[4]='<a href="promocao7.php" alt="blank" title="Saber mais" style="width: 100%;max-width: 100%;min-width: 100%;"><img style="width: 100%;max-width: 100%;min-width: 100%;" src="imagens/promocao/promocao7.png" alt="imagem"/></a>';
	new pausescroller(pausecontent, "pscroller1", "someclass", 2500);
	</script>
{elseif $language=='en'}
 <script type="text/javascript">
		var pausecontent=new Array()
		pausecontent[0]='<a href="promocao13.php" alt="blank" title="Saber mais" style="width: 100%;max-width: 100%;min-width: 100%;"><img style="width: 100%;max-width: 100%;min-width: 100%;" src="imagens/promocao/regulamentoen.png" alt="imagem"/></a>'
		pausecontent[1]='<a href="promocao10.php" alt="blank" title="Saber mais" style="width: 100%;max-width: 100%;min-width: 100%;"><img style="width: 100%;max-width: 100%;min-width: 100%;" src="imagens/promocao/fiqueligado.png" alt="imagem"/></a>'
		pausecontent[2]='<a href="promocao8.php" alt="blank" title="Saber mais" style="width: 100%;max-width: 100%;min-width: 100%;"><img style="width: 100%;max-width: 100%;min-width: 100%;" src="imagens/promocao/net_cambio.png" alt="imagem"/></a>'
		pausecontent[3]='<a href="promocao7.php" alt="blank" title="Saber mais" style="width: 100%;max-width: 100%;min-width: 100%;"><img style="width: 100%;max-width: 100%;min-width: 100%;" src="imagens/promocao/promocao7.png" alt="imagem"/></a>';
		new pausescroller(pausecontent, "pscroller1", "someclass", 2500);
	</script>
{elseif $language=='pt'}
 <script type="text/javascript">
		var pausecontent=new Array()
		pausecontent[0]='<a href="promocao14.php" alt="blank" title="Saber mais" style="width: 100%;max-width: 100%;min-width: 100%;"><img style="width: 100%;max-width: 100%;min-width: 100%;" src="imagens/promocao/promocao14.png" alt="imagem"/></a>'
		pausecontent[1]='<a href="promocao13.php" alt="blank" title="Saber mais" style="width: 100%;max-width: 100%;min-width: 100%;"><img style="width: 100%;max-width: 100%;min-width: 100%;" src="imagens/promocao/regulamentopt.png" alt="imagem"/></a>'
		pausecontent[2]='<a href="promocao11.php" alt="blank" title="Saber mais" style="width: 100%;max-width: 100%;min-width: 100%;"><img style="width: 100%;max-width: 100%;min-width: 100%;" src="imagens/promocao/10eurospt.png" alt="imagem"/></a>'
		pausecontent[3]='<a href="promocao12.php" alt="blank" title="Saber mais" style="width: 100%;max-width: 100%;min-width: 100%;"><img style="width: 100%;max-width: 100%;min-width: 100%;" src="imagens/promocao/vencedores_fev_2011.png" alt="imagem"/></a>'
		pausecontent[4]='<a href="promocao10.php" alt="blank" title="Saber mais" style="width: 100%;max-width: 100%;min-width: 100%;"><img style="width: 100%;max-width: 100%;min-width: 100%;" src="imagens/promocao/fiqueligado.png" alt="imagem"/></a>'
		pausecontent[5]='<a href="promocao9.php" alt="blank" title="Saber mais" style="width: 100%;max-width: 100%;min-width: 100%;"><img style="width: 100%;max-width: 100%;min-width: 100%;" src="imagens/promocao/cartaz.png" alt="imagem"/></a>'
		pausecontent[6]='<a href="promocao2.php" alt="blank" title="Saber mais" style="width: 100%;max-width: 100%;min-width: 100%;"><img style="width: 100%;max-width: 100%;min-width: 100%;" src="imagens/promocao/promocao2.png" alt="imagem"/></a>'
		pausecontent[7]='<a href="promocao1.php" alt="blank" title="Saber mais" style="width: 100%;max-width: 100%;min-width: 100%;"><img style="width: 100%;max-width: 100%;min-width: 100%;" src="imagens/promocao/cartao_telefone.png" alt="imagem"/></a>'
		pausecontent[8]='<a href="promocao8.php" alt="blank" title="Saber mais" style="width: 100%;max-width: 100%;min-width: 100%;"><img style="width: 100%;max-width: 100%;min-width: 100%;" src="imagens/promocao/net_cambio.png" alt="imagem"/></a>'
		pausecontent[9]='<a href="promocao7.php" alt="blank" title="Saber mais" style="width: 100%;max-width: 100%;min-width: 100%;"><img style="width: 100%;max-width: 100%;min-width: 100%;" src="imagens/promocao/promocao7.png" alt="imagem"/></a>';
		new pausescroller(pausecontent, "pscroller1", "someclass", 2500);
	</script>
{/if}
	</p>
</div>
{/nocache}