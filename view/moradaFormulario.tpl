<div class='texto'>Rua:<input type='text' name='rua'
	value='{$user->rua}' /> <br />
Porta:<input type='text' name='porta' value='{$user->porta}' /> &nbsp;
Piso/Andar:<input type='text' name='piso' value='{$user->piso}' /> <br />
Província:<input type='text' name='provincia' value='{$user->provincia}' />
Concelho:<input type='text' name='concelho' value='{$user->concelho}' />
<br />
Código Postal:<input type='text' name='codigoPostal'
	value='{$user->codigoPostal}' /> &nbsp; Localidade:<input type='text'
	name='localidade' value='{$user->localidade}' /> <br />
Nacionalidade: <input type='text' name='nacionalidade'
	value='{$user->nacionalidade}' /> <input type='text'
	name='naturalidade1' value='{$user->naturalidade1}' /> <input
	type='text' name='naturalidade2' value='{$user->naturalidade2}' />
País: <input type='text' name='pais' value='{$user->pais}' /> {if
empty($mensagem) }
<button type='submit' name='formulario' value='morada' class='right'>Alterar
Morada</button>
{else}
<div class='mensagem'>{$mensagem}</div>
{/if}</div>
