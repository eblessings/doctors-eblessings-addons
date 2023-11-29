<?php

if(! function_exists("string_plural_select_cs")) {
function string_plural_select_cs($n){
	$n = intval($n);
	if (($n == 1 && $n % 1 == 0)) { return 0; } else if (($n >= 2 && $n <= 4 && $n % 1 == 0)) { return 1; } else if (($n % 1 != 0 )) { return 2; } else  { return 3; }
}}
$a->strings['Three Dimensional Tic-Tac-Toe'] = 'Trojrozměrné piškvorky';
$a->strings['3D Tic-Tac-Toe'] = '3D piškvorky';
$a->strings['New game'] = 'Nová hra';
$a->strings['New game with handicap'] = 'Nová hra s handicapem';
$a->strings['Three dimensional tic-tac-toe is just like the traditional game except that it is played on multiple levels simultaneously. '] = 'Trojrozměrné piškvorky jsou podobné této tradiční hře kromě toho, že se hrají na více úrovních současně.';
$a->strings['In this case there are three levels. You win by getting three in a row on any level, as well as up, down, and diagonally across the different levels.'] = 'V tomto případě existují tři úrovně. Vyhrajete tím, že dostane tři v řadě na jakékoli úrovni, stejně jako nahoru, dolů a šikmo na různých úrovních.';
$a->strings['The handicap game disables the center position on the middle level because the player claiming this square often has an unfair advantage.'] = 'Hra s handicapem zakáže centrální pozici na střední úrovni, protože hráč zaujímající tuto polohu má často nespravedlivou výhodu.';
$a->strings['You go first...'] = 'Vy začněte ...';
$a->strings['I\'m going first this time...'] = 'Tentokrát začnu já...';
$a->strings['You won!'] = 'Vyhrál/a jste!';
$a->strings['"Cat" game!'] = 'Remíza!';
$a->strings['I won!'] = 'Vyhrál jsem!';
