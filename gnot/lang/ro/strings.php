<?php

if(! function_exists("string_plural_select_ro")) {
function string_plural_select_ro($n){
	$n = intval($n);
	if ($n==1) { return 0; } else if ((($n%100>19)||(($n%100==0)&&($n!=0)))) { return 2; } else  { return 1; }
}}
$a->strings['Gnot settings updated.'] = 'Configurările Gnot au fost actualizate.';
$a->strings['Gnot Settings'] = 'Configurări Gnot';
$a->strings['Allows threading of email comment notifications on Gmail and anonymising the subject line.'] = 'Permite înlănțuirea notificărilor prin email a comentariilor, în Gmail și anonimizarea  subiectului.';
$a->strings['Enable this addon?'] = 'Activați acest modul/supliment?';
$a->strings['Submit'] = 'Trimite';
$a->strings['[Friendica:Notify] Comment to conversation #%d'] = '[Friendica:Notificare] Comentariu la conversația # %d';
