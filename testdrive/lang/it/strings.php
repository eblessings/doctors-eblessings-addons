<?php

if(! function_exists("string_plural_select_it")) {
function string_plural_select_it($n){
	$n = intval($n);
	if ($n == 1) { return 0; } else if ($n != 0 && $n % 1000000 == 0) { return 1; } else  { return 2; }
}}
$a->strings['Administrator'] = 'Amministratore';
$a->strings['Your account on %s will expire in a few days.'] = 'Il tuo account su %s scadrà tra pochi giorni.';
$a->strings['Your Friendica test account is about to expire.'] = 'Il tuo account di prova su Friendica sta per scadere.';
$a->strings['Hi %1$s,

Your test account on %2$s will expire in less than five days. We hope you enjoyed this test drive and use this opportunity to find a permanent Friendica website for your integrated social communications. A list of public sites is available at %s/siteinfo - and for more information on setting up your own Friendica server please see the Friendica project website at https://friendi.ca.'] = 'Ciao %1$s,

Il tuo account di prova su %2$s scadrà in meno di cinque giorni. Ci auguriamo che tu abbia gradito questo giro di prova e che tu possa trovare un sito su cui creare un account Friendica permanente. Una lista di siti pubblici è disponibile presso %s/siteinfo . Per maggiori informazioni su come installare un tuo server Friendica personale, vai sul sito del progetto Friendica presso https://friendi.ca.';
