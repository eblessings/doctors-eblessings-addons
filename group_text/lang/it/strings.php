<?php

if(! function_exists("string_plural_select_it")) {
function string_plural_select_it($n){
	$n = intval($n);
	return intval($n != 1);
}}
$a->strings['Group Text'] = 'Editor Gruppi Testuale';
$a->strings['Use a text only (non-image) group selector in the "group edit" menu'] = 'Usa un selettore testuale (senza immagini) nella pagina "modifica gruppo"';
$a->strings['Save Settings'] = 'Salva Impostazioni';
