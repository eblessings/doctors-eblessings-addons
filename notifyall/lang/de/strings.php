<?php

if(! function_exists("string_plural_select_de")) {
function string_plural_select_de($n){
	$n = intval($n);
	return intval($n != 1);
}}
$a->strings['%s Administrator'] = 'der Administrator von %s';
$a->strings['%1$s, %2$s Administrator'] = '%1$s, %2$s Administrator';
$a->strings['Send email to all members'] = 'Sende eine E-Mail an alle Nutzer der Seite';
$a->strings['No recipients found.'] = 'Keine Empfänger gefunden';
$a->strings['Emails sent'] = 'E-Mails gesendet.';
$a->strings['Send email to all members of this Friendica instance.'] = 'Sende eine E-Mail an alle Nutzer dieser Friendica-Instanz';
$a->strings['Message subject'] = 'Betreff der Nachricht';
$a->strings['Test mode (only send to administrator)'] = 'Test-Modus (E-Mail nur an den Administrator senden)';
$a->strings['Submit'] = 'Senden';
