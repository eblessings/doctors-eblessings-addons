<?php

if(! function_exists("string_plural_select_cs")) {
function string_plural_select_cs($n){
	$n = intval($n);
	if (($n == 1 && $n % 1 == 0)) { return 0; } else if (($n >= 2 && $n <= 4 && $n % 1 == 0)) { return 1; } else if (($n % 1 != 0 )) { return 2; } else  { return 3; }
}}
$a->strings['Gnot settings updated.'] = 'Nastavení Gnot aktualizováno.';
$a->strings['Gnot Settings'] = 'Nastavení Gnot';
$a->strings['Allows threading of email comment notifications on Gmail and anonymising the subject line.'] = 'Umožnit řetězení emailových komentářových oznámení na Gmailu a anonymizací řádky předmětu.';
$a->strings['Enable this addon?'] = 'Povolit tento doplněk?';
$a->strings['Submit'] = 'Odeslat';
$a->strings['[Friendica:Notify] Comment to conversation #%d'] = '[Friendica:Oznámení] Komentář ke konverzaci #%d';
