<?php

if(! function_exists("string_plural_select_nl")) {
function string_plural_select_nl($n){
	$n = intval($n);
	return intval($n != 1);
}}
$a->strings['Post to LiveJournal'] = 'Plaatsen op LiveJournal';
$a->strings['LiveJournal Post Settings'] = 'LiveJournal Post instellingen';
$a->strings['Enable LiveJournal Post Addon'] = 'LiveJournal Post inschakelen';
$a->strings['Post to LiveJournal by default'] = 'Plaatsen op Livejournal als standaard instellen ';
