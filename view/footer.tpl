<div class="footer">
{if {$language=='pt'}}
		<a href='faq.php' title='FAQ`s' class='footer_text'>FAQ`s</a>
		<a href="publicacao.php" title='Relatórios Anuais' class='footer_text'>Relatórios Anuais</a>
		<a href='ficheiros/precario.pdf' title='Preçário' class='footer_text'>Preçário</a>
		<a href='sistbancario.php' title='Sistema Báncario' class='footer_text'>Sistema Bancário</a>
		<a href='condicoes.php' title='Termos e Condições' class='footer_text'>Termos e Condições</a>
		<a href='obrigacao.php' title='Obrigações' class='footer_text'>Obrigações</a>
		<a href='privacidade.php' title='Políticas de Privacidade' class='footer_text'>Políticas de Privacidade</a>
{/if}
{/nocache}
	<p>2004 - {$smarty.now|date_format:"%Y"} © MoneyOne - Todos os direitos reservados</p>
	{include file='validadores.tpl'}
</div>