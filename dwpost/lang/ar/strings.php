<?php

if(! function_exists("string_plural_select_ar")) {
function string_plural_select_ar($n){
	$n = intval($n);
	if ($n==0) { return 0; } else if ($n==1) { return 1; } else if ($n==2) { return 2; } else if ($n%100>=3 && $n%100<=10) { return 3; } else if ($n%100>=11 && $n%100<=99) { return 4; } else  { return 5; }
}}
$a->strings['Post to Dreamwidth'] = 'انشر على دريمويدز';
$a->strings['Dreamwidth Export'] = ' تصدير دريمويدز';
$a->strings['Enable dreamwidth Post Addon'] = 'فعل إضافة مشاركة دريمويدز ';
$a->strings['dreamwidth username'] = ' اسم مستخدم دريمويدز';
$a->strings['dreamwidth password'] = 'كلمة مرور دريمويدز';
$a->strings['Post to dreamwidth by default'] = ' شارك على دريمويدز افتراضيا';
$a->strings['Save Settings'] = 'احفظ الإعدادات';
