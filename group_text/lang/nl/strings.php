<?php

if(! function_exists("string_plural_select_nl")) {
function string_plural_select_nl($n){
	$n = intval($n);
	return intval($n != 1);
}}
$a->strings['Group Text settings updated.'] = 'Groupsberichten instellingen opgeslagen';
$a->strings['Group Text'] = 'Groepsbericht';
