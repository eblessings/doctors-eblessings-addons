<?php

if(! function_exists("string_plural_select_ar")) {
function string_plural_select_ar($n){
	$n = intval($n);
	if ($n==0) { return 0; } else if ($n==1) { return 1; } else if ($n==2) { return 2; } else if ($n%100>=3 && $n%100<=10) { return 3; } else if ($n%100>=11 && $n%100<=99) { return 4; } else  { return 5; }
}}
$a->strings['Gnot Settings'] = 'إعدادات Gnot';
$a->strings['Save Settings'] = 'احفظ الإعدادات';
$a->strings['Enable this addon?'] = 'أتريد تفعيل هذه الإضافة؟';
$a->strings['Allows threading of email comment notifications on Gmail and anonymising the subject line.'] = 'السماح بتسلسل تنبيهات التعليقات عبر البريد الإلكتروني على Gmail  وإخفاء هوية عنوان الموضوع.';
$a->strings['[Friendica:Notify] Comment to conversation #%d'] = '[فرنديكا:تنبيه] علق على المحادقة #%d';
