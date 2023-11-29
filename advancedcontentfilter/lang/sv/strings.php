<?php

if(! function_exists("string_plural_select_sv")) {
function string_plural_select_sv($n){
	$n = intval($n);
	return intval($n != 1);
}}
$a->strings['Filtered by rule: %s'] = 'Filtrerat efter regel: %s';
$a->strings['Advanced Content Filter'] = 'Avancerat innehållsfiter';
$a->strings['Back to Addon Settings'] = 'TIllbaka till Tilläggsinställningar';
$a->strings['Add a Rule'] = 'Lägg till en regel';
$a->strings['Help'] = 'Hjälp';
$a->strings['Add and manage your personal content filter rules in this screen. Rules have a name and an arbitrary expression that will be matched against post data. For a complete reference of the available operations and variables, check the help page.'] = 'Lägg till och hantera dina personliga regler för innehållsfilter i det här fönstret. Regler har ett namn och ett filteruttryck som jämförs mot inläggets innehåll. Förteckning över alla operander och variabler finns att hitta på <a href="advancedcontentfilter/help">hjälpsidan</a>.';
$a->strings['Your rules'] = 'Dina regler';
$a->strings['You have no rules yet! Start adding one by clicking on the button above next to the title.'] = 'Du har inga regler än! Lägg till regler genom att klicka på knappen ovanför, bredvid överskriften.';
$a->strings['Disabled'] = 'Inaktiverad';
$a->strings['Enabled'] = 'Aktiverad';
$a->strings['Disable this rule'] = 'Inaktivera den här regeln';
$a->strings['Enable this rule'] = 'Aktivera den här regeln';
$a->strings['Edit this rule'] = 'Redigera den här regeln';
$a->strings['Edit the rule'] = 'Redigera den här regeln';
$a->strings['Save this rule'] = 'Spara den här regeln';
$a->strings['Delete this rule'] = 'Ta bort den här regeln';
$a->strings['Rule'] = 'Regel';
$a->strings['Close'] = 'Stäng';
$a->strings['Add new rule'] = 'Lägg till ny regel';
$a->strings['Rule Name'] = 'Regelnamn';
$a->strings['Rule Expression'] = 'Regeluttryck';
$a->strings['Cancel'] = 'Avbryt';
$a->strings['This addon requires this node having at least one post'] = 'Detta tillägg kräver att denna nod har åtminstone ett inlägg';
$a->strings['You must be logged in to use this method'] = 'Du måste vara inloggad för att använda den här funktionen';
$a->strings['Invalid form security token, please refresh the page.'] = 'Felaktigt säkerhetsformulärstecken, vänligen uppdatera sidan.';
$a->strings['The rule name and expression are required.'] = 'Regelns namn och uttryck krävs.';
$a->strings['Rule successfully added'] = 'Regeln kunde läggas till';
$a->strings['Rule doesn\'t exist or doesn\'t belong to you.'] = 'Regeln finns inte eller tillhör inte dig.';
$a->strings['Rule successfully updated'] = 'Uppdatering av regel lyckades';
$a->strings['Rule successfully deleted'] = 'Borttagning av regel lyckades';
$a->strings['Missing argument: guid.'] = 'Argument saknas: guid.';
$a->strings['Unknown post with guid: %s'] = 'Okänt inlägg med guid: %s';
$a->strings['Method not found'] = 'Metod hittades inte';
