<div height="200px" width="220px">
	<div class='bold'>{$nome}</div>
	<img src="{$foto|default:" default"}" alt='imagem' height="150px" width="200px" />
	<a href="{$mapa|default:" default"}" target="_blank" >Ver Mapa</a>
</div>
<div height="200px" width="320px">
	<div class='textoLoja'>
		{$morada} {$contacto}
		<div class='bold'>Horário de Funcionamento</div>
		{$horario}
	</div>
</div>
