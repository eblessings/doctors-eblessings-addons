<?php

if(! function_exists("string_plural_select_it")) {
function string_plural_select_it($n){
	$n = intval($n);
	return intval($n != 1);
}}
$a->strings['generic profile image'] = 'immagine generica del profilo';
$a->strings['random geometric pattern'] = 'schema geometrico casuale';
$a->strings['monster face'] = 'faccia di mostro';
$a->strings['computer generated face'] = 'faccia generata dal computer';
$a->strings['retro arcade style face'] = 'faccia stile retro arcade';
$a->strings['Information'] = 'Informazione';
$a->strings['Libravatar addon is installed, too. Please disable Libravatar addon or this Gravatar addon.<br>The Libravatar addon will fall back to Gravatar if nothing was found at Libravatar.'] = 'Il componente aggiuntivo Libravatar è installato. Disabilita il componente aggiuntivo Libravatar o questo componente aggiuntivo Gravatar<br>Il componente aggiuntivo Libravatar si appoggerà a Gravatar se non trova nulla su Libravatar.';
$a->strings['Save Settings'] = 'Salva Impostazioni';
$a->strings['Default avatar image'] = 'Immagine avatar predefinita';
$a->strings['Select default avatar image if none was found at Gravatar. See README'] = 'Seleziona l\'immagine di default se non viene  trovato niente. Vedi README';
$a->strings['Rating of images'] = 'Valutazione delle immagini';
$a->strings['Select the appropriate avatar rating for your site. See README'] = 'Seleziona la valutazione dell\'avatar appropriata per il tuo sito. Vedi README';
