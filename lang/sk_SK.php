<?php

/**
 * Slovak (Slovakia) language pack
 * @package sapphire
 * @subpackage i18n
 */

i18n::include_locale_file('sapphire', 'en_US');

global $lang;

if(array_key_exists('sk_SK', $lang) && is_array($lang['sk_SK'])) {
	$lang['sk_SK'] = array_merge($lang['en_US'], $lang['sk_SK']);
} else {
	$lang['sk_SK'] = $lang['en_US'];
}

$lang['sk_SK']['BasicAuth']['ENTERINFO'] = 'Prosím zadajte používateľské meno a heslo.';
$lang['sk_SK']['BasicAuth']['ERRORNOTADMIN'] = 'Tento používateľ nie je administrátor.';
$lang['sk_SK']['BasicAuth']['ERRORNOTREC'] = 'Toto používateľské meno / heslo nebolo rozpoznané';
$lang['sk_SK']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT1'] = 'Vaše heslo bolo zmenené pre';
$lang['sk_SK']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT2'] = 'Teraz môžete použiť nasledujúce prihlasovacie údaje na prihlásenie:';
$lang['sk_SK']['ChangePasswordEmail.ss']['HELLO'] = 'Dobrý deň';
$lang['sk_SK']['ComplexTableField.ss']['ADDITEM'] = 'Pridať';
$lang['sk_SK']['ComplexTableField.ss']['DELETE'] = 'odstrániť';
$lang['sk_SK']['ComplexTableField.ss']['DELETEROW'] = 'Odstrániť tento riadok';
$lang['sk_SK']['ComplexTableField.ss']['EDIT'] = 'upraviť';
$lang['sk_SK']['ComplexTableField.ss']['NOITEMSFOUND'] = 'Žiadne položky nenájdené';
$lang['sk_SK']['ComplexTableField.ss']['SHOW'] = 'zobraziť';
$lang['sk_SK']['ComplexTableField.ss']['SORTASC'] = 'Zoradiť vzostupne';
$lang['sk_SK']['ComplexTableField.ss']['SORTDESC'] = 'Zoradiť zostupne';
$lang['sk_SK']['ComplexTableField_popup.ss']['NEXT'] = 'Ďalší';
$lang['sk_SK']['ComplexTableField_popup.ss']['PREVIOUS'] = 'Predchádzajúci';
$lang['sk_SK']['ContentController']['DRAFT_SITE_ACCESS_RESTRICTION'] = 'Pre zobrazenie návrhov alebo archivovaného obsahu sa musíte prihlásiť so svojím CMS heslom. <a href="%s">Pre návrat na publikovaný web kliknite Tu.</a>';
$lang['sk_SK']['Controller']['FILE'] = 'Súbor';
$lang['sk_SK']['Controller']['IMAGE'] = 'Obrázok';
$lang['sk_SK']['Date']['AGO'] = 'pred';
$lang['sk_SK']['Date']['AWAY'] = 'preč';
$lang['sk_SK']['Date']['DAY'] = 'deň';
$lang['sk_SK']['Date']['DAYS'] = 'dni';
$lang['sk_SK']['Date']['HOUR'] = 'hodina';
$lang['sk_SK']['Date']['HOURS'] = 'hodiny';
$lang['sk_SK']['Date']['MIN'] = 'minúta';
$lang['sk_SK']['Date']['MINS'] = 'minúty';
$lang['sk_SK']['Date']['MONTH'] = 'mesiac';
$lang['sk_SK']['Date']['MONTHS'] = 'mesiace';
$lang['sk_SK']['Date']['SEC'] = 'sekunda';
$lang['sk_SK']['Date']['SECS'] = 'sekundy';
$lang['sk_SK']['Date']['YEAR'] = 'rok';
$lang['sk_SK']['Date']['YEARS'] = 'roky';
$lang['sk_SK']['DateField']['VALIDDATEFORMAT'] = 'Prosím zadajte platný formát dátumu (DD/MM/RRRR).';
$lang['sk_SK']['DropdownField']['CHOOSE'] = '(Vyberte si)';
$lang['sk_SK']['EmailField']['VALIDATION'] = 'Prosím zadajte e-mailovú adresu.';
$lang['sk_SK']['ErrorPage']['CODE'] = 'Chybový kód';
$lang['sk_SK']['FileIframeField']['NOTEADDFILES'] = 'Súbory môžete pridávať až po prvom uložení.';
$lang['sk_SK']['ForgotPasswordEmail.ss']['HELLO'] = 'Dobrý deň';
$lang['sk_SK']['Form']['DATENOTSET'] = '(Nebol nastavený žiaden dátum)';
$lang['sk_SK']['Form']['FIELDISREQUIRED'] = '%s je požadované';
$lang['sk_SK']['Form']['LANGAOTHER'] = 'Ostatné jazyky';
$lang['sk_SK']['Form']['LANGAVAIL'] = 'Dostupné jazyky';
$lang['sk_SK']['Form']['NOTSET'] = '(nenastavené)';
$lang['sk_SK']['Form']['SAVECHANGES'] = 'Uložiť zmeny';
$lang['sk_SK']['Form']['VALIDATIONALLDATEVALUES'] = 'Prosím, uistite sa, že ste zadali  všetky dátumy';
$lang['sk_SK']['Form']['VALIDATIONBANKACC'] = 'Prosím zadajte platné bankové číslo';
$lang['sk_SK']['Form']['VALIDATIONCREDITNUMBER'] = 'Prosím uistite sa, že jste zadali %s číslo kreditnej karty správne.';
$lang['sk_SK']['Form']['VALIDATIONFAILED'] = 'Kontrola platnosti zlyhala';
$lang['sk_SK']['Form']['VALIDATIONNOTUNIQUE'] = 'Zadaná hodnota nie je unikátna';
$lang['sk_SK']['Form']['VALIDATIONPASSWORDSDONTMATCH'] = 'Hesla sa nezhodujú';
$lang['sk_SK']['Form']['VALIDATIONPASSWORDSNOTEMPTY'] = 'Heslá nemôžu byť prázdne';
$lang['sk_SK']['Form']['VALIDATIONSTRONGPASSWORD'] = 'Heslá musia obsahovať aspoň jednu číslicu a jedno písmeno.';
$lang['sk_SK']['Form']['VALIDCURRENCY'] = 'Prosím zadajte platnú menu.';
$lang['sk_SK']['GhostPage']['NOLINKED'] = 'Na túto tieňovú stránku neodkazuje žiadna stránka.';
$lang['sk_SK']['GSTNumberField']['VALIDATION'] = 'Prosím zadajte platné GTS číslo';
$lang['sk_SK']['HtmlEditorField']['ALTTEXT'] = 'Popis';
$lang['sk_SK']['HtmlEditorField']['ANCHOR'] = 'Vložiť/upraviť ukotvenie';
$lang['sk_SK']['HtmlEditorField']['BULLETLIST'] = 'Zoznam s odrážkami';
$lang['sk_SK']['HtmlEditorField']['BUTTONALIGNCENTER'] = 'Centrovať';
$lang['sk_SK']['HtmlEditorField']['BUTTONALIGNJUSTIFY'] = 'Zarovnať podľa okraja';
$lang['sk_SK']['HtmlEditorField']['BUTTONALIGNLEFT'] = 'Zarovnať vľavo';
$lang['sk_SK']['HtmlEditorField']['BUTTONALIGNRIGHT'] = 'Zarovnať doprava';
$lang['sk_SK']['HtmlEditorField']['BUTTONBOLD'] = 'Tučné (Ctrl+B)';
$lang['sk_SK']['HtmlEditorField']['BUTTONEDITIMAGE'] = 'Upraviť obrázok';
$lang['sk_SK']['HtmlEditorField']['BUTTONINSERTFLASH'] = 'Vložiť Flash';
$lang['sk_SK']['HtmlEditorField']['BUTTONINSERTIMAGE'] = 'Vložiť obrázok';
$lang['sk_SK']['HtmlEditorField']['BUTTONINSERTLINK'] = 'Vložiť odkaz';
$lang['sk_SK']['HtmlEditorField']['BUTTONITALIC'] = 'Kurzíva (Ctrl+I)';
$lang['sk_SK']['HtmlEditorField']['BUTTONREMOVELINK'] = 'Odstrániť odkaz';
$lang['sk_SK']['HtmlEditorField']['BUTTONSTRIKE'] = 'preškrtnúť';
$lang['sk_SK']['HtmlEditorField']['BUTTONUNDERLINE'] = 'Podčiarknuté (Ctrl+U)';
$lang['sk_SK']['HtmlEditorField']['CHARMAP'] = 'Vložiť symbol';
$lang['sk_SK']['HtmlEditorField']['COPY'] = 'Kopírovať (Ctrl+C)';
$lang['sk_SK']['HtmlEditorField']['CREATEFOLDER'] = 'vytvoriť adresár';
$lang['sk_SK']['HtmlEditorField']['CSSCLASS'] = 'Zarovnanie / štýl';
$lang['sk_SK']['HtmlEditorField']['CSSCLASSCENTER'] = 'Centrovať samotné.';
$lang['sk_SK']['HtmlEditorField']['CSSCLASSLEFT'] = 'Vľavo, s obtekajúcim textom.';
$lang['sk_SK']['HtmlEditorField']['CSSCLASSRIGHT'] = 'Vpravo, s obtekajúcim textom.';
$lang['sk_SK']['HtmlEditorField']['CUT'] = 'Vystrihnúť (Ctrl+X)';
$lang['sk_SK']['HtmlEditorField']['DELETECOL'] = 'Odstrániť stĺpec';
$lang['sk_SK']['HtmlEditorField']['DELETEROW'] = 'Odstrániť riadok';
$lang['sk_SK']['HtmlEditorField']['EDITCODE'] = 'Upraviť HTML kód';
$lang['sk_SK']['HtmlEditorField']['EMAIL'] = 'E-mailovú adresu';
$lang['sk_SK']['HtmlEditorField']['FILE'] = 'Súbor';
$lang['sk_SK']['HtmlEditorField']['FLASH'] = 'Vložiť flash';
$lang['sk_SK']['HtmlEditorField']['FOLDER'] = 'Adresár';
$lang['sk_SK']['HtmlEditorField']['FOLDERCANCEL'] = 'zrušiť';
$lang['sk_SK']['HtmlEditorField']['FORMATADDR'] = 'Adresa';
$lang['sk_SK']['HtmlEditorField']['FORMATH1'] = 'Nadpis 1';
$lang['sk_SK']['HtmlEditorField']['FORMATH2'] = 'Nadpis 2';
$lang['sk_SK']['HtmlEditorField']['FORMATH3'] = 'Nadpis 3';
$lang['sk_SK']['HtmlEditorField']['FORMATH4'] = 'Nadpis 4';
$lang['sk_SK']['HtmlEditorField']['FORMATH5'] = 'Nadpis 5';
$lang['sk_SK']['HtmlEditorField']['FORMATH6'] = 'Nadpis 6';
$lang['sk_SK']['HtmlEditorField']['FORMATP'] = 'Odstavec';
$lang['sk_SK']['HtmlEditorField']['HR'] = 'Vložiť vodorovnú čiaru';
$lang['sk_SK']['HtmlEditorField']['IMAGE'] = 'Vložiť obrázok';
$lang['sk_SK']['HtmlEditorField']['IMAGEDIMENSIONS'] = 'Rozmery';
$lang['sk_SK']['HtmlEditorField']['IMAGEHEIGHTPX'] = 'Výška';
$lang['sk_SK']['HtmlEditorField']['IMAGEWIDTHPX'] = 'Šírka';
$lang['sk_SK']['HtmlEditorField']['INDENT'] = 'Zväčšiť odsadenie';
$lang['sk_SK']['HtmlEditorField']['INSERTCOLAFTER'] = 'Vložiť stĺpec za';
$lang['sk_SK']['HtmlEditorField']['INSERTCOLBEF'] = 'Vložiť stĺpec pred';
$lang['sk_SK']['HtmlEditorField']['INSERTROWAFTER'] = 'Vložiť riadok za';
$lang['sk_SK']['HtmlEditorField']['INSERTROWBEF'] = 'Vložiť riadok pred';
$lang['sk_SK']['HtmlEditorField']['INSERTTABLE'] = 'Vložiť tabuľku';
$lang['sk_SK']['HtmlEditorField']['LINK'] = 'Vložiť/upraviť odkaz na zvýraznený text';
$lang['sk_SK']['HtmlEditorField']['LINKDESCR'] = 'Popis odkazu';
$lang['sk_SK']['HtmlEditorField']['LINKEMAIL'] = 'E-mailovú adresu';
$lang['sk_SK']['HtmlEditorField']['LINKEXTERNAL'] = 'Inú webstránku';
$lang['sk_SK']['HtmlEditorField']['LINKFILE'] = 'Stiahnutie súboru';
$lang['sk_SK']['HtmlEditorField']['LINKINTERNAL'] = 'Stránku na vlastnom webe';
$lang['sk_SK']['HtmlEditorField']['LINKOPENNEWWIN'] = 'Otvoriť odkaz v novom okne?';
$lang['sk_SK']['HtmlEditorField']['LINKTO'] = 'Odkázať na';
$lang['sk_SK']['HtmlEditorField']['OK'] = 'ok';
$lang['sk_SK']['HtmlEditorField']['OL'] = 'Číslovaný zoznam';
$lang['sk_SK']['HtmlEditorField']['OUTDENT'] = 'Zmenšiť odsadenie';
$lang['sk_SK']['HtmlEditorField']['PAGE'] = 'Stránku';
$lang['sk_SK']['HtmlEditorField']['PASTE'] = 'Vložiť (Ctrl+V)';
$lang['sk_SK']['HtmlEditorField']['REDO'] = 'Znovu (Ctrl+Y)';
$lang['sk_SK']['HtmlEditorField']['UNDO'] = 'Späť (Ctrl+Z)';
$lang['sk_SK']['HtmlEditorField']['UNLINK'] = 'Odstrániť odkaz';
$lang['sk_SK']['HtmlEditorField']['UPLOAD'] = 'nahrať';
$lang['sk_SK']['HtmlEditorField']['URL'] = 'URL';
$lang['sk_SK']['HtmlEditorField']['VISUALAID'] = 'Zobraziť/skryť pomocné čiary';
$lang['sk_SK']['ImageField']['NOTEADDIMAGES'] = 'Obrázky môžete pridávať až po prvom uložení.';
$lang['sk_SK']['ImageUplaoder']['ONEFROMFILESTORE'] = 'Jedným z úložiska súborov';
$lang['sk_SK']['ImageUploader']['ATTACH'] = 'Pripojiť %s';
$lang['sk_SK']['ImageUploader']['DELETE'] = 'Odstrániť %s';
$lang['sk_SK']['ImageUploader']['FROMCOMPUTER'] = 'Z Vášho počítača';
$lang['sk_SK']['ImageUploader']['FROMFILESTORE'] = 'Z úložiska súborov';
$lang['sk_SK']['ImageUploader']['ONEFROMCOMPUTER'] = 'S jedným z Vášho počítača';
$lang['sk_SK']['ImageUploader']['REALLYDELETE'] = 'Naozaj chcete odstrániť tento %s?';
$lang['sk_SK']['ImageUploader']['REPLACE'] = 'Nahradiť %s';
$lang['sk_SK']['Image_iframe.ss']['TITLE'] = 'Rámec pre nahranie obrázku';
$lang['sk_SK']['Member']['ADDRESS'] = 'Adresa';
$lang['sk_SK']['Member']['BUTTONCHANGEPASSWORD'] = 'Zmeniť heslo';
$lang['sk_SK']['Member']['BUTTONLOGIN'] = 'Prihlásiť sa';
$lang['sk_SK']['Member']['BUTTONLOGINOTHER'] = 'Prihlásiť sa ako niekto iný';
$lang['sk_SK']['Member']['BUTTONLOSTPASSWORD'] = 'Stratil som svoje heslo';
$lang['sk_SK']['Member']['CONFIRMNEWPASSWORD'] = 'Potvrďte nové heslo';
$lang['sk_SK']['Member']['CONFIRMPASSWORD'] = 'Potvrďte heslo';
$lang['sk_SK']['Member']['CONTACTINFO'] = 'Kontaktné informácie';
$lang['sk_SK']['Member']['EMAIL'] = 'E-mail';
$lang['sk_SK']['Member']['EMAILPASSWORDAPPENDIX'] = 'Vaše heslo bolo zmenené. Prosím uschovajte si tento e-mail.';
$lang['sk_SK']['Member']['EMAILPASSWORDINTRO'] = 'Tu je Vaše nové heslo';
$lang['sk_SK']['Member']['EMAILSIGNUPINTRO1'] = 'Ďakujeme za registráciu. Vaše detaily sú zobrazené nižšie.';
$lang['sk_SK']['Member']['EMAILSIGNUPINTRO2'] = 'Môžete sa prihlásiť použitím prihlasovacích údajov zobrazených nižšie';
$lang['sk_SK']['Member']['EMAILSIGNUPSUBJECT'] = 'Ďakujeme za registráciu';
$lang['sk_SK']['Member']['ERRORNEWPASSWORD'] = 'Zadali ste rozdielne nové heslo, skúste to znovu';
$lang['sk_SK']['Member']['ERRORPASSWORDNOTMATCH'] = 'Vaše súčasné heslo nie je správne, prosím skúste to znovu';
$lang['sk_SK']['Member']['ERRORWRONGCRED'] = 'Toto nevyzerá ako správna e-mailová adresa alebo heslo. Prosím skúste to znovu.';
$lang['sk_SK']['Member']['FIRSTNAME'] = 'Krstné meno';
$lang['sk_SK']['Member']['GREETING'] = 'Vitajte';
$lang['sk_SK']['Member']['INTERFACELANG'] = 'Jazyk rozhrania';
$lang['sk_SK']['Member']['LOGGEDINAS'] = 'Ste prihlásený ako %s.';
$lang['sk_SK']['Member']['MOBILE'] = 'Mobilný telefón';
$lang['sk_SK']['Member']['NAME'] = 'Meno';
$lang['sk_SK']['Member']['NEWPASSWORD'] = 'Nové heslo';
$lang['sk_SK']['Member']['PASSWORD'] = 'Heslo';
$lang['sk_SK']['Member']['PASSWORDCHANGED'] = 'Vaše heslo bolo zmenené a poslané na Váš e-mail.';
$lang['sk_SK']['Member']['PERSONALDETAILS'] = 'Osobné detaily';
$lang['sk_SK']['Member']['PHONE'] = 'Telefón';
$lang['sk_SK']['Member']['REMEMBERME'] = 'Pamätať si ma nabudúce?';
$lang['sk_SK']['Member']['SUBJECTPASSWORDCHANGED'] = 'Vaše heslo bolo zmenené';
$lang['sk_SK']['Member']['SUBJECTPASSWORDRESET'] = 'Odkaz na resetovanie hesla';
$lang['sk_SK']['Member']['SURNAME'] = 'Priezvisko';
$lang['sk_SK']['Member']['USERDETAILS'] = 'Používateľské detaily';
$lang['sk_SK']['Member']['VALIDATIONMEMBEREXISTS'] = 'Člen s takýmto e-mailom už existuje';
$lang['sk_SK']['Member']['WELCOMEBACK'] = 'Vitajte späť, %s';
$lang['sk_SK']['Member']['YOUROLDPASSWORD'] = 'Vaše staré heslo';
$lang['sk_SK']['MemberAuthenticator']['TITLE'] = 'E-mail &amp; Heslo';
$lang['sk_SK']['NumericField']['VALIDATION'] = '\'%s\' nie je číslo. V tomto poli môžu byť zadané iba čísla';
$lang['sk_SK']['PhoneNumberField']['VALIDATION'] = 'Prosím zadajte platné telefónne číslo';
$lang['sk_SK']['RedirectorPage']['HASBEENSETUP'] = 'Stránka na presmerovanie bola nastavená bez cieľa.';
$lang['sk_SK']['RedirectorPage']['HEADER'] = 'Táto stránka presmeruje používateľov na inú stránku';
$lang['sk_SK']['RedirectorPage']['OTHERURL'] = 'Inú webovú URL adresu.';
$lang['sk_SK']['RedirectorPage']['REDIRECTTO'] = 'Presmerovať na';
$lang['sk_SK']['RedirectorPage']['REDIRECTTOEXTERNAL'] = 'Inú webovú stránku';
$lang['sk_SK']['RedirectorPage']['REDIRECTTOPAGE'] = 'Stránku na Vašom webe';
$lang['sk_SK']['RedirectorPage']['YOURPAGE'] = 'Stránku na Vašom webe';
$lang['sk_SK']['Security']['ALREADYLOGGEDIN'] = 'K tejto stránke nemáte prístup. Ak máte iný účet, ktorý k nej má prístup, môžete sa prihlásiť.';
$lang['sk_SK']['Security']['BUTTONSEND'] = 'Pošlite mi odkaz na resetovanie hesla';
$lang['sk_SK']['Security']['CHANGEPASSWORDBELOW'] = 'Svoje heslo si môžete zmeniť nižšie.';
$lang['sk_SK']['Security']['CHANGEPASSWORDHEADER'] = 'Zmeniť heslo';
$lang['sk_SK']['Security']['ENTERNEWPASSWORD'] = 'Prosím zadajte nové heslo.';
$lang['sk_SK']['Security']['ERRORPASSWORDPERMISSION'] = 'Pre zmenu hesla musíte byť prihlásený!';
$lang['sk_SK']['Security']['LOGGEDOUT'] = 'Boli ste odhlásený. Ak sa chcete znovu prihlásiť, zadajte svoje prihlasovacie údaje.';
$lang['sk_SK']['Security']['LOSTPASSWORDHEADER'] = 'Stratené heslo';
$lang['sk_SK']['Security']['NOTEPAGESECURED'] = 'Táto stránka je zabezpečená. Zadajte svoje prihlasovacie údaje a my Vám zároveň pošleme práva.';
$lang['sk_SK']['Security']['NOTERESETPASSWORD'] = 'Zadajte svoju e-mailovú adresu a my Vám pošleme odkaz na resetovanie hesla';
$lang['sk_SK']['Security']['PASSWORDSENTHEADER'] = 'Odkaz na resetovanie hesla odoslaný pre \'%s\'';
$lang['sk_SK']['Security']['PASSWORDSENTTEXT'] = 'Ďakujeme! Odkaz na resetovanie hesla bol poslaný pre \'%s\'.';
$lang['sk_SK']['SimpleImageField']['NOUPLOAD'] = 'Nebol nahraný žiaden obrázok';
$lang['sk_SK']['SiteTree']['ACCESSANYONE'] = 'Ktokoľvek';
$lang['sk_SK']['SiteTree']['ACCESSHEADER'] = 'Kto si môže prezerať túto stránku?';
$lang['sk_SK']['SiteTree']['ACCESSLOGGEDIN'] = 'Prihlásení používatelia';
$lang['sk_SK']['SiteTree']['ACCESSONLYTHESE'] = 'Iba títo ľudia (vyberte zo zoznamu)';
$lang['sk_SK']['SiteTree']['ADDEDTODRAFT'] = 'Pridané k návrhom';
$lang['sk_SK']['SiteTree']['ALLOWCOMMENTS'] = 'Povoliť komentáre na tejto stránke?';
$lang['sk_SK']['SiteTree']['APPEARSVIRTUALPAGES'] = 'Tento obsah sa taktiež zobrazí na virtuálnych stránkach v sekcii %s.';
$lang['sk_SK']['SiteTree']['BUTTONCANCELDRAFT'] = 'Zrušiť zmeny v návrhu';
$lang['sk_SK']['SiteTree']['BUTTONCANCELDRAFTDESC'] = 'Vymazať návrh a vrátiť sa k aktuálne zverejnenej stránke';
$lang['sk_SK']['SiteTree']['BUTTONSAVEPUBLISH'] = 'Uložiť a publikovať';
$lang['sk_SK']['SiteTree']['BUTTONUNPUBLISH'] = 'Nepublikovať';
$lang['sk_SK']['SiteTree']['BUTTONUNPUBLISHDESC'] = 'Odstrániť túto stránku z publikovaných na webe';
$lang['sk_SK']['SiteTree']['EDITANYONE'] = 'Ktokoľvek kto sa môže prihlásiť do CMS';
$lang['sk_SK']['SiteTree']['EDITHEADER'] = 'Kto to môže editovať pomocou CMS?';
$lang['sk_SK']['SiteTree']['EDITONLYTHESE'] = 'Iba títo ľudia (vyberte zo zoznamu)';
$lang['sk_SK']['SiteTree']['GROUP'] = 'Skupina';
$lang['sk_SK']['SiteTree']['HASBROKENLINKS'] = 'Táto stránka obsahuje nefunkčné odkazy.';
$lang['sk_SK']['SiteTree']['HOMEPAGEFORDOMAIN'] = 'Domény';
$lang['sk_SK']['SiteTree']['HTMLEDITORTITLE'] = 'Obsah';
$lang['sk_SK']['SiteTree']['LINKSALREADYUNIQUE'] = '%s už je unikátna';
$lang['sk_SK']['SiteTree']['LINKSCHANGEDTO'] = 'zmenené %s -> %s';
$lang['sk_SK']['SiteTree']['MENUTITLE'] = 'Navigačná menovka';
$lang['sk_SK']['SiteTree']['METAADVANCEDHEADER'] = 'Rozšírené možnosti...';
$lang['sk_SK']['SiteTree']['METADESC'] = 'Popis';
$lang['sk_SK']['SiteTree']['METAEXTRA'] = 'Vlastné Meta Tagy';
$lang['sk_SK']['SiteTree']['METAHEADER'] = 'Meta-tagy pre vyhľadávacie nástroje';
$lang['sk_SK']['SiteTree']['METAKEYWORDS'] = 'Kľúčové slová';
$lang['sk_SK']['SiteTree']['METANOTEPRIORITY'] = 'Ručne určiť prioritu Google Sitemaps pre túto stránku (%s)';
$lang['sk_SK']['SiteTree']['METAPAGEPRIO'] = 'Priorita stránky';
$lang['sk_SK']['SiteTree']['METATITLE'] = 'Titulok';
$lang['sk_SK']['SiteTree']['MODIFIEDONDRAFT'] = 'Zmenené v návrhoch';
$lang['sk_SK']['SiteTree']['NOBACKLINKS'] = 'Na túto stránku nevedú žiadne odkazy.';
$lang['sk_SK']['SiteTree']['NOTEUSEASHOMEPAGE'] = 'Použiť túto stránku ako domácu pre nasledujúce domény: (viac domén oddeľte čiarkami)';
$lang['sk_SK']['SiteTree']['PAGESLINKING'] = 'Tieto stránky odkazujú na túto stránku:';
$lang['sk_SK']['SiteTree']['PAGETITLE'] = 'Meno stránky';
$lang['sk_SK']['SiteTree']['PAGETYPE'] = 'Typ stránky';
$lang['sk_SK']['SiteTree']['PRIORITYLEASTIMPORTANT'] = 'Najmenej dôležité';
$lang['sk_SK']['SiteTree']['PRIORITYMOSTIMPORTANT'] = 'Najviac dôležité';
$lang['sk_SK']['SiteTree']['PRIORITYNOTINDEXED'] = 'Nezaindexované';
$lang['sk_SK']['SiteTree']['REMOVEDFROMDRAFT'] = 'Vymazané z návrhov';
$lang['sk_SK']['SiteTree']['SHOWINMENUS'] = 'Zobrazovať v menu?';
$lang['sk_SK']['SiteTree']['SHOWINSEARCH'] = 'Zobrazovať v hľadaní?';
$lang['sk_SK']['SiteTree']['TABACCESS'] = 'Prístup';
$lang['sk_SK']['SiteTree']['TABBACKLINKS'] = 'Spätné odkazy';
$lang['sk_SK']['SiteTree']['TABBEHAVIOUR'] = 'Správanie';
$lang['sk_SK']['SiteTree']['TABCONTENT'] = 'Obsah';
$lang['sk_SK']['SiteTree']['TABMAIN'] = 'Hlavné';
$lang['sk_SK']['SiteTree']['TABMETA'] = 'Meta-data';
$lang['sk_SK']['SiteTree']['TABREPORTS'] = 'Správy';
$lang['sk_SK']['SiteTree']['TOPLEVEL'] = 'Obsah Webu (Najvyššia úroveň)';
$lang['sk_SK']['SiteTree']['URL'] = 'URL';
$lang['sk_SK']['SiteTree']['VALIDATIONURLSEGMENT1'] = 'Už existuje stránka s danou URL. URL musí byť unikátna pre každú stránku';
$lang['sk_SK']['SiteTree']['VALIDATIONURLSEGMENT2'] = 'URL adresy môžu obsahovať iba písmená bez diakritiky, číslice a spojovníky.';
$lang['sk_SK']['TableField']['ISREQUIRED'] = 'V %s \'%s\' je požadované.';
$lang['sk_SK']['TableField.ss']['CSVEXPORT'] = 'Exportovať do CSV';
$lang['sk_SK']['ToggleCompositeField.ss']['HIDE'] = 'Skryť';
$lang['sk_SK']['ToggleCompositeField.ss']['SHOW'] = 'Zobraziť';
$lang['sk_SK']['ToggleField']['LESS'] = 'menej';
$lang['sk_SK']['ToggleField']['MORE'] = 'viac';
$lang['sk_SK']['TypeDropdown']['NONE'] = 'Žiadny';
$lang['sk_SK']['VirtualPage']['CHOOSE'] = 'Vyberte kam má stránka odkazovať';
$lang['sk_SK']['VirtualPage']['EDITCONTENT'] = 'kliknite tu pre editáciu obsahu';
$lang['sk_SK']['VirtualPage']['HEADER'] = 'Toto je virtuálna stránka';

?>