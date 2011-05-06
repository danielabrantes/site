{include file='header_html.tpl'}
<body onload='menuDropDown();' {if isset({$index})and $index==1} class='bold'{/if}>
<div id="content">
	{include file='header.tpl'}
        {block name='pagina'}{/block}

		{include file='footer.tpl'}

</div>
{include file='footer_html.tpl'}
