Atrox Imageviewer
=================

Den *Atrox Imageviewer* kann man zum Beispiel als Imageviewer mit [Monosnap](https://www.monosnap.com/) oder [SahreX](https://getsharex.com/) nutzen. So lassen sich einfach zum Beispiel Screenshots erstellen und auf einer aufgeräumten Seite presäntieren.

## Vorraussetzungen ##
* PHP 5
* mod_rewrite

## Installation ##
1. Den Atrox Imageviewer, also alle Dateien und Ordner auf dem Webserver hochladen (beispielsweise in das Verzeichnis */var/www/imgviewer/*).
2. Die RewriteBase in der *.htaccess* muss nun noch angepasst werden.
3. Nun kann der Seiten Titel noch in der Datei *page/config.php* angepasst werden.

## Nutzung ##
Alle PNG Bilder müssen im Hauptverzeichnis (also im Beispiel in */var/www/imgviewer/*) abgelegt werden. Ruft man nun das Bild ohne Dateiendung im Browser auf wird der *Atrox Imageviewer* erscheinen. Ruft man das Bild mit Dateieindung auf, so wird das Bild ganz normal angezeigt. Möchte man einen anderen Bildtyp (z.B. *.jpg*) nutzen, muss man diesen in der *.htaccess* Datei ändern.
