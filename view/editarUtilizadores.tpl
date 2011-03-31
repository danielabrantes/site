{include file='gestaoDeUtilizadores.tpl'}

{foreach key=key item=item from=$result}
<form style='-moz-column-count: 2;-moz-column-gap: 1em;-moz-column-rule: 1px solid black;-webkit-column-count: 2;-webkit-column-gap: 1em;-webkit-column-rule: 1px solid black;' action='editarUtilizadores.php' method='post'>
	Nome<input type="text" name="nome" id="nome" maxlength='20' size='20'  value={$result.$key->nome} readonly="readonly"/>
	Pass<input type="password" name="pass" id='pass' maxlength='20' size='20' value='12345678901234567890' />
	<input type="submit" value="Alterar" />
</form>
{/foreach}
{include file='space.tpl'}