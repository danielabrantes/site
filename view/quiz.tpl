{extends file='pagina.tpl'}{block name='pagina'}

<form name='quiz' id='quiz' action='quiz.php' method='post'>
	<img id='ivete' src='imagens/quiz/ivete.png'>
	<div class='title'>A MoneyOne te leva pra ver a Ivete</div>
	<div class='subtitle'>Passatempo cultural</div>
	<div class='texto'>
	<p>Responda correctamente às quatro perguntas abaixo e forme uma frase utilizando "MoneyOne" e "Ivete Sangalo"</p>
	<p>Habilite-se a ingressos para o show da cantora, que vai acontecer em Lisboa no dia 18 de Maio e no Porto, dia 20.</p>
	<div>Boa sorte!</div>
	<div>&nbsp;</div>
	<div class='footnote'>*Leia atentamente o regulamento abaixo</div>
	</div>
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
			Cidade onde prefere assistir o show:&nbsp;
				<select name='cidade' >
					<option value='lisboa'>Lisboa</option>
					<option value='porto'>Porto</option>
				</select>
		</div>
		<div class='clear'>&nbsp;</div>
		<div>
			Contato:&nbsp;<input type="text" name='telemovel' value='900000000'/>
		</div>
		<div class='clear'>&nbsp;</div>
		<div>
			Email:&nbsp;&nbsp;&nbsp;
			<input type="text" name='email' size ='40' value='nome@email.com'/>
		</div>
		<div class='clear'>&nbsp;</div>
		<div>
			Frase:&nbsp;&nbsp;&nbsp;

			<textarea rows='4' cols='60' name='frase'>Digite aqui sua frase. Por que você merece ir no show. Não esqueça que precisa mencionar "MoneyOne" e "Ivete Sangalo"</textarea>
		</div>
		<div class='right'><input type="submit" value='Enviar Resposta'/></div>
	</div>

	<div class='clear'>&nbsp;</div>
	<div class='mensagem'>
	{nocache}
	{if isset($resposta)}
	{$resposta}
	{/if}
	<div>
	{if isset($numero)}
	{$texto}
	{/if}
	{/nocache}
	</div>
	</div>
	<div class='clear'>&nbsp;</div>
	<h5>
	<div class='title'>Regulamento</div>
	<div class='subtitle'>Como funciona o passatempo:</div>
	<div class='texto'>
	<ol>
	<li>Você responde as quatro perguntas abaixo e digita seu endereço de e-mail e contacto telefônico. Atenção, as perguntas precisam estar correctas para seu cadastro na promoção valer, ok?</li>
	<li>Escolha também se você prefere assistir ao show em Lisboa ou no Porto.</li>
	<li>Depois você cria a frase, com no máximo 200 caracteres, dizendo por que você merece assistir ao show. Importante, você precisa utilizar na frase as palavras "MoneyOne" e "Ivete Sangalo".</li>
	<li>No dia 17 de Maio, terça-feira, ao meio-dia, a promoção se encerra.</li>
	<li>No mesmo dia, uma comissão selecionadora formada por quatro integrantes do Marketing e Direção da MoneyOne, escolherão as duas melhores frases. O critério utilizado serão o de criatividade.</li>
	<li>O resultado será divulgado via telefone, email, site e redes sociais da MoneyOne.</li>
	<li>Só será aceita uma frase por email cadastrado</li>
	</ol>
</div>
<div class='clear'>&nbsp;</div>
	<div class ='texto'>
	<div class='footnote'>* Ao participar da promoção, você estará automaticamente autorizando a utilizando de seu email ou telefone para contactos comerciais da MoneyOne ou de terceiros. </div>
	</div>
	</h5>
</form>

{/block}
