<?php
/**
 
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: category_product_listing.php 2021-12-01 09:29:16Z webchills $
 */
define('HEADING_TITLE', 'Kategorien / Artikel');
define('HEADING_TITLE_GOTO', 'Gehe zu:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Kategorien & Artikel');

define('TABLE_HEADING_PRICE', 'Preis/Sonderangebot/Abverkauf');
define('TABLE_HEADING_QUANTITY', 'Anzahl');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Sortierung');
define('TABLE_HEADING_ACTION', 'Aktion');
define('TEXT_PRODUCTS_STATUS_ON_OF', ' von ');
define('TEXT_PRODUCTS_STATUS_ACTIVE', ' aktiv');
define('TEXT_CATEGORIES', 'Kategorien:');
define('TEXT_PRODUCTS', 'Artikel:');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Kategorie löschen');
define('TEXT_DELETE_CATEGORY_INTRO', 'Wollen Sie diese Kategorie wirklich löschen?');
define('TEXT_DELETE_CATEGORY_INTRO_LINKED_PRODUCTS', '<strong>Warnung:</strong> Verbundene Artikel, deren Master Kategorie ID gelöscht wird, setzen nicht den richtigen Preis fest. Vor dem Entfernen einer Kategorie sollten Sie zuerst sicherstellen, daß die zu löschende Kategorie keine verbundenen Artikel enthält. Noch enthaltene verbundene Artikel sollten einer anderen Master Kategorie ID zugeordnet werden');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Kategorie verschieben');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Bitte Kategorie auswählen, in die Sie <b>%s</b> verschieben wollen');
define('TEXT_MOVE', 'Verschiebe Artikel<br /><strong>ID#%1$u %2$s</strong><br />aus der derzeitigen Kategorie<br /><strong>%3$s</strong><br />in:');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Artikel löschen');
define('TEXT_DELETE_PRODUCT_INTRO', 'Entfernen Sie die Verlinkungen dieses Artikels in andere Kategorien oder löschen Sie den Artikel komplett.<br />Für eine einfachere Verlinkung/Entlinkung von Artikeln in mehrere Kategorien können Sie auch das Menü <a href="index.php?cmd=' . FILENAME_PRODUCTS_TO_CATEGORIES . '&amp;products_filter=%u">Artikel in mehrere Kategorien verlinken</a> verwenden.<br /><br /><strong>Verlinkte Kategorien</strong> sind vorausgewählt zum Löschen.<br />Die <strong>Master Kategorie</strong> (<span class="text-danger">highlighted</span>) ist bewusst nicht vorausgewählt, um versehentliches Löschen zu verhindern.<br /><br />Um einen Artikel komplett zu löschen, wählen Sie ALLE Kategorien einschließlich der Master Kategorie.');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Artikel verschieben');
define('TEXT_MOVE_PRODUCTS_INTRO', 'Verschieben Sie diesen Artikel aus dieser Kategorie in die gewählte Kategorie.<br />Falls diese aktuelle Kategorie auch die Master Kategorie des Artikels ist, wird das auch in der gewählten Kategorie entsprechend aktualisiert.<br />');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Derzeitige Kategorien: ');
define('TEXT_INFO_HEADING_COPY_TO', 'Kopieren nach');

define('TEXT_INFO_CURRENT_PRODUCT', 'Derzeitiger Artikel: ');
define('TEXT_HOW_TO_COPY', 'Kopiermethode:');
define('TEXT_COPY_AS_LINK','Verlinken Sie diesen Artikel in eine andere Kategorie so wie oben ausgewählt');
define('TEXT_COPY_AS_DUPLICATE','Erzeugen Sie ein Duplikat des Artikels in der oben gewählten Kategorie');
define('TEXT_COPY_METATAGS','Metatags zum Duplikat kopieren?');
define('TEXT_COPY_LINKED_CATEGORIES','Verlinkte Kategorien zum Duplikat kopieren?');
define('TEXT_COPY_EDIT_DUPLICATE', 'Öffne duplizierten Artikel zum weiteren Bearbeiten');
//used in copy_product_confirm
define('TEXT_COPY_AS_DUPLICATE_ATTRIBUTES', 'Attribute kopiert von Artikel ID#%u zur duplizierten Artikel ID#%u');
define('TEXT_COPY_AS_DUPLICATE_METATAGS', 'Metatags für Sprach ID#%u erfolgreich kopiert von Artikel ID#%u zur duplizierten Artikel ID#%u');
define('TEXT_COPY_AS_DUPLICATE_CATEGORIES', 'Verlinkte Kategorie ID#%u erfolgreich kopiert von Artikel ID#%u zur duplizierten Artikel ID#%u');
define('TEXT_COPY_AS_DUPLICATE_DISCOUNTS', 'Rabatte erfolgreich kopiert von Artikel ID#%u zur duplizierten Artikel ID#%u');
define('TEXT_DUPLICATE_IDENTIFIER', '[DUPLIKAT]');
define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES', 'Attributänderungen für Artikel ID# ');
define('TEXT_PRODUCTS_ATTRIBUTES_INFO', 'Attributmerkmale For:');
define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS', 'Downloads: ');
define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE', 'Lösche <strong>ALLE</strong> Artikelattribute für:<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT', 'Kopiere Attribute zu einem anderen <strong>Artikel</strong> von:<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY', 'Kopiere Attribute zu einer anderen <strong>Kategorie</strong> von:<br />');
define('TEXT_COPY_ATTRIBUTES_CONDITIONS', '<strong>Wie sollen bestehende Artikelattribute behandelt werden?</strong>');
define('TEXT_COPY_ATTRIBUTES_DELETE', '<strong>Löschen</strong> - Bestehende Attribute werden gelöscht, dann die neuen Attribute kopiert.');
define('TEXT_COPY_ATTRIBUTES_UPDATE', '<strong>Aktualisieren</strong> mit neuen Einstellungen/Preisen, dann neue hinzufügen');
define('TEXT_COPY_ATTRIBUTES_IGNORE', '<strong>Ignorieren</strong> Bestehende Attribute werden beibehalten und nur die neuen Attribute hinzugefügt');



// Products and Attribute Copy Options

define('TEXT_COPY_ATTRIBUTES', 'Artikelattribute zum Duplikat kopieren?');


// Products and Discount Copy Options
define('TEXT_COPY_DISCOUNTS_ONLY', 'wird nur verwendet für duplizierte Artikel mit Mengenrabatten ...');
define('TEXT_COPY_DISCOUNTS', 'Mengenrabatte des Artikels zum Duplikat kopieren?');


// From categories.php in 1.5.5
// categories status
define('TEXT_INFO_HEADING_STATUS_CATEGORY', 'Kategoriestatus ändern für:');
define('TEXT_CATEGORIES_STATUS_INTRO', 'Kategoriestatus ändern nach: ');
define('TEXT_CATEGORIES_STATUS_OFF', 'AUS');
define('TEXT_CATEGORIES_STATUS_ON', 'EIN');
define('TEXT_PRODUCTS_STATUS_INFO', 'JEDEN Artikelstatus ändern nach: ');
define('TEXT_PRODUCTS_STATUS_OFF', 'AUS');
define('TEXT_PRODUCTS_STATUS_ON', 'EIN');
define('TEXT_PRODUCTS_STATUS_NOCHANGE', 'Unverändert');
define('TEXT_CATEGORIES_STATUS_WARNING', '<strong>WARNUNG ...</strong><br />HINWEIS: Wenn Sie eine Kategorie deaktivieren, deaktivieren Sie auch ALLE Artikel, die in dieser Kategorie enthalten sind. Verlinkte Artikel in dieser Kategorie, welche mit anderen Kategorien verlinkt sind, werden dadurch ebenfalls deaktiviert.');
define('TEXT_SUBCATEGORIES_STATUS_INFO', 'Ändere den Status ALLER Unterkategorien auf:');
define('TEXT_SUBCATEGORIES_STATUS_OFF', 'Deaktiviert');
define('TEXT_SUBCATEGORIES_STATUS_ON', 'Aktiviert');
define('TEXT_SUBCATEGORIES_STATUS_NOCHANGE', 'Unverändert');

define('WARNING_PRODUCTS_IN_TOP_INFO', 'WARNUNG: Sie haben Produkte in der Hauptkategorie. Dadurch werden die Preise im Shop nicht richtig zugeordnet. Folgende Produkte wurden gefunden: ');
define('TEXT_COPY_MEDIA_MANAGER', 'Medien kopieren?');
define('SUCCESS_ATTRIBUTES_DELETED','Attribute erfolgreich gelöscht');
