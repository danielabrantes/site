{extends file='pagina.tpl'} {block name='pagina'}
{include file="lojasheader.tpl"}
<table width="970px">
	<tr>
		<td width="220px" height="70px">
		<span class="content_title">Espanha</span>
		</td>
		<td colspan="2"><span class="content_title">Tele-Remessas</span> Tel: +34 91 781 9122</td>
	</tr>
	<tr>
		{include file="loja.tpl" nome="Madrid"
		foto="imagens/lojas/ag_madrid.jpg"
		mapa="http://maps.google.pt/maps?f=q&source=embed&hl=pt-PT&geocode=&q=Calle+de+Ayala,+Madrid&sll=38.522952,-8.895339&sspn=0.012272,0.019312&ie=UTF8&hq=&hnear=Calle+de+Ayala,+Madrid,+Comunidad+de+Madrid,+Spain&ll=40.427627,-3.680302&spn=0.004794,0.011362&t=h&z=17"
		morada="Calle de Ayala 10
		<br />3 der Madrid" contacto="Tel: +34 917 819 122
		<br />Fax: +34 915 781 250 " horario=""} {include file="loja.tpl"
		nome="Vigo" foto="imagens/lojas/ag_vigo.jpg"
		mapa="http://maps.google.pt/maps?f=q&source=s_q&hl=pt-PT&geocode=&q=Calle+de+Urz%C3%A1iz,+89,+Vigo,+Pontevedra,+Espa%C3%B1a&sll=42.232704,-8.711664&sspn=0.009326,0.022724&g=Calle+de+Urz%C3%A1iz,+89,+Vigo,+Pontevedra,+Espa%C3%B1a&ie=UTF8&hq=&hnear=Calle+de+Urz%C3%A1iz,+89,+36204+Vigo,+Pontevedra,+Galicia,+Spain&ll=42.232871,-8.711665&spn=0.002332,0.005681&t=h&z=18"
		morada="C/ Urzaiz, 89
		<br />Vigo - Pontevedra" contacto="Tel: +34 986 224 991
		<br />" horario=''}
	</tr>
</table>
<div class='footnote'>*Junho a Setembro</div>
{/block}
