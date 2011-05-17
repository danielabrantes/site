<!DOCTYPE html>
{if isset({$cache}) and {$cache} eq 1}
	<html  lang="pt" manifest="/cache.manifest">
{else}
	<html lang="pt">
{/if}
<head>
<meta charset='utf-8' />
<title>MoneyOne - Remessas e Câmbios</title>
{if isset($language)}
<link rel='stylesheet' type='text/css' href='etc/css/css.php' />
{*
<link href='http://fonts.googleapis.com/css?family=Ubuntu:regular,bold' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:regular,bold' rel='stylesheet' type='text/css'>
*}
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold' rel='stylesheet' type='text/css'>
<script charset="utf-8" type="text/javascript" src='etc/js/menu.php'></script>
{else}
<link rel='stylesheet' type='text/css' href='etc/css/bandeiras.css' />
{/if}
</head>
