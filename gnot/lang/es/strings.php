<?php

if(! function_exists("string_plural_select_es")) {
function string_plural_select_es($n){
	$n = intval($n);
	return intval($n != 1);
}}
$a->strings['Gnot Settings'] = 'Ajustes de Gnot';
$a->strings['Save Settings'] = 'Guardar Ajustes';
$a->strings['Enable this addon?'] = '¿Habilitar este plugin/addon?';
$a->strings['Allows threading of email comment notifications on Gmail and anonymising the subject line.'] = 'Permite limpiar las notificaciones de comentario de email en Gmail y anonimizar la línea del tema.';
$a->strings['[Friendica:Notify] Comment to conversation #%d'] = '[Friendica:Notify] Comentar en conversación #%d';
