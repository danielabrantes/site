{extends file='pagina.tpl'} {block name='pagina'}
<div class='texto'>
	<div class="content_title">Taxas de Câmbio</div>
	<div class="content_title_IN">Câmbios</div>
	<div class="content_texto">
		{nocache}{include file='conversor.tpl'}{/nocache}
		<br />
		<br />
		<div class="content_title_IN">Preçário</div>
		<div>Consulte o<a href="ficheiros/precario.pdf" target="_blank" class="content_link"> preçário</a></div>
		
		<br />
		<br />
		<div class="content_title_IN">Multibanco</div>
		<div>Todas as nossas agências dispõem de serviço de pagamento por
			Multibanco (TPA), para qualquer valor e sem custo adicional.</div>
			
		<br />
		<br />
		<div class="content_title_IN">Tipos de câmbio</div>
		<div>Existem dois tipos de transferência. A urgente, que é paga no
			mesmo dia quando efectuada até as 15h, e a normal, paga em até 48h. A
			taxa de câmbio praticada em cada um dos tipos de remessa varia. Para
			saber quais as condições e taxas em vigor a cada momento, ligue para
			a nossa central de Apoio ao Cliente (800 207 214 / 211 452 500)</div>
		<br />
		<br />
		<div class="content_title_IN">Legislação</div>
		<div>Antes de iniciar qualquer operação financeira pela MoneyOne, leia
			atentamente os seguintes documentos legais, que regulamentam os
			nossos serviços:</div>
		<ul class="content_lista">
			<li><a href="ficheiros/aviso11-2005.pdf" target="_blank"
				class="content_link">Aviso n.º11/2005 do Banco de Portugal</a></li>
			<li><a href="ficheiros/Instrucao262005.pdf" target="_blank"
				class="content_link">Instrução n.º26/2005 do Banco de Portugal</a>
			</li>
			<li><a href="ficheiros/republica.pdf" target="_blank"
				class="content_link">Legislação do Diário da República</a></li>
			<li><a href="ficheiros/POLITICAS_NORMAS.pdf" target="_blank"
				class="content_link">Políticas as normas de prevenção ao
					"Branqueamento de Capitais"</a></li>
			<li><a href="ficheiros/CODIGO_CONDUTA.pdf" target="_blank"
				class="content_link">Código de Ética e de Conduta</a></li>
		</ul>
	</div>
</div>

{/block}