<?php

if(! function_exists("string_plural_select_cs")) {
function string_plural_select_cs($n){
	$n = intval($n);
	if (($n == 1 && $n % 1 == 0)) { return 0; } else if (($n >= 2 && $n <= 4 && $n % 1 == 0)) { return 1; } else if (($n % 1 != 0 )) { return 2; } else  { return 3; }
}}
$a->strings['"pageheader" Settings'] = 'Nastavení záhlaví stránky';
$a->strings['Message'] = 'Zpráva';
$a->strings['Message to display on every page on this server (or put a pageheader.html file in your docroot)'] = 'Zpráva, která má být zobrazena na každé stránce tohoto serveru (nebo vložte do kořenové složky Vašeho serveru soubor pageheader.html)';
$a->strings['Save Settings'] = 'Uložit nastavení';
