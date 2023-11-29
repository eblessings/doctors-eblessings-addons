<?php

if(! function_exists("string_plural_select_de")) {
function string_plural_select_de($n){
	$n = intval($n);
	return intval($n != 1);
}}
$a->strings['Post to GNU Social'] = 'Auf GNU Social veröffentlichen';
$a->strings['Please contact your site administrator.<br />The provided API URL is not valid.'] = 'Bitte kontaktiere den Administrator der Seite.<br />Die gegebene API URL ist nicht gültig.';
$a->strings['We could not contact the GNU Social API with the Path you entered.'] = 'Die GNU Social-API konnte mit dem angegebenen Pfad nicht erreicht werden.';
$a->strings['Save Settings'] = 'Einstellungen speichern';
$a->strings['Currently connected to: <a href="%s" target="_statusnet">%s</a>'] = 'Derzeit verbunden mit: <a href="%s" target="_statusnet">%s</a>';
$a->strings['<strong>Note</strong>: Due your privacy settings (<em>Hide your profile details from unknown viewers?</em>) the link potentially included in public postings relayed to GNU Social will lead the visitor to a blank page informing the visitor that the access to your profile has been restricted.'] = '<strong>Hinweis</strong>: Aufgrund deiner Privatsphären-Einstellungen (<em>Profil-Details vor unbekannten Betrachtern verbergen?</em>) wird der Link, der eventuell an deinen GNU Social-Beitrag angehängt wird, um auf den Originalbeitrag zu verweisen, den Betrachter auf eine leere Seite führen, die ihn darüber informiert, dass der Zugriff eingeschränkt wurde.';
$a->strings['Clear OAuth configuration'] = 'OAuth-Konfiguration löschen';
$a->strings['Cancel GNU Social Connection'] = 'Verbindung zum GNU Social-Server abbrechen';
$a->strings['Globally Available GNU Social OAuthKeys'] = 'Verfügbare OAuth-Schlüssel für GNU Social';
$a->strings['There are preconfigured OAuth key pairs for some GNU Social servers available. If you are using one of them, please use these credentials. If not feel free to connect to any other GNU Social instance (see below).'] = 'Für einige GNU Social-Server sind voreingestellte OAuth-Schlüsselpaare verfügbar. Solltest du einen dieser Server benutzen, dann verwende bitte diese Schlüssel. Falls nicht, stelle stattdessen eine Verbindung zu irgendeinem anderen StatusNet-Server her (siehe unten).';
$a->strings['Provide your own OAuth Credentials'] = 'Eigene OAuth-Schlüssel eintragen';
$a->strings['No consumer key pair for GNU Social found. Register your Friendica Account as a desktop application on your GNU Social account, copy the consumer key pair here and enter the API base root.<br />Before you register your own OAuth key pair ask the administrator if there is already a key pair for this Friendica installation at your favorite GNU Social installation.'] = 'Kein Consumer-Schlüsselpaar für GNU Social gefunden. Registriere deinen Friendica-Account als Desktop-Client bei deinem GNU Social-Account, kopiere das Consumer-Schlüsselpaar hierher und gib die API-URL ein.<br />Bevor du dein eigenes Consumer-Schlüsselpaar registrierst, frage den Administrator dieses Friendica-Servers, ob schon ein Schlüsselpaar für diesen Friendica-Server auf diesem GNU Social-Server existiert.';
$a->strings['To connect to your GNU Social account click the button below to get a security code from GNU Social which you have to copy into the input box below and submit the form. Only your <strong>public</strong> posts will be posted to GNU Social.'] = 'Um dein Konto mit einem GNU Social-Konto zu verknüpfen, klicke den Button an, um einen Sicherheitscode von GNU Social zu erhalten, und kopiere diesen in das Eingabefeld weiter unten. Es werden ausschließlich deine <strong>öffentlichen</strong> Nachrichten an GNU Social gesendet.';
$a->strings['Log in with GNU Social'] = 'Bei GNU Social anmelden';
$a->strings['Cancel Connection Process'] = 'Verbindungsprozess abbrechen';
$a->strings['Current GNU Social API is: %s'] = 'Derzeitige GNU Social-API-URL lautet %s';
$a->strings['OAuth Consumer Key'] = 'OAuth Consumer Key';
$a->strings['OAuth Consumer Secret'] = 'OAuth Consumer Secret';
$a->strings['Base API Path (remember the trailing /)'] = 'Basis-URL der StatusNet-API (vergiss den abschließenden / nicht)';
$a->strings['Copy the security code from GNU Social here'] = 'Kopiere den Sicherheitscode von GNU social hier hin';
$a->strings['Allow posting to GNU Social'] = 'Veröffentlichung bei GNU Social erlauben';
$a->strings['If enabled all your <strong>public</strong> postings can be posted to the associated GNU Social account. You can choose to do so by default (here) or for every posting separately in the posting options when writing the entry.'] = 'Wenn aktiviert, können all deine <strong>öffentlichen</strong> Einträge auf dem verbundenen GNU Social-Konto veröffentlicht werden. Du kannst das (hier) als Standardverhalten einstellen oder beim Schreiben eines Beitrags in den Beitragsoptionen festlegen.';
$a->strings['Post to GNU Social by default'] = 'Standardmäßig bei GNU Social veröffentlichen';
$a->strings['GNU Social Import/Export/Mirror'] = 'GNU Social-Import/Export/Spiegeln';
$a->strings['Site name'] = 'Seitenname';
$a->strings['Consumer Secret'] = 'Consumer Secret';
$a->strings['Consumer Key'] = 'Consumer Key';
