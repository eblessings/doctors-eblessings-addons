<?php

if(! function_exists("string_plural_select_de")) {
function string_plural_select_de($n){
	$n = intval($n);
	return intval($n != 1);
}}
$a->strings['generic profile image'] = 'generisches Profilbild';
$a->strings['random geometric pattern'] = 'zufälliges Profilbild';
$a->strings['monster face'] = 'Monsterfratze';
$a->strings['computer generated face'] = 'computergeneriertes Gesicht';
$a->strings['retro arcade style face'] = 'Retro-Arcade-Design-Gesicht';
$a->strings['Information'] = 'Information';
$a->strings['Libravatar addon is installed, too. Please disable Libravatar addon or this Gravatar addon.<br>The Libravatar addon will fall back to Gravatar if nothing was found at Libravatar.'] = 'Das Libravatar-Addon ist ebenfalls installiert. Bitte deaktiviere das Libravatar-Addon oder dieses Gravatar-Addon.<br>';
$a->strings['Save Settings'] = 'Einstellungen speichern';
$a->strings['Default avatar image'] = 'Standard-Profilbild ';
$a->strings['Select default avatar image if none was found at Gravatar. See README'] = 'Wähle das Standardprofilbild, wenn kein Bild auf Gravatar gefunden wurde. Siehe README';
$a->strings['Rating of images'] = 'Bildbewertung';
$a->strings['Select the appropriate avatar rating for your site. See README'] = 'Wähle eine angemessene Bildbewertung für deinen Server. Siehe README';
