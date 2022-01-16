<?php
define('IH_VERSION_VERSION', 'Version');
define('IH_VERSION_NOT_FOUND', 'Keine Image Handler Versionsnummer gefunden.');
define('IH_VIEW_CONFIGURATION', 'Zeige Image Handler Konfiguration');
define('IH_CLEAR_CACHE', 'Bildcache löschen');
define('IH_CACHE_CLEARED', 'Bildcache gelöscht.');
define('IH_SOURCE_TYPE', 'Bildtyp (original)');
define('IH_SOURCE_IMAGE', 'Originalbild');
define('IH_SMALL_IMAGE', 'Vorschaubild');
define('IH_MEDIUM_IMAGE', 'Produktbild');
define('IH_ADD_NEW_IMAGE', 'Neues Bild hinzufügen');
define('IH_NEW_NAME_DISCARD_IMAGES', 'Neuer Bildname, zusätzliche Produktbilder wegwerfen');
define('IH_NEW_NAME_COPY_IMAGES', 'Neuer Bildname, zusätzliche Produktbilder mitnehmen');
define('IH_KEEP_NAME', 'Alten Bildnamen verwenden, zusätzliche Produktbilder behalten');
define('IH_DELETE_FROM_DB_ONLY', 'Nur Bildreferenz aus der Datenbank löschen');
define('IH_HEADING_TITLE', 'Image Handler 5');
define('IH_HEADING_TITLE_PRODUCT_SELECT','Bitte wählen Sie ein Produkt aus, um dessen zu Bilder bearbeiten.');
define('TABLE_HEADING_PHOTO_NAME', 'Bildname');
define('TABLE_HEADING_BASE_SIZE', 'Grundbild');
define('TABLE_HEADING_SMALL_SIZE','Kleines Bild');
define('TABLE_HEADING_MEDIUM_SIZE', 'Mittleres Bild');
define('TABLE_HEADING_LARGE_SIZE','Großes Bild');
define('TABLE_HEADING_ACTION', 'Aktion');
define('TABLE_HEADING_FILETYPE', 'Dateityp');
define('TEXT_PRODUCT_INFO', 'Artikel');
define('TEXT_PRICE', 'Preis');
define('TEXT_IMAGE_BASE_DIR', 'Bildverzeichnis');
define('TEXT_NO_PRODUCT_IMAGES', 'Es existieren keine Bilder zu diesem Artikel');
define('TEXT_CLICK_TO_ENLARGE', 'Vergrößern'); 
define('TEXT_INFO_IMAGE_INFO', 'Bildinformationen');
define('TEXT_INFO_NAME', 'Name');
define('TEXT_INFO_FILE_TYPE', 'Dateityp');
define('TEXT_INFO_EDIT_PHOTO', 'Bearbeite <em>Hauptbild</em>');
define('TEXT_INFO_EDIT_ADDL_PHOTO', 'Bearbeite <em>zusätzliches Bild</em>');
define('TEXT_INFO_NEW_PHOTO', 'Neues <em>Hauptbild</em>');
define('TEXT_INFO_NEW_ADDL_PHOTO', 'Neues <em>zusätzliches Bild</em>');
define('TEXT_INFO_IMAGE_BASE_NAME', 'Bildname (optional)');
define('TEXT_INFO_AUTOMATIC_FROM_DEFAULT', ' Automatisch (nach dem Hauptbild)');
define('TEXT_INFO_MAIN_DIR', 'Hauptverzeichnis');
define('TEXT_INFO_BASE_DIR', 'Haupt-Bildverzeichnis');
define('TEXT_INFO_NEW_DIR', 'Wählen Sie ein neues Verzeichnis aus oder definieren Sie ein neues für die Bilder.');
define('TEXT_INFO_IMAGE_DIR', 'Bildverzeichnis');
define('TEXT_INFO_OR', 'oder');
define('TEXT_INFO_AUTOMATIC', 'Automatisch');
define('TEXT_INFO_IMAGE_SUFFIX', 'Bildsuffix (optional)');
define('TEXT_INFO_USE_AUTO_SUFFIX','Geben Sie das gewünschte Suffix an oder lassen Sie das Feld leer, um die automatische Suffix-Generierung zu nutzen.');
define('TEXT_INFO_DEFAULT_IMAGE', 'Hauptbild');
define('TEXT_INFO_DEFAULT_IMAGE_HELP', 'Ein Hauptbild muss definiert sein. Das Hauptbild wird als kleinstes genommen, wenn mittlere und große Bilder angegeben werden.');
define('TEXT_INFO_CLICK_TO_ADD_MAIN', 'Clicken Sie hier, um ein neues <em>Hauptbild</em> für diesen Artikel hinzuzufügen.');
define('TEXT_INFO_CLICK_TO_ADD_ADDL', 'Clicken Sie hier, um ein neues <em>zusätzliches Artikelbild</em> für diesen Artikel hinzuzufügen');
define('TEXT_INFO_CONFIRM_DELETE', 'Löschen bestätigen');
define('TEXT_MAIN', 'main');
define('TEXT_ADDITIONAL', 'additional');
define('TEXT_INFO_CONFIRM_DELETE_SURE', 'Sind Sie sicher, dass Sie dieses Bild in allen verschiedenen Größen löschen wollen?');
define('TEXT_INFO_SELECT_ACTION', 'Wählen Sie eine Aktion');
define('TEXT_NOT_NEEDED', 'nicht erforderlich');    //-Displayed for the 'Medium'-sized additional images
define('TEXT_TABLE_CAPTION_INSTRUCTIONS', '<b>Hinweis:</b> Die zusätzlichen Bilder eines Artikels werden <em>automatisch</em> nur in den Größen klein und groß erstellt und zeigen <em>nicht erforderlich</em> für ihr <b>mittleres Bild</b>.<br>Wenn Ihr Frontend andere Bildgrößen für diese Bilder (oder die Hauptbilder des Artikels) verwendet, werden diese Bilder "on-demand" erstellt (und zwischengespeichert).');
define('TEXT_MSG_FILE_NOT_FOUND', 'Diese Datei existiert nicht.');
define('TEXT_MSG_ERROR_RETRIEVING_IMAGESIZE', 'Bilgröße konnte nicht ermittelt werden');
define('TEXT_MSG_AUTO_BASE_ERROR', 'Fehler: Sie haben die automatische Bildbenamung ausgewählt, es existiert aber kein Hauptbild.');
define('TEXT_MSG_INVALID_BASE_ERROR', 'Fehler: Ungültige Bildbenennung, oder es konnte kein Hauptbild gefunden werden.');
define('TEXT_MSG_AUTO_REPLACE',  'Störende Zeichen wurden automatisch im Bildnamen ausgetauscht, neuer Name: ');
define('TEXT_MSG_INVALID_SUFFIX', 'Fehler: Ungültiges Bildsuffix.');
define('TEXT_MSG_IMAGE_TYPES_NOT_SAME_ERROR', 'Bildtypen sind nicht gleich.');
define('TEXT_MSG_DEFAULT_REQUIRED_FOR_RESIZE', 'Fehler: Für automatische Größenanpassung wird ein Hauptbild benötigt.');
define('TEXT_MSG_NO_DEFAULT', 'Fehler: Es wurde kein Hauptbild angegeben.');
define('TEXT_MSG_NO_DEFAULT_ON_NAME_CHANGE', 'Sie müssen ein Grundbild angeben, wenn Sie das Hauptbild aktualisieren und dessen Namen ändern wollen.');
define('TEXT_MSG_INVALID_EXTENSION', 'Der für das "%1$s" Bild hochgeladene Dateityp (%2$s) wird nicht unterstützt.  Der Dateityp muss einer der folgenden sein (%3$s).');
define('TEXT_BASE', 'base');
define('TEXT_MEDIUM', 'medium');
define('TEXT_LARGE', 'large');
define('TEXT_MSG_FILE_EXISTS', 'Fehler: Die Datei existiert bereits! Bitte verändern Sie den Bildnamen oder das Suffix.');
define('TEXT_MSG_INVALID_SQL', 'Fehler: SQL Abfrage konnte nicht durchgeführt werden.');
define('TEXT_MSG_NOCREATE_IMAGE_DIR', 'Fehler: Das Bildverzeichnis konnte nicht erstellt werden.');
define('TEXT_MSG_NOCREATE_MEDIUM_IMAGE_DIR', 'Fehler: Das Bildverzeichis für mittlere Bilder konnte nicht erstellt werden.');
define('TEXT_MSG_NOCREATE_LARGE_IMAGE_DIR', 'Fehler: das Bildverzeichnis für große Bilder konnte nicht erstellt werden.');
define('TEXT_MSG_NOPERMS_IMAGE_DIR', 'Fehler: Die Berechtigungen des Bildverzeichnisses konnten nicht gesetzt werden.');
define('TEXT_MSG_NOPERMS_MEDIUM_IMAGE_DIR', 'Fehler: Die Berechtigungen des Bildverzeichnisses für mittlere Bilder konnten nicht gesetzt werden.');
define('TEXT_MSG_NOPERMS_LARGE_IMAGE_DIR', 'Fehler: Die Berechtigungen des Bildverzeichnisses für große Bilder konnten nicht gesetzt werden.');
define('TEXT_MSG_NAME_TOO_LONG_ERROR', 'Der Dateiname "%1$s" ist zu lang und kann so nicht in der Datenbank gespeichert werden.  Ändern Sie auf einen Dateinamen mit %2$u Zeichen oder weniger.');
define('TEXT_MSG_NO_SUFFIXES_FOUND', 'Konnte kein ungenutztes Suffix für das zusätzliche Artikelbild im Bereich von _01 bis _99 finden.');
define('TEXT_MSG_NOUPLOAD_DEFAULT', 'Das Hauptbild konnte nicht hochgeladen werden!');
define('TEXT_MSG_NORESIZE', 'Die Größe des Bildes konnte nicht verändert werden!');
define('TEXT_MSG_NOCOPY_LARGE', 'Das große Bild konnte nicht kopiert werden!');
define('TEXT_MSG_NOCOPY_MEDIUM', 'Das mittlere Bild konnte nicht kopiert werden!');
define('TEXT_MSG_NOCOPY_DEFAULT', 'Das Hauptbild konnte nicht kopiert werden!');
define('TEXT_MSG_NOPERMS_LARGE', 'Die Berechtigungen für das große Bild konnten nicht gesetzt werden!');
define('TEXT_MSG_NOPERMS_MEDIUM', 'Die Berechtigungen für das mittlere Bild konnten nicht gesetzt werden!');
define('TEXT_MSG_NOPERMS_DEFAULT', 'Die Berechtigungen für das Hauptbild konnten nicht gesetzt werden!');
define('TEXT_MSG_IMAGE_SAVED', 'Bild erfolgreich gespeichert.');
define('TEXT_MSG_LARGE_DELETED', 'Großes Bild gelöscht.');
define('TEXT_MSG_NO_DELETE_LARGE', 'Großes Bild konnte nicht gelöscht werden.');
define('TEXT_MSG_MEDIUM_DELETED', 'Mittleres Bild wurde gelöscht.');
define('TEXT_MSG_NO_DELETE_MEDIUM', 'Mittleres Bild konnte nicht gelöscht werden.');
define('TEXT_MSG_DEFAULT_DELETED', 'Hauptbild wurde gelöscht.');
define('TEXT_MSG_NO_DELETE_DEFAULT', 'Hauptbild konnte nicht gelöscht werden.');
define('TEXT_MSG_NO_DEFAULT_FILE_FOUND', 'Es wurde kein Hauptbild zum Löschen gefunden.');
define('TEXT_MSG_IMAGE_DELETED', 'Bild (%s) erfolgreich gelöscht.');
define('TEXT_MSG_IMAGE_NOT_FOUND', 'Bild (%s) konnte nicht gefunden werden.');
define('TEXT_MSG_IMAGE_NOT_DELETED', 'Bild (%s) konnte nicht gelöscht werden. Berechtigungen überprüfen.');
define('TEXT_MSG_IMPORT_SUCCESS', 'Erfolgreich importiert: ');
define('TEXT_MSG_IMPORT_FAILURE', 'Fehler beim Importieren: ');
// image manager
define('IH_IMAGE_NEW_FILE', 'Hier clicken, um ein neues Bild hinzuzufügen');
define('IH_IMAGE_EDIT', 'Hier clicken um ein Bild zu bearbeiten');
define('TEXT_MEDIUM_FILE_IMAGE', 'mittlere Bild Datei (optional)');
define('TEXT_LARGE_FILE_IMAGE', 'große Bild Datei (optional)');
// ih menu
define('IH_MENU_MANAGER', 'Bild Manager');
define('IH_MENU_ADMIN', 'Admin Tools');
define('IH_MENU_ABOUT', 'Hilfe');
define('IH_MENU_PREVIEW', 'Vorschau');