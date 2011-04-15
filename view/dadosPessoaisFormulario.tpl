
<div>Nome:{$user->nome}</div>
<div>Data Nascimento:{$user->dataDeNascimento}</div>
<div>Sexo:{$user->sexo[0]}</div>
<div>Contatos:</div>
<div>
	Telefone:<input type='text' name='telefone' value='{$user->telefone}' />
</div>
<div>
	Telemóvel:<input type='text' name='telemovel' value='{$user->telemovel}' />
</div>
<div>
	Email:<input type='text' name='email' value='{$user->email}' />
</div>
Pretende receber newsletter? {if $user->CliMailing eq 1} {assign var='checked' value="checked='checked'"} {else} {assign var='checked' value=''} {/if}
<input type='checkbox' value='{$user->CliMailing }' name='newsletter' {$checked}/>
{if empty($mensagem) }
<button type='submit' name='formulario' value='dadosPessoais' class='right'>Alterar Dados Pessoais</button>
{else}
<div class='mensagem'>{$mensagem}</div>
{/if}
</div>
