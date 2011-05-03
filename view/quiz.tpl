{extends file='pagina.tpl'}{block name='pagina'}
<form name='quiz' id='quiz' action='quiz.php' method='post'>
	<img id='ivete' src='imagens/quiz/ivete.png'>
	<div class='title'>Questionário Moneyone</div>
	<div class='subtitle'>Show da Ivete Sangalo</div>
	<div class='subtitle'>1 - Em quais dos países abaixo a Money não tem loja:</div>
	<div class='texto'>
		<div class='texto'>
			<input type="radio" name='1' value='a'/>Portugal<br />
			<input type="radio" name='1' value='b'/>Espanha<br />
			<input type="radio" name='1' value='c'/>Brasil<br />
		</div>
	</div>
	<div class='subtitle'>2 - Na promoção “Na MoneyOne todo mundo ganha” qual é o valor que a MoneyOne dá aos clientes que indicam amigos que ainda não sejam clientes?</div>
	<div class='texto'>
		<div class='texto'>
			<input type="radio" name='2' value='a'/>€ 1<br />
			<input type="radio" name='2' value='b'/>€ 5<br />
			<input type="radio" name='2' value='c'/>€ 10<br />
		</div>
	</div>
	<div class='subtitle'>3 - Nossa actual campanha dos Super Prémios oferece os seguintes prémios mensalmente:</div>
	<div class='texto'>
		<div class='texto'>
			<input type="radio" name='3' value='a'/>Moto, TV LCD, portátil e máquina fotográfica<br />
			<input type="radio" name='3' value='b'/>Cheque-viagem, TV LCD, bicicleta e portátil<br />
			<input type="radio" name='3' value='c'/>Cheque-viagem, TV LCD, portátil e máquina fotográfica<br />
		</div>
	</div>
	<div class='subtitle'>4 - Quantas lojas a MoneyOne tem em Portugal?</div>
	<div class='texto'>
		<div class='texto'>
			<input type="radio" name='4' value='a'/>8<br />
			<input type="radio" name='4' value='b'/>20<br />
			<input type="radio" name='4' value='c'/>35<br />
		</div>
	</div>
	<div class='clear'>&nbsp;</div>
	<div class='texto'>
		<div>
			Introduza o seu email para concorrer:
			<input type="text" name='email'/>
			<input type="submit" />
		</div>
	</div>
	<div class='clear'>&nbsp;</div>
	<div class='mensagem'>
	{if isset($resposta)}
	{$resposta}
	{/if}
	<div>
	{if isset($numero)}
	{$texto}
	{/if}
	</div>
	</div>
	<div class='clear'>&nbsp;</div>
</form>
{/block}
