<?php

if(! function_exists("string_plural_select_pt_br")) {
function string_plural_select_pt_br($n){
	$n = intval($n);
	return intval($n > 1);
}}
$a->strings['Infinite Improbability Drive'] = 'Gerador de improbabilidade infinita';
