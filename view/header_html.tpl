<!DOCTYPE html>
{if isset({$cache}) and {$cache} eq 1}
	<html manifest="/cache.manifest">
{else}
	<html>
{/if}
<head>
<meta charset='utf-8' />
<title>MoneyOne - Remessas e Câmbios</title>
{if isset($language)}
<link rel='stylesheet' type='text/css' href='etc/css/css.php' />
<script charset="utf-8" type="text/javascript" src='etc/js/menu.php'></script>
{else}
<link rel='stylesheet' type='text/css' href='etc/css/bandeiras.css' />
<link href='http://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet' type='text/css'>
{/if}
</head>
