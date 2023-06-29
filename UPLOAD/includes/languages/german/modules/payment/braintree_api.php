<?php
define('MODULE_PAYMENT_BRAINTREE_TEXT_ADMIN_TITLE', 'Braintree');

if (IS_ADMIN_FLAG === true) {
define('MODULE_PAYMENT_BRAINTREE_TEXT_ADMIN_DESCRIPTION', 'Kreditkartenzahlung via Braintree<br><br><img src="images/braintree-logo.png" alt="Braintree"/><br><br>Dieses Modul unterstützt die SCA (Strong Customer Authentication)<br>Stellen Sie sicher, dass in Ihrem Braintree Account 3D Secure aktiviert ist.<br><br><a href="https://www.braintreepayments.com/" target="_blank">Braintree Info</a><br><br><a href="https://sandbox.braintreegateway.com/login" target="_blank">Braintree Sandbox Login</a><br><br><a href="https://www.braintreegateway.com/login" target="_blank">Braintree Live Login</a>');
}

define('MODULE_PAYMENT_BRAINTREE_TEXT_DESCRIPTION', 'Kreditkarte');
define('MODULE_PAYMENT_BRAINTREE_TEXT_TITLE', 'Kreditkarte');
define('MODULE_PAYMENT_BRAINTREE_DP_TEXT_TYPE', 'Kreditkarte (BT)');
define('MODULE_PAYMENT_BRAINTREE_PF_TEXT_TYPE', 'Kreditkarte (PF)');
define('MODULE_PAYMENT_BRAINTREE_ERROR_HEADING', 'Es tut uns leid, aber wir konnten Ihre Kreditkarte nicht verarbeiten.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CARD_ERROR', 'Die Kreditkartendaten, die Sie eingegeben haben, enthalten einen Fehler. Bitte prüfen, korrigieren und nochmal probieren.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CREDIT_CARD_FIRSTNAME', 'Inhaber Vorname:');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CREDIT_CARD_LASTNAME', 'Inhaber Nachname:');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CREDIT_CARD_OWNER', 'Kreditkarteninhaber:');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CREDIT_CARD_TYPE', 'Kreditkarte Typ:');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CREDIT_CARD_NUMBER', 'Kreditkarte Nummer:');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CREDIT_CARD_EXPIRES', 'Kartenablaufdatum:<br>(Monat / Jahr)');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CREDIT_CARD_ISSUE', 'Kartenausstellungsdatum:');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CREDIT_CARD_MAESTRO_ISSUENUMBER', 'Maestro Issue No.:');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CREDIT_CARD_CHECKNUMBER', 'CVV Nummer:<br>(auf der Rückseite)');
define('MODULE_PAYMENT_BRAINTREE_TEXT_TRANSACTION_FOR', 'Transaktion für');
define('MODULE_PAYMENT_BRAINTREE_TEXT_DECLINED', 'Ihre Kreditkarte wurde abgelehnt. Bitte versuchen Sie eine andere Karte oder kontaktieren Sie Ihre Bank für weitere Informationen.');
define('MODULE_PAYMENT_BRAINTREE_CANNOT_BE_COMPLETED', 'Wir konnten Ihre Bestellung nicht durchführen. Bitte wählen Sie eine andere Zahlungsart oder wenden Sie sich an den Shopinhaber, um Hilfe zu erhalten.');
define('MODULE_PAYMENT_BRAINTREE_INVALID_RESPONSE', 'Wir konnten Ihre Bestellung nicht durchführen. Bitte versuchen Sie es erneut, wählen Sie eine andere Zahlungsart oder wenden Sie sich an den Shopinhaber, um Hilfe zu erhalten.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_GEN_ERROR', 'Es ist ein Fehler aufgetreten, als wir versucht haben, den Zahlungsanbieter zu kontaktieren. Bitte versuchen Sie es erneut, wählen Sie eine alternative Zahlungsmethode oder wenden Sie sich an den Shopinhaber.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_EMAIL_ERROR_MESSAGE', 'Lieber Shopinhaber,' . "\n" . 'Beim Versuch, die Zahlungsvalidierungstransaktion zu starten, ist ein Fehler aufgetreten. Ihrem Kunden wurde nur die Fehlernummer ohne weitere Infos dazu angezeigt. Die Details des Fehlers sind unten aufgeführt.' . "\n\n");
define('MODULE_PAYMENT_BRAINTREE_TEXT_EMAIL_ERROR_SUBJECT', 'ALARM: Braintree Payment Error');
define('MODULE_PAYMENT_BRAINTREE_TEXT_ADDR_ERROR', 'Die von Ihnen eingegebenen Adressinformationen scheinen nicht gültig zu sein oder können nicht abgeglichen werden. Bitte wählen oder ergänzen Sie eine andere Adresse und versuchen Sie es erneut.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_INSUFFICIENT_FUNDS_ERROR', 'Braintree konnte diese Transaktion nicht erfolgreich refundieren. Bitte wählen Sie eine andere Zahlungsoption oder überprüfen Sie die Zahlungsoptionen in Ihrem Braintree Konto, bevor Sie fortfahren.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_ERROR', 'Es ist ein Fehler aufgetreten, als wir versucht haben, Ihre Kreditkarte zu verarbeiten. Bitte versuchen Sie es erneut, wählen Sie eine alternative Zahlungsmethode oder wenden Sie sich an den Shopinhaber.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_BAD_CARD', 'Wir entschuldigen uns für die Unannehmlichkeiten, aber die von Ihnen angegebene Kreditkarte ist keine, die wir akzeptieren. Bitte verwenden Sie eine andere Kreditkarte oder überprüfen Sie, ob die von Ihnen eingegebenen Daten korrekt sind, oder wenden Sie sich an den Shopinhaber.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_BAD_LOGIN', 'Es gab ein Problem bei der Validierung Ihres Kontos. Bitte versuchen Sie es erneut.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_JS_CC_OWNER', '* Der Name des Karteninhabers muss mindestens ' . CC_OWNER_MIN_LENGTH . ' Zeichen haben.\n');
define('MODULE_PAYMENT_BRAINTREE_TEXT_JS_CC_NUMBER', '* Die Kreditkartennummer muss mindestens ' . CC_NUMBER_MIN_LENGTH . ' Zeichen haben.\n');
define('MODULE_PAYMENT_BRAINTREE_TEXT_JS_CC_CVV', '* Die 3 oder 4 stellige CVV Nummer, die auf der Rückseite der Kreditkarte steht, muss eingegeben werden.\n');
define('MODULE_PAYMENT_BRAINTREE_ERROR_AVS_FAILURE_TEXT', 'ALARM: Fehler bei der Adressprüfung. ');
define('MODULE_PAYMENT_BRAINTREE_ERROR_CVV_FAILURE_TEXT', 'ALARM: Fehler bei der Prüfung der CVV Nummer. ');
define('MODULE_PAYMENT_BRAINTREE_ERROR_AVSCVV_PROBLEM_TEXT', ' Die Bestellung wird erst vom Shopinhaber genauer überprüft.');

define('MODULE_PAYMENT_BRAINTREE_TEXT_STATE_ERROR', 'Das Bundesland in ihrem Kundenkonto ist ungültig.  Bitte ändern Sie das unter Mein Konto.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_NOT_BT_ACCOUNT_ERROR', 'Wir entschuldigen uns für die Unannehmlichkeiten. Die Zahlung konnte nicht eingeleitet werden, da das vom Shopinhaber konfigurierte Braintree-Konto kein Braintree Payments Pro-Konto ist oder Braintree Gateway-Dienste nicht gekauft wurden. Oder Sie haben versucht, mit einer AmEx-Karte zu bezahlen und der Händler hat den AmEx-Support nicht aktiviert. Bitte wählen Sie eine andere Zahlungsart für Ihre Bestellung oder eine andere Art von Kreditkarte.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_NOT_US_BT_ACCOUNT_ERROR', 'Wir entschuldigen uns für die Unannehmlichkeiten. Die Zahlung konnte nicht veranlasst werden, da das vom Shopinhaber eingerichtete Braintree-Konto kein US Braintree Payments Pro-Konto ist oder Braintree Gateway-Dienste nicht gekauft wurden (oder nicht durch Akzeptieren der Rechnungsvereinbarung auf der Braintree-Website aktiviert wurden).  Bitte wählen Sie eine alternative Zahlungsart für Ihre Bestellung.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_NOT_UKBT_ACCOUNT_ERROR', 'Wir entschuldigen uns für die Unannehmlichkeiten. Die Zahlung konnte nicht veranlasst werden, da das vom Shopinhaber eingerichtete Braintree-Konto kein Braintree Website Payments Pro 2.0 (UK) Konto ist oder Braintree Gateway Services nicht gekauft oder nicht ordnungsgemäß aktiviert wurden.  Bitte wählen Sie eine alternative Zahlungsart für Ihre Bestellung.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_SANDBOX_VS_LIVE_ERROR', 'Wir entschuldigen uns für die Unannehmlichkeiten. Die Einstellungen für die Braintree-Authentifizierung sind noch nicht eingerichtet, oder die API-Sicherheitsinformationen sind falsch. Wir können Ihre Transaktion nicht abschließen. Bitte benachrichtigen Sie den Shopinhaber, damit er dieses Problem beheben kann.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_BT_BAD_COUNTRY_ERROR', 'Es tut uns leid - das vom Shop-Administrator eingerichtete Braintree-Konto hat seinen Sitz in einem Land, das derzeit nicht für Website Payments Pro unterstützt wird. Bitte wählen Sie eine andere Zahlungsmethode, um Ihre Bestellung abzuschließen.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CANNOT_USE_THIS_CURRENCY_ERROR', 'Es tut uns leid - die von Ihnen verwendete Kreditkarte ist nicht mit der Währung kompatibel, die Sie für den Checkout ausgewählt haben. Bitte ändern Sie Ihre Währungsauswahl oder wählen Sie eine andere Zahlungsmethode, um Ihre Bestellung abzuschließen.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(HINWEIS: Modul noch nicht konfiguriert)</span>');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CARD_TYPE_NOT_SUPPORTED', 'Sie haben versucht, Ihren Kauf mit einer Kreditkarte zu bezahlen, die von diesem Händler nicht akzeptiert wird. Wir entschuldigen uns für die Unannehmlichkeiten und laden Sie ein, es erneut mit einer anderen Kartenart zu versuchen, oder wenden Sie sich an den Shopinhaber, um alternative Zahlungsmöglichkeiten zu erhalten.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_GETDETAILS_ERROR', 'Es gab ein Problem beim Abrufen von Transaktionsdetails. ');
define('MODULE_PAYMENT_BRAINTREE_TEXT_TRANSSEARCH_ERROR', 'Es gab ein Problem bei der Suche nach Transaktionen, die den von Ihnen angegebenen Kriterien entsprechen. ');
define('MODULE_PAYMENT_BRAINTREE_TEXT_VOID_ERROR', 'Es gab ein Problem bei der Stornierung der Transaktion. ');
define('MODULE_PAYMENT_BRAINTREE_TEXT_REFUND_ERROR', 'Es gab ein Problem bei der Rückerstattung des angegebenen Transaktionsbetrags. ');
define('MODULE_PAYMENT_BRAINTREE_TEXT_AUTH_ERROR', 'Es gab ein Problem bei der Autorisierung der Transaktion. ');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CAPT_ERROR', 'Es gab ein Problem bei der Erfassung der Transaktion. ');
define('MODULE_PAYMENT_BRAINTREE_TEXT_REFUNDFULL_ERROR', 'Ihr Rückerstattungsantrag wurde von Braintree abgelehnt.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_INVALID_REFUND_AMOUNT', 'Sie haben eine Teilrückerstattung beantragt, aber keinen Betrag angegeben.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_REFUND_FULL_CONFIRM_ERROR', 'Sie haben eine vollständige Rückerstattung beantragt, aber das Kontrollkästchen Bestätigen nicht aktiviert, um Ihre Absicht zu bestätigen.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_INVALID_AUTH_AMOUNT', 'Sie haben eine Autorisierung beantragt, aber keinen Betrag angegeben.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_INVALID_CAPTURE_AMOUNT', 'Sie haben eine Erfassung beantragt, aber keinen Betrag angegeben.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_VOID_CONFIRM_CHECK', 'Bestätigen');
define('MODULE_PAYMENT_BRAINTREE_TEXT_VOID_CONFIRM_ERROR', 'Sie haben beantragt, eine Transaktion zu stornieren, aber das Kontrollkästchen Bestätigen nicht aktiviert, um Ihre Absicht zu bestätigen.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_AUTH_FULL_CONFIRM_CHECK', 'Bestätigen');
define('MODULE_PAYMENT_BRAINTREE_TEXT_AUTH_CONFIRM_ERROR', 'Sie haben eine Autorisierung beantragt, aber das Kontrollkästchen Bestätigen nicht aktiviert, um Ihre Absicht zu überprüfen.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CAPTURE_FULL_CONFIRM_ERROR', 'Sie haben eine Geldabholung beantragt, aber das Kontrollkästchen Bestätigen nicht aktiviert, um Ihre Absicht zu bestätigen.');

define('MODULE_PAYMENT_BRAINTREE_TEXT_REFUND_INITIATED', 'Braintree Rückerstattung für %s gestartet. Transaktions ID: %s. Aktualisieren Sie den Bildschirm, um die Bestätigungsdetails im Abschnitt Auftragsstatusverlauf/Kommentare zu sehen.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_AUTH_INITIATED', 'Braintree Autorisierung für %s gestartet. Aktualisieren Sie den Bildschirm, um die Bestätigungsdetails im Abschnitt Auftragsstatusverlauf/Kommentare zu sehen.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CAPT_INITIATED', 'Braintree Capture für %s gestartet. Receipt ID: %s. Aktualisieren Sie den Bildschirm, um die Bestätigungsdetails im Abschnitt Auftragsstatusverlauf/Kommentare zu sehen.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_VOID_INITIATED', 'Braintree Storno Anfrage gestartet. Transaktions ID: %s. Aktualisieren Sie den Bildschirm, um die Bestätigungsdetails im Abschnitt Auftragsstatusverlauf/Kommentare zu sehen.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_GEN_API_ERROR', 'Es gab einen Fehler in der versuchten Transaktion. Detaillierte Informationen finden Sie im API-Referenzleitfaden oder in den Transaktionsprotokollen.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_INVALID_ZONE_ERROR', 'Wir entschuldigen uns für die Unannehmlichkeiten, können aber zum jetzigen Zeitpunkt nicht mit dieser Methode Bestellungen aus der geografischen Region bearbeiten, die Sie als Ihre Kontoadresse gewählt haben.  Bitte gehen Sie erneut zur Kasse und wählen Sie aus den verfügbaren Zahlungsmethoden eine andere, um Ihre Bestellung abzuschließen.');


// These are used for displaying raw transaction details in the Admin area:
define('MODULE_PAYMENT_BRAINTREE_ENTRY_FIRST_NAME', 'Vorname:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_LAST_NAME', 'Nachname:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_BUSINESS_NAME', 'Firmenname:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_ADDRESS_NAME', 'Adress Name:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_ADDRESS_STREET', 'Strasse:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_ADDRESS_CITY', 'Ort:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_ADDRESS_STATE', 'Bundesland oder PLZ:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_ADDRESS_ZIP', 'PLZ:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_ADDRESS_COUNTRY', 'Land:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_EMAIL_ADDRESS', 'Emailadresse:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_EBAY_ID', 'Ebay ID:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_PAYER_ID', 'Käufer ID:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_PAYER_STATUS', 'Käufer Status:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_ADDRESS_STATUS', 'Adresse Status:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_PAYMENT_TYPE', 'Zahlungsart:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_PAYMENT_STATUS', 'Zahlungs Status:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_PENDING_REASON', 'Grund für die Verzögerung:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_INVOICE', 'Rechnung:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_PAYMENT_DATE', 'Zahlungsdatum:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_CURRENCY', 'Währung:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_GROSS_AMOUNT', 'Gesamtbetrag:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_PAYMENT_FEE', 'Zahlungsgebühr:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_EXCHANGE_RATE', 'Wechselkurs:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_CART_ITEMS', 'Artikel im Warenkorb:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_TXN_TYPE', 'Transaktionstyp:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_TXN_ID', 'Transaktions ID:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_PARENT_TXN_ID', 'Parent Trans. ID:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_REFUND_TITLE', '<strong>Rückerstattungen</strong>');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_REFUND_FULL', 'Wenn Sie diese Bestellung vollständig rückerstatten wollen, klicken Sie hier:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_REFUND_BUTTON_TEXT_FULL', 'Volle Rückerstattung');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_REFUND_BUTTON_TEXT_PARTIAL', 'Teilweise Rückerstattung');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_REFUND_TEXT_FULL_OR', '<br>... oder geben Sie  ');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_REFUND_PAYFLOW_TEXT', '');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_REFUND_PARTIAL_TEXT', 'den Teilbetrag hier ein und klicken Sie auf Teilweise Rückerstattung');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_REFUND_SUFFIX', '*Eine vollständige Rückerstattung kann nicht erfolgen, nachdem eine Teilrückerstattung beantragt wurde..<br />*Mehrere Teilrückerstattungen sind bis zum verbleibenden nicht rückerstatteten Saldo zulässig.');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Hinweis, der dem Kunden angezeigt wird:</strong>');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_REFUND_DEFAULT_MESSAGE', 'Erstattet vom Shopinhaber.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_REFUND_FULL_CONFIRM_CHECK','Bestätigen: ');


define('MODULE_PAYMENT_BRAINTREE_ENTRY_AUTH_TITLE', '<strong>Autorisierungen</strong>');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_AUTH_PARTIAL_TEXT', 'Wenn Sie einen Teil dieser Bestellung autorisieren möchten, geben Sie hier den Betrag ein.:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_AUTH_BUTTON_TEXT_PARTIAL', 'Autorisierung durchführen');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_AUTH_SUFFIX', '');

define('MODULE_PAYMENT_BRAINTREE_ENTRY_CAPTURE_TITLE', '<strong>Autorisierungen erfassen</strong>');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_CAPTURE_FULL', 'Wenn Sie die ausstehenden autorisierten Beträge für diesen Auftrag ganz oder teilweise erfassen möchten, geben Sie den Capture-Betrag ein und wählen Sie, ob dies die endgültige Erfassung für diesen Auftrag ist.  Aktivieren Sie das Bestätigungsfeld, bevor Sie Ihre Capture-Anfrage senden.<br />');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_CAPTURE_BUTTON_TEXT_FULL', 'Erfassung durchführen');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_CAPTURE_AMOUNT_TEXT', 'Betrag für die Erfassung:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_CAPTURE_FINAL_TEXT', 'Ist dies die endgültige Erfassung?');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_CAPTURE_SUFFIX', '');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_CAPTURE_TEXT_COMMENTS', '<strong>Hinweis, der dem Kunden angezeigt wird:</strong>');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Danke für Ihre Bestellung.');
define('MODULE_PAYMENT_BRAINTREE_TEXT_CAPTURE_FULL_CONFIRM_CHECK','Bestätigen: ');

define('MODULE_PAYMENT_BRAINTREE_ENTRY_VOID_TITLE', '<strong>Auftragsberechtigungen ungültig machen</strong>');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_VOID', 'Wenn Sie eine Berechtigung widerrufen möchten, geben Sie hier die Berechtigungs-ID ein und bestätigen Sie:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_VOID_TEXT_COMMENTS', '<strong>Hinweis, der dem Kunden angezeigt wird:</strong>');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_VOID_DEFAULT_MESSAGE', 'Vielen Dank für Ihre Unterstützung. Bitte kommen Sie wieder.');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_VOID_BUTTON_TEXT_FULL', 'Widerruf starten');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_VOID_SUFFIX', '');

define('MODULE_PAYMENT_BRAINTREE_ENTRY_TRANSSTATE', 'Trans. Status:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_AUTHCODE', 'Auth. Code:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_AVSADDR', 'AVS Adressübereinstimmung:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_AVSZIP', 'AVS PLZ Übereinstimmung:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_CVV2MATCH', 'CVV2 Übereinstimmung:');
define('MODULE_PAYMENT_BRAINTREE_ENTRY_DAYSTOSETTLE', 'Tage bis zur Abrechnung:');

define('MODULES_PAYMENT_BRAINTREE_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX', 'Einmalige Gebühren bezogen auf');
define('MODULES_PAYMENT_BRAINTREE_LINEITEM_TEXT_SURCHARGES_SHORT', 'Aufschläge');
define('MODULES_PAYMENT_BRAINTREE_LINEITEM_TEXT_SURCHARGES_LONG', 'Bearbeitungsgebühren und andere Gebühren');
define('MODULES_PAYMENT_BRAINTREE_LINEITEM_TEXT_DISCOUNTS_SHORT', 'Rabatte');
define('MODULES_PAYMENT_BRAINTREE_LINEITEM_TEXT_DISCOUNTS_LONG', 'Angewandte Rabatte, einschließlich Rabattcoupons, Geschenkgutscheine usw.');

define('MODULES_PAYMENT_BRAINTREE_TEXT_EMAIL_FMF_SUBJECT', 'Zahlung im Status Betrugsüberprüfung: ');
define('MODULES_PAYMENT_BRAINTREE_TEXT_EMAIL_FMF_INTRO', 'Dies ist eine automatisierte Benachrichtigung, um Sie darüber zu informieren, dass Braintree die Zahlung für eine neue Bestellung als Erforderliche Zahlungsprüfung durch sein Betrugsteam gekennzeichnet hat. In der Regel wird die Überprüfung innerhalb von 36 Stunden abgeschlossen. Es wird dringend empfohlen, dass Sie die Bestellung NICHT versenden, bis die Zahlungsprüfung abgeschlossen ist. Sie können den aktuellen Bewertungsstatus der Bestellung einsehen, indem Sie sich in Ihr Braintree Konto einloggen und die letzten Transaktionen überprüfen.');
define('MODULES_PAYMENT_BRAINTREE_AGGREGATE_CART_CONTENTS', 'Alle Artikel in Ihrem Warenkorb (Details im Shop und Ihrer Shoprechnung ersichtlich).');

define('CENTINEL_AUTHENTICATION_ERROR', 'Authentifizierung fehlgeschlagen - Ihr Finanzinstitut hat angegeben, dass es diese Transaktion nicht erfolgreich authentifizieren konnte. Zum Schutz vor unbefugter Nutzung kann diese Karte nicht zum Abschluss Ihres Einkaufs verwendet werden. Sie können den Kauf abschließen, indem Sie eine andere Zahlungsart wählen.');
define('CENTINEL_PROCESSING_ERROR', 'Es gab ein Problem bei der Einholung der Autorisierung für Ihre Transaktion. Bitte geben Sie Ihre Zahlungsinformationen erneut ein und/oder wählen Sie eine andere Zahlungsart.');
define("CENTINEL_ERROR_CODE_8000", "8000");
define("CENTINEL_ERROR_CODE_8000_DESC", "Protokoll nicht erkannt, muss http:// oder https:// sein.");
define("CENTINEL_ERROR_CODE_8010", "8010");
define("CENTINEL_ERROR_CODE_8010_DESC", "kann nicht mit dem MAPS Server kommunizieren");
define("CENTINEL_ERROR_CODE_8020", "8020");
define("CENTINEL_ERROR_CODE_8020_DESC", "Fehler beim Parsen der XML Antwort");
define("CENTINEL_ERROR_CODE_8030", "8030");
define("CENTINEL_ERROR_CODE_8030_DESC", "Timeout bei der Kommunikation aufgetreten");
define("CENTINEL_ERROR_CODE_1001", "1001");
define("CENTINEL_ERROR_CODE_1001_DESC", "Account Konfigurationsproblem mit Cardinal Centinel. Bitte wenden Sie sich umgehend an Ihren Cardinalvertreter unter implement@cardinalcommerce.com. Ihre Transaktionen werden nicht durch eine Rückbuchungspflicht geschützt, bis dieses Problem gelöst ist. Es gibt 3 Schritte, um Ihren Cardinal 3D-Secure-Dienst richtig zu konfigurieren: 1. Login über die Kardinal-Händler-Admin-URL, die in Ihrem Willkommenspaket enthalten ist (NICHT die Test-URL), und akzeptieren der Lizenzvereinbarung. 2. Legen Sie ein Transaktionspasswort fest. 3. Kopieren Sie Ihre Cardinal-Händler-ID und Ihr Cardinal-Transaktionspasswort in Ihr Zen Cart Braintree Modul.");
define("CENTINEL_ERROR_CODE_4243", "4243");
define("CENTINEL_ERROR_CODE_4243_DESC", "Account Konfigurationsproblem mit Cardinal Centinel. Bitte wenden Sie sich umgehend an Ihren Cardinalvertreter unter implement@cardinalcommerce.com und teilen Sie ihm mit, dass Sie die Fehlernummer 4243 erhalten, wenn Sie versuchen, 3D Secure mit Ihrer Zen Cart-Site und Ihrem Braintree-Account zu verwenden, und dass Sie das Prozessormodul in Ihrem Account aktiviert haben müssen. Ihre Transaktionen werden erst dann durch eine Rückbuchungspflicht geschützt, wenn dieses Problem behoben ist.");

// BRAINTREE ERROR CODES
define('BRAINTREE_ERROR_CODE_2000', 'Ihre Bank ist nicht bereit, die Transaktion anzunehmen. Es hat keine Zahlung stattgefunden. Bitte wenden Sie sich an Ihre Bank.');
define('BRAINTREE_ERROR_CODE_2001', 'Unzureichendes Guthaben');
define('BRAINTREE_ERROR_CODE_2002', 'Limit überschritten');
define('BRAINTREE_ERROR_CODE_2003', 'Aktivitätslimit des Karteninhabers überschritten');
define('BRAINTREE_ERROR_CODE_2004', 'Karte abgelaufen');
define('BRAINTREE_ERROR_CODE_2005', 'Ungültige Kreditkartennummer');
define('BRAINTREE_ERROR_CODE_2006', 'Ungültiges Ablaufdatum');
define('BRAINTREE_ERROR_CODE_2007', 'kein Konto');
define('BRAINTREE_ERROR_CODE_2008', 'Card Account Length Error');
define('BRAINTREE_ERROR_CODE_2009', 'keine solche Ausgabestelle bekannt');
define('BRAINTREE_ERROR_CODE_2010', 'Ausgabestelle lehnt CVV ab');
define('BRAINTREE_ERROR_CODE_2011', 'Stimmautorisierung erforderlich');
define('BRAINTREE_ERROR_CODE_2012', 'Abgelehnt - Karte möglicherweise verloren');
define('BRAINTREE_ERROR_CODE_2013', 'Abgelehnt - Karte möglicherweise gestohlen');
define('BRAINTREE_ERROR_CODE_2014', 'Abgelehnt - Betrugsverdacht');
define('BRAINTREE_ERROR_CODE_2015', 'Transaktion nicht erlaubt');
define('BRAINTREE_ERROR_CODE_2016', 'Doppelte Transaktion');
define('BRAINTREE_ERROR_CODE_2017', 'Karteninhaber hat Belastung gestoppt');
define('BRAINTREE_ERROR_CODE_2018', 'Karteninhabe hat alle Belastungen gestoppt');
define('BRAINTREE_ERROR_CODE_2019', 'Ungültige Transaktion');
define('BRAINTREE_ERROR_CODE_2020', 'Verletzung');
define('BRAINTREE_ERROR_CODE_2021', 'Sicherheitsverletzung');
define('BRAINTREE_ERROR_CODE_2022', 'Abgelehnt - Neuer Karteninhaber verfügbar');
define('BRAINTREE_ERROR_CODE_2023', 'Dieses Feature wird nicht unterstützt');
define('BRAINTREE_ERROR_CODE_2024', 'Kartentyp nicht aktiviert');
define('BRAINTREE_ERROR_CODE_2025', 'Set Up Error - Händler');
define('BRAINTREE_ERROR_CODE_2026', 'Ungültige Merchant ID');
define('BRAINTREE_ERROR_CODE_2027', 'Set Up Error - Betrag');
define('BRAINTREE_ERROR_CODE_2028', 'Set Up Error - Hierarchy');
define('BRAINTREE_ERROR_CODE_2029', 'Set Up Error - Karte');
define('BRAINTREE_ERROR_CODE_2030', 'Set Up Error - Terminal');
define('BRAINTREE_ERROR_CODE_2031', 'Verschlüsselungsfehler');
define('BRAINTREE_ERROR_CODE_2032', 'Aufschlag nicht erlaubt');
define('BRAINTREE_ERROR_CODE_2033', 'Inkonsistente Daten');
define('BRAINTREE_ERROR_CODE_2034', 'keine Aktion gesetzt');
define('BRAINTREE_ERROR_CODE_2035', 'Teilweise Genehmigung in Gruppe III Version');
define('BRAINTREE_ERROR_CODE_2036', 'Die Berechtigung zum Stornieren konnte nicht gefunden werden.');
define('BRAINTREE_ERROR_CODE_2037', 'bereits storniert');
define('BRAINTREE_ERROR_CODE_2038', 'Abgelehnt');
define('BRAINTREE_ERROR_CODE_2039', 'Ungültiger Autorisierungscode');
define('BRAINTREE_ERROR_CODE_2040', 'Ungültiger Shop');
define('BRAINTREE_ERROR_CODE_2041', 'Abgelehnt - für Genehmigung anrufen');
define('BRAINTREE_ERROR_CODE_2043', 'Fehler - Nicht noch mal probieren, Ausgabestelle kontaktieren');
define('BRAINTREE_ERROR_CODE_2044', 'Abgelehnt - Ausgabestelle kontaktieren');
define('BRAINTREE_ERROR_CODE_2045', 'Ungültige Händernummer');
define('BRAINTREE_ERROR_CODE_2046', 'Abgelehnt');
define('BRAINTREE_ERROR_CODE_2047', 'Ausgabestelle kontaktieren. Karte einziehen.');
define('BRAINTREE_ERROR_CODE_2048', 'Ungültiger Betrag');
define('BRAINTREE_ERROR_CODE_2049', 'Ungültige SKU Nummer');
define('BRAINTREE_ERROR_CODE_2050', 'Ungültiger Kredit Plan');
define('BRAINTREE_ERROR_CODE_2051', 'Kreditkartennummer passt nicht zur Zahlungsart');
define('BRAINTREE_ERROR_CODE_2052', 'Ungültiger Level III Kauf');
define('BRAINTREE_ERROR_CODE_2053', 'Karte als verloren oder gestohlen gemeldet');
define('BRAINTREE_ERROR_CODE_2054', 'Der Stornobetrag stimmt nicht mit dem Autorisierungsbetrag überein.');
define('BRAINTREE_ERROR_CODE_2055', 'Ungültige Transaktionsbereichsnummer');
define('BRAINTREE_ERROR_CODE_2056', 'Der Transaktionsbetrag überschreitet das Limit');
define('BRAINTREE_ERROR_CODE_2057', 'Emittent oder Karteninhaber hat eine Einschränkung der Karte vorgenommen.');
define('BRAINTREE_ERROR_CODE_2058', 'Händler nicht für MasterCard SecureCode aktiviert.');
define('BRAINTREE_ERROR_CODE_2059', 'Adressüberprüfung fehlgeschlagen');
define('BRAINTREE_ERROR_CODE_2060', 'Adressüberprüfung und Security Code Prüfung fehlgeschlagen');
define('BRAINTREE_ERROR_CODE_2061', 'Ungültige Transakationsdaten');
define('BRAINTREE_ERROR_CODE_2062', 'Ungültiger Steuer Betrag');
define('TEXT_CCVAL_ERROR_INVALID_MONTH_EXPIRY','Ungültiges Kreditkartenablaufdatum Monat: %s');
define('TEXT_CCVAL_ERROR_INVALID_YEAR_EXPIRY','Ungültiges Kreditkartenablaufdatum Jahr: %s');
define('TEXT_PAYMENT_MESSAGE_BRAINTREE_API', 'Zahlungsart: Kreditkarte<br>Wir haben Ihre Zahlug dankend erhalten. Wir bearbeiten Ihre Bestellung umgehend.');