<!DOCTYPE html>
{if isset({$cache}) and {$cache} eq 1}
	<html manifest="/cache.manifest">
{else}
	<html>
{/if}
<head>
<meta charset='utf-8' />
<title>MoneyOne - Remessas e Câmbios</title>
<link rel='stylesheet' type='text/css' href='etc/css/css.php' />
<script charset="utf-8" type="text/javascript" src='etc/js/menu.php'></script>
</head>
<body onload='menuDropDown();'>