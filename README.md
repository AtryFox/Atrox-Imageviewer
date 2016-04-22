Atrox Imageviewer
=================

Der Atrox Imageviewer (**AIv**) stellt Screenshots auf einer aufgeräumten Seite dar. Dabei lässt sich das Bild ganz normal mit Dateiendung, um das Bild direkt aufzurufen, oder ohne Dateiendung, um das Bild eingebettet zu zeigen, aufrufen. In Verbindung mit [Monosnap](https://www.monosnap.com/) oder [ShareX](https://getsharex.com/) erhält man so einen eigenen Imageuploader mit Overview-Page und Direktanzeige des Bilds.

## Vorraussetzungen ##
* Apache 2
* mod_rewrite
* PHP 5.6

## Installation ##
1. Das Verzeichnis *imgviewer* auf einem belibigen Webspace, der die Vorraussetzungen erfüllt, hochladen.
2. RewriteBase (`.htaccess` Zeile 2) anpassen. Diese RewriteBase muss auf `page/` zeigen. Für `example.tld/imgviewer/page/` muss also `/imgviewer/page/` eingetragen werden.
3. Der Seitentitel lässt sich über die Datei `page/config.php` anpassen.

## Nutzung ##
Alle PNG Bilder müssen im Hauptverzeichnis (also zum Beispiel in `/imgviewer/`) abgelegt werden. Ruft man nun das Bild ohne Dateiendung im Browser auf wird der AIv erscheinen. Ruft man das Bild mit Dateiendung auf, so wird das Bild ganz normal angezeigt. Möchte man einen anderen Bildtyp (z.B. *.jpg*) nutzen, müssen die entsprechenden Einstellungen in den Konfigurationen `.htaccess` und `config.php` angepasst werden.
