<?php

/**
 * Sinhalese (Sri Lanka) language pack
 * @package sapphire
 * @subpackage i18n
 */

i18n::include_locale_file('sapphire', 'en_US');

global $lang;

if(array_key_exists('si_LK', $lang) && is_array($lang['si_LK'])) {
	$lang['si_LK'] = array_merge($lang['en_US'], $lang['si_LK']);
} else {
	$lang['si_LK'] = $lang['en_US'];
}

$lang['si_LK']['BasicAuth']['ENTERINFO'] = 'නම හා මුර පදය ඇතුල් කරන්න';
$lang['si_LK']['BasicAuth']['ERRORNOTADMIN'] = 'ඵම පරිශීලකයා නියමුවෙකු නොවේ';
$lang['si_LK']['BasicAuth']['ERRORNOTREC'] = 'ඵම නම/මුරපදය හදුනාගත නොහැක';
$lang['si_LK']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT1'] = 'අලුත් මුර පදය';
$lang['si_LK']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT2'] = 'ප්රවිශ්ට වීමට පහත දත්ත යොදාගන්න';
$lang['si_LK']['ChangePasswordEmail.ss']['HELLO'] = 'කොහොමද';
$lang['si_LK']['ComplexTableField.ss']['ADDITEM'] = 'එකතු කරන්න';
$lang['si_LK']['ComplexTableField.ss']['DELETE'] = 'මකන්න';
$lang['si_LK']['ComplexTableField.ss']['DELETEROW'] = 'මෙම තීරය මකන්න';
$lang['si_LK']['ComplexTableField.ss']['EDIT'] = 'සංස්කරනය කරන්න';
$lang['si_LK']['ComplexTableField.ss']['NOITEMSFOUND'] = 'හිස්';
$lang['si_LK']['ComplexTableField.ss']['SHOW'] = 'පෙන්වන්න';
$lang['si_LK']['ComplexTableField.ss']['SORTASC'] = 'ආරෝහන පිළිවෙලට';
$lang['si_LK']['ComplexTableField.ss']['SORTDESC'] = 'ආවරෝහන පිළිවෙලට';
$lang['si_LK']['ComplexTableField_popup.ss']['NEXT'] = 'පසු';
$lang['si_LK']['ComplexTableField_popup.ss']['PREVIOUS'] = 'පෙර';
$lang['si_LK']['Controller']['FILE'] = 'ලිපිය';
$lang['si_LK']['Controller']['IMAGE'] = 'පි0තුර';
$lang['si_LK']['Date']['AGO'] = 'පෙර';
$lang['si_LK']['Date']['AWAY'] = 'ඉවත';
$lang['si_LK']['Date']['DAY'] = 'ඳිනය';
$lang['si_LK']['Date']['DAYS'] = 'ඳින';
$lang['si_LK']['Date']['HOUR'] = 'පැය';
$lang['si_LK']['Date']['HOURS'] = 'පැය';
$lang['si_LK']['Date']['MIN'] = 'විනාඩිය';
$lang['si_LK']['Date']['MINS'] = 'විනාඩි';
$lang['si_LK']['Date']['MONTH'] = 'මාසය';
$lang['si_LK']['Date']['MONTHS'] = 'මාස';
$lang['si_LK']['Date']['SEC'] = 'තත්පරය';
$lang['si_LK']['Date']['SECS'] = 'තත්පර ';
$lang['si_LK']['Date']['YEAR'] = 'අවුරුද්ද';
$lang['si_LK']['Date']['YEARS'] = 'අවුරුදු';
$lang['si_LK']['DateField']['VALIDDATEFORMAT'] = 'නිවැරදි දිනයක් යොදන්න (DD/MM/YYYY)';
$lang['si_LK']['DropdownField']['CHOOSE'] = '(තොරන්න)';
$lang['si_LK']['EmailField']['VALIDATION'] = 'ඊමේල් ලිපිනය ඇතුල් කරන්න';
$lang['si_LK']['ErrorPage']['CODE'] = 'වැරදි කේතය';
$lang['si_LK']['FileIframeField']['NOTEADDFILES'] = 'පලමු වර සේව් කිරීමෙන් අනතුරැව ලිපි ඵකතු කල හැක';
$lang['si_LK']['ForgotPasswordEmail.ss']['HELLO'] = 'කොහොමද';
$lang['si_LK']['Form']['DATENOTSET'] = '(දත්ත පිහිටුවා නැත)';
$lang['si_LK']['Form']['FIELDISREQUIRED'] = '%s අවශ්යයි';
$lang['si_LK']['Form']['LANGAOTHER'] = 'වේනත්‍ භාෂා';
$lang['si_LK']['Form']['LANGAVAIL'] = 'පවතින භාෂා';
$lang['si_LK']['Form']['NOTSET'] = '(පිහිටුවා නැත)';
$lang['si_LK']['Form']['SAVECHANGES'] = 'සේවි කරන්න';
$lang['si_LK']['Form']['VALIDATIONALLDATEVALUES'] = 'ඹබ ඇතුලත් කල දින නිවැරදිදැයි පරීක්ෂා කරන්න';
$lang['si_LK']['Form']['VALIDATIONBANKACC'] = 'වලංගු බැංකු අංකයක් යොදන්න';
$lang['si_LK']['Form']['VALIDATIONCREDITNUMBER'] = 'ඹබගේ %s ක්රෙඩිට් කාඩ් අංකය පරීක්ෂා කරන්න';
$lang['si_LK']['Form']['VALIDATIONFAILED'] = 'වලංගු කිරීම අසාර්තකයි';
$lang['si_LK']['Form']['VALIDATIONNOTUNIQUE'] = 'අගය අද්විතීය නොවේ';
$lang['si_LK']['Form']['VALIDATIONPASSWORDSDONTMATCH'] = 'මුර පද අසමානය';
$lang['si_LK']['Form']['VALIDATIONPASSWORDSNOTEMPTY'] = 'මුර පදය විය නොහැක';
$lang['si_LK']['Form']['VALIDATIONSTRONGPASSWORD'] = 'මුරපදයකට ඵකදු ඩිඡිට් ඵකක්වත් හා ඵකදු අකුරක් ඇතුලත් විය යුතුය';
$lang['si_LK']['Form']['VALIDCURRENCY'] = 'වලංගු මුදල් ඵේකකයක් යොදන්න';
$lang['si_LK']['GhostPage']['NOLINKED'] = 'මෙම පිටුවට බැදීම් නැත';
$lang['si_LK']['GSTNumberField']['VALIDATION'] = 'වලංගු GST අංකයක් යොදන්න';
$lang['si_LK']['HtmlEditorField']['ALTTEXT'] = 'අර්තකතනය';
$lang['si_LK']['HtmlEditorField']['ANCHOR'] = 'නැංගුරමක් යොදන්න/සංස්කරනය කරන්න';
$lang['si_LK']['HtmlEditorField']['BUTTONALIGNCENTER'] = 'මැදට අලයින් කරන්න';
$lang['si_LK']['HtmlEditorField']['BUTTONALIGNJUSTIFY'] = 'සාධාරණීකරනය';
$lang['si_LK']['HtmlEditorField']['BUTTONALIGNLEFT'] = 'වමට අලයින් කරන්න';
$lang['si_LK']['HtmlEditorField']['BUTTONALIGNRIGHT'] = 'දකුනට අලයින් කරන්න';
$lang['si_LK']['HtmlEditorField']['BUTTONBOLD'] = 'තද (Ctrl+B)';
$lang['si_LK']['HtmlEditorField']['BUTTONEDITIMAGE'] = 'පි0තුරය වෙනස්  කරන්න';
$lang['si_LK']['HtmlEditorField']['BUTTONINSERTFLASH'] = 'Flash ඇතුල් කරන්න';
$lang['si_LK']['HtmlEditorField']['BUTTONINSERTIMAGE'] = 'පි0තුරයක් ඇතුල් කරන්න';
$lang['si_LK']['HtmlEditorField']['BUTTONINSERTLINK'] = 'බැදීමක් යොදන්න';
$lang['si_LK']['HtmlEditorField']['BUTTONITALIC'] = 'ඉටලික්ස් (Ctrl + I)';
$lang['si_LK']['HtmlEditorField']['BUTTONREMOVELINK'] = 'බැදීම ගලවන්න';
$lang['si_LK']['HtmlEditorField']['BUTTONUNDERLINE'] = 'යටින් ඉරි (Ctrl + U)';
$lang['si_LK']['HtmlEditorField']['CHARMAP'] = 'ලකුන ඇතුල් කරන්න';
$lang['si_LK']['HtmlEditorField']['COPY'] = 'කොපි (Ctrl+C)';
$lang['si_LK']['HtmlEditorField']['CREATEFOLDER'] = 'ගොනුවක් හදන්න';
$lang['si_LK']['HtmlEditorField']['CSSCLASS'] = 'අලයින්මන්ට් / ස්ටයිල්';
$lang['si_LK']['HtmlEditorField']['CSSCLASSLEFT'] = 'වම් පැත්තට, අකුරැ වටේට යොදන්න';
$lang['si_LK']['HtmlEditorField']['CSSCLASSRIGHT'] = 'දකුනු පැත්තට, අකුරැ වටේට යොදන්න';
$lang['si_LK']['HtmlEditorField']['CUT'] = 'කපන්න (Ctrl+X)';
$lang['si_LK']['HtmlEditorField']['DELETECOL'] = 'පේලිය මකන්න';
$lang['si_LK']['HtmlEditorField']['DELETEROW'] = 'තීරය මකන්න';
$lang['si_LK']['HtmlEditorField']['EDITCODE'] = 'HTML කේත වෙනස්  කරන්න';
$lang['si_LK']['HtmlEditorField']['EMAIL'] = 'ඊමේල් ලිපිනය';
$lang['si_LK']['HtmlEditorField']['FILE'] = 'ලිපිය';
$lang['si_LK']['HtmlEditorField']['FLASH'] = 'Flash ඇතුල් කරන්න';
$lang['si_LK']['HtmlEditorField']['FOLDER'] = 'ගොනුව';
$lang['si_LK']['HtmlEditorField']['FOLDERCANCEL'] = 'අවල0ගු කරන්න';
$lang['si_LK']['HtmlEditorField']['FORMATADDR'] = 'ලිපිනය';
$lang['si_LK']['HtmlEditorField']['FORMATH1'] = 'මාතෘකා 1';
$lang['si_LK']['HtmlEditorField']['FORMATH2'] = 'මාතෘකා 2';
$lang['si_LK']['HtmlEditorField']['FORMATH3'] = 'මාතෘකා 3';
$lang['si_LK']['HtmlEditorField']['FORMATH4'] = 'මාතෘකා 4';
$lang['si_LK']['HtmlEditorField']['FORMATH5'] = 'මාතෘකා 5';
$lang['si_LK']['HtmlEditorField']['FORMATH6'] = 'මාතෘකා 6';
$lang['si_LK']['HtmlEditorField']['FORMATP'] = 'චේදය';
$lang['si_LK']['HtmlEditorField']['HR'] = 'තිරස් තිරස් රේකාවක් ඇතුල් කරන්න';
$lang['si_LK']['HtmlEditorField']['IMAGE'] = 'පි0තුරයක් ඇතුල් කරන්න';
$lang['si_LK']['HtmlEditorField']['IMAGEDIMENSIONS'] = 'මාන';
$lang['si_LK']['HtmlEditorField']['IMAGEHEIGHTPX'] = 'දිග';
$lang['si_LK']['HtmlEditorField']['IMAGEWIDTHPX'] = 'පලල';
$lang['si_LK']['HtmlEditorField']['INDENT'] = 'Indent ඵක වැඩි කරන්න';
$lang['si_LK']['HtmlEditorField']['INSERTCOLAFTER'] = 'පේලියක් පසු ඇතුල් කරන්න';
$lang['si_LK']['HtmlEditorField']['INSERTCOLBEF'] = 'පේලියක් පෙර ඇතුල් කරන්න';
$lang['si_LK']['HtmlEditorField']['INSERTROWAFTER'] = 'තීරයක් පසු ඇතුල් කරන්න';
$lang['si_LK']['HtmlEditorField']['INSERTROWBEF'] = 'තීරයක් පෙර ඇතුල් කරන්න';
$lang['si_LK']['HtmlEditorField']['INSERTTABLE'] = 'වගුවක් ඇතුල් කරන්න';
$lang['si_LK']['HtmlEditorField']['LINK'] = 'පාට කල වචන වලට බැදමක් යොදන්න/සංස්කරනය කරන්න';
$lang['si_LK']['HtmlEditorField']['LINKDESCR'] = 'බැදීම් විස්තරය';
$lang['si_LK']['HtmlEditorField']['LINKEMAIL'] = 'ඊමේල් ලිපිනය';
$lang['si_LK']['HtmlEditorField']['LINKEXTERNAL'] = 'වෙනත් වෙබ් අඩවියක්';
$lang['si_LK']['HtmlEditorField']['LINKFILE'] = 'ලිපියක් බාගත කරන්න';
$lang['si_LK']['HtmlEditorField']['LINKINTERNAL'] = 'අඩවියේ පිටුවක්';
$lang['si_LK']['HtmlEditorField']['LINKOPENNEWWIN'] = 'අලුත් වින්ඩෝවක අරින්නද?';
$lang['si_LK']['HtmlEditorField']['LINKTO'] = 'බැදේ';
$lang['si_LK']['HtmlEditorField']['OK'] = 'හරි';
$lang['si_LK']['HtmlEditorField']['OL'] = 'අ◌කිත ලයිතුව';
$lang['si_LK']['HtmlEditorField']['OUTDENT'] = 'Outdent ඵක අඩු කරන්න';
$lang['si_LK']['HtmlEditorField']['PAGE'] = 'පිටුව';
$lang['si_LK']['HtmlEditorField']['PASTE'] = 'අලවන්න';
$lang['si_LK']['HtmlEditorField']['REDO'] = 'නැවත කරන්න (Ctrl+Y)';
$lang['si_LK']['HtmlEditorField']['UNDO'] = 'තිබුන තැනට (Ctrl+Z)';
$lang['si_LK']['HtmlEditorField']['UNLINK'] = 'බැදීම ඉවත් කරන්න';
$lang['si_LK']['HtmlEditorField']['UPLOAD'] = 'අප්ලෝඩ් කරන්න';
$lang['si_LK']['HtmlEditorField']['URL'] = 'URL';
$lang['si_LK']['HtmlEditorField']['VISUALAID'] = 'මග පෙන්වන ඉරි පෙන්වන්න/හංගන්න';
$lang['si_LK']['ImageField']['NOTEADDIMAGES'] = 'පලමු වර සේව් කිරීමෙන් අනතුරැව පිංතූර ඵකතු කල හැක';
$lang['si_LK']['ImageUplaoder']['ONEFROMFILESTORE'] = 'ලිපි ඵකතුවේ ඵකක් සමග';
$lang['si_LK']['ImageUploader']['ATTACH'] = 'අමුනන්න %s';
$lang['si_LK']['ImageUploader']['DELETE'] = '%s මකන්න';
$lang['si_LK']['ImageUploader']['FROMCOMPUTER'] = 'ඔබේ පරිගනකයෙන්';
$lang['si_LK']['ImageUploader']['FROMFILESTORE'] = 'ලිපි අතරින්';
$lang['si_LK']['ImageUploader']['ONEFROMCOMPUTER'] = 'ඹබගේ පරිගනකයේ ඵකක් සමග';
$lang['si_LK']['ImageUploader']['REALLYDELETE'] = 'මෙය මකන්නද %s?';
$lang['si_LK']['ImageUploader']['REPLACE'] = '%s ප්රතිස්තාපනය කරන්න';
$lang['si_LK']['Image_iframe.ss']['TITLE'] = 'පිංතූර අප්ලෝඩ් කරන Iframe ඵක';
$lang['si_LK']['Member']['ADDRESS'] = 'ලිපිනය';
$lang['si_LK']['Member']['BUTTONCHANGEPASSWORD'] = 'මුර පදය අලුත් කරන්න';
$lang['si_LK']['Member']['BUTTONLOGIN'] = 'ඇතුල්වන්න';
$lang['si_LK']['Member']['BUTTONLOGINOTHER'] = 'වෙනත් නමකින් ඇතුල්වන්න';
$lang['si_LK']['Member']['BUTTONLOSTPASSWORD'] = 'මුර පදය නැති වී ඇත';
$lang['si_LK']['Member']['CONFIRMNEWPASSWORD'] = 'අලුත් මුර පදය හරිද';
$lang['si_LK']['Member']['CONFIRMPASSWORD'] = 'මුර පදය හරිද';
$lang['si_LK']['Member']['CONTACTINFO'] = 'දත්ත';
$lang['si_LK']['Member']['EMAIL'] = 'ඊමේල් ';
$lang['si_LK']['Member']['EMAILPASSWORDAPPENDIX'] = 'මුර පදය අලුත් කරන ලදී. මෙම ඊමේල් ලිපිනය තබාගන්න';
$lang['si_LK']['Member']['EMAILPASSWORDINTRO'] = 'අලුත් මුර පදය';
$lang['si_LK']['Member']['EMAILSIGNUPINTRO1'] = 'ඵකතු වීමට ස්තුති, ඹබේ දත්ත පාවිච්චිය සදහා ලැයිස්තුගත කරන ලදී';
$lang['si_LK']['Member']['EMAILSIGNUPINTRO2'] = 'පහත දත්ත උපයෝගී කිරීමෙන් ඹබට ප්රවිශ්ට විය හැක';
$lang['si_LK']['Member']['EMAILSIGNUPSUBJECT'] = 'ඇතුල්වීමට ස්තුතියි';
$lang['si_LK']['Member']['ERRORNEWPASSWORD'] = 'අලුත් මුරපදය වෙනස් වී ඇත, උත්සාහ කරන්න';
$lang['si_LK']['Member']['ERRORPASSWORDNOTMATCH'] = 'ඔෙබ පිවිසුමි වචනය ෙනාගැලෙපේ, කරැණාකර නැවත උත්සාහ කරන්න';
$lang['si_LK']['Member']['ERRORWRONGCRED'] = 'ඵය නිවැරදි ඊමේල් ලිපිනය හෝ මුරපදය නොවේ. උත්සාහ කරන්න';
$lang['si_LK']['Member']['FIRSTNAME'] = 'මුල් නම';
$lang['si_LK']['Member']['GREETING'] = 'ආයුබෝවන්';
$lang['si_LK']['Member']['INTERFACELANG'] = 'භාෂා';
$lang['si_LK']['Member']['LOGGEDINAS'] = 'ඔබ %s නමින් ඇතුල්වී ඇත';
$lang['si_LK']['Member']['MOBILE'] = 'ජ0ගම දුරකතනය';
$lang['si_LK']['Member']['NAME'] = 'නම';
$lang['si_LK']['Member']['NEWPASSWORD'] = 'අලුත් මුර පදයක්';
$lang['si_LK']['Member']['PASSWORD'] = 'මුර පදය';
$lang['si_LK']['Member']['PASSWORDCHANGED'] = 'මුර පදය අලුත් කරන ලදී, ඔබට ඊමේල් කරන ලදී';
$lang['si_LK']['Member']['PERSONALDETAILS'] = 'පුද්ගලික තොරතුරු';
$lang['si_LK']['Member']['PHONE'] = 'දුරකතනය';
$lang['si_LK']['Member']['REMEMBERME'] = 'මතක‌ තබා ගන්න?';
$lang['si_LK']['Member']['SUBJECTPASSWORDCHANGED'] = 'මුර පදය අලුත් කරන ලදී';
$lang['si_LK']['Member']['SUBJECTPASSWORDRESET'] = 'මුර පදය අලුත් කරන ලිපිනය';
$lang['si_LK']['Member']['SURNAME'] = 'වාසගම';
$lang['si_LK']['Member']['USERDETAILS'] = 'තොරතුරු';
$lang['si_LK']['Member']['VALIDATIONMEMBEREXISTS'] = 'මෙම ඊමේල් ලිපිනය ඇති සාමාජිකයකු ඇත';
$lang['si_LK']['Member']['WELCOMEBACK'] = 'ආයුබෝවන් %s';
$lang['si_LK']['Member']['YOUROLDPASSWORD'] = 'පරන මුර පදය';
$lang['si_LK']['MemberAuthenticator']['TITLE'] = 'ඊමේල් හා මුර පදය';
$lang['si_LK']['NumericField']['VALIDATION'] = '\'%s\' අංකයක් නොවේ, අංක පමනක් බාරගනියි';
$lang['si_LK']['PhoneNumberField']['VALIDATION'] = 'නිවැරදි දුරකතන අ0කයක් යොදන්න';
$lang['si_LK']['RedirectorPage']['HASBEENSETUP'] = 'යොමු කිරීමේ පිටුව කිසිවකට යොමු නොකරයි';
$lang['si_LK']['RedirectorPage']['HEADER'] = 'මෙම පිටුව පරිබෝඡකයන් වෙනත් යොමු කරයි';
$lang['si_LK']['RedirectorPage']['OTHERURL'] = 'වෙනත් වෙබ් අඩවි URL';
$lang['si_LK']['RedirectorPage']['REDIRECTTO'] = 'යොමු කරන්න';
$lang['si_LK']['RedirectorPage']['REDIRECTTOEXTERNAL'] = 'වෙනත් වෙබ් අඩවි';
$lang['si_LK']['RedirectorPage']['REDIRECTTOPAGE'] = 'ඔබේ අඩවියේ පිටුවක්';
$lang['si_LK']['RedirectorPage']['YOURPAGE'] = 'ඔබේ අඩවියේ පිටුවක්';
$lang['si_LK']['Security']['ALREADYLOGGEDIN'] = 'මෙම පිටුවට ඇතුල්වීමට ඹබට අවසර නැත, වෙනත් නමකින් ඇතුල් වීමට පහතින් නම හා මුරපදය යොදන්න';
$lang['si_LK']['Security']['BUTTONSEND'] = 'මුරපදය වෙනස් කරන ලිපිනය ඵවන්න';
$lang['si_LK']['Security']['CHANGEPASSWORDBELOW'] = 'පහතින් මුර පදය වෙනස්  කල හැක';
$lang['si_LK']['Security']['CHANGEPASSWORDHEADER'] = 'මුර පදය අලුත් කරන්න';
$lang['si_LK']['Security']['ENTERNEWPASSWORD'] = 'අලුත් මුර පදය ඇතුල් කරන්න';
$lang['si_LK']['Security']['ERRORPASSWORDPERMISSION'] = 'ඹබගේ මුරපදය වෙනස් කිරීමට ප්රවිශ්ට වන්න';
$lang['si_LK']['Security']['LOGGEDOUT'] = 'ඹබ පිටවී ඇත, නැවත ඇතුල් වීමට ඹබගේ දත්ත යොදන්න';
$lang['si_LK']['Security']['LOSTPASSWORDHEADER'] = 'මුර පදය නැති වී ඇත';
$lang['si_LK']['Security']['NOTERESETPASSWORD'] = 'ඹබට ප්රතිස්තාපනය කල හැකි ලිංක් ඵක ඵවීමට ඹබගේ ඊමේල් ලිපිනය යොදන්න';
$lang['si_LK']['Security']['PASSWORDSENTHEADER'] = 'මුර පදය අලුත් කරන ලිපිනය %s ට යවන ලදී';
$lang['si_LK']['Security']['PASSWORDSENTTEXT'] = 'ස්තුති! මුර පදය අලුත් කරන ලිපිනය %s ට යවන ලදී';
$lang['si_LK']['SimpleImageField']['NOUPLOAD'] = 'පි0තුර අප්ලෝඩ් කර නැත';
$lang['si_LK']['SiteTree']['ACCESSANYONE'] = 'සියලු දෙනා';
$lang['si_LK']['SiteTree']['ACCESSHEADER'] = 'මෙම පිටුව බැලිය හැකි අය';
$lang['si_LK']['SiteTree']['ACCESSLOGGEDIN'] = 'ප්රවිෂ්ටව සිටින පරිශීලකයින්';
$lang['si_LK']['SiteTree']['ACCESSONLYTHESE'] = 'මේ අය පමනක් (ලයිස්තුවෙන් තෝරන්න)';
$lang['si_LK']['SiteTree']['ADDEDTODRAFT'] = 'කටු අඩවියට ඵකතු කරන්න';
$lang['si_LK']['SiteTree']['ALLOWCOMMENTS'] = 'විචාර කිරීමට හැක';
$lang['si_LK']['SiteTree']['APPEARSVIRTUALPAGES'] = 'මෙම අන්තර්ගතය %s කොටසේ  මනඃකල්පිත පිටු වල ඇත';
$lang['si_LK']['SiteTree']['BUTTONCANCELDRAFT'] = 'කටු වෙනස් කිරීම් අවලංගු කරන්න';
$lang['si_LK']['SiteTree']['BUTTONCANCELDRAFTDESC'] = 'කටු සටහන මකා, දැනට ප්රසිද්ධ පිටුවට ඵකතු කරන්න';
$lang['si_LK']['SiteTree']['BUTTONSAVEPUBLISH'] = 'සේව් කර ප්රසිද්ධ කරන්න';
$lang['si_LK']['SiteTree']['BUTTONUNPUBLISH'] = 'අප්රසිද්ධ කරන්න';
$lang['si_LK']['SiteTree']['BUTTONUNPUBLISHDESC'] = 'මෙම පිටුව ප්රසිද්ධ කල අඩවියෙන් ගලවන්න';
$lang['si_LK']['SiteTree']['EDITANYONE'] = 'CMS ඵකට ඇතුල් විය හැකි සියල්ලන්ටම';
$lang['si_LK']['SiteTree']['EDITHEADER'] = 'CMS ඵක සංස්කරනය කල හැක්කේ කාහටද?';
$lang['si_LK']['SiteTree']['EDITONLYTHESE'] = 'මෙම අයට පමනක් (ලැයිස්තුවෙන් තෝරන්න)';
$lang['si_LK']['SiteTree']['GROUP'] = 'කඩාන්යම';
$lang['si_LK']['SiteTree']['HASBROKENLINKS'] = 'මෙම පිටුවට කැඩුනු බැදීම් ඇත';
$lang['si_LK']['SiteTree']['HOMEPAGEFORDOMAIN'] = 'වසම';
$lang['si_LK']['SiteTree']['HTMLEDITORTITLE'] = 'අන්තර්ගතය';
$lang['si_LK']['SiteTree']['LINKSALREADYUNIQUE'] = '%s දැනටමත් අද්විතීයයි';
$lang['si_LK']['SiteTree']['LINKSCHANGEDTO'] = 'වෙනස් කරන ලදී %s -> %s';
$lang['si_LK']['SiteTree']['MENUTITLE'] = 'සංක්රමන ලේබලය';
$lang['si_LK']['SiteTree']['METAADVANCEDHEADER'] = 'සංකීර්න තේරීම්';
$lang['si_LK']['SiteTree']['METADESC'] = 'අර්තකතනය';
$lang['si_LK']['SiteTree']['METAEXTRA'] = 'සැකසූ මෙටා ටැග්';
$lang['si_LK']['SiteTree']['METAHEADER'] = 'සර්ච් ඵන්ඡින් මෙටා ටැග්';
$lang['si_LK']['SiteTree']['METAKEYWORDS'] = 'යතුරැ';
$lang['si_LK']['SiteTree']['METANOTEPRIORITY'] = '(%s) පිටුව සදහා Google Sitemap අතින්  මුලිකත්වය යොදන්න';
$lang['si_LK']['SiteTree']['METAPAGEPRIO'] = 'පිටු වැදගත්කම';
$lang['si_LK']['SiteTree']['METATITLE'] = 'මාතෘකා';
$lang['si_LK']['SiteTree']['MODIFIEDONDRAFT'] = 'කටු අඩවියේ වෙනස් කරන ලදී';
$lang['si_LK']['SiteTree']['NOBACKLINKS'] = 'මෙම පිටුව පිටු කිසිවක් හා නොබැදේ';
$lang['si_LK']['SiteTree']['NOTEUSEASHOMEPAGE'] = 'ෙමය ප්රධාන පිටුව ලෙස පහත වසමයන්ට යොදන්න. (වසමවල් කොමාවකින් වෙන් කරන්න)';
$lang['si_LK']['SiteTree']['PAGESLINKING'] = 'පහත පිටු මෙම පිටුව හා බෑදේ';
$lang['si_LK']['SiteTree']['PAGETITLE'] = 'පිටු නම';
$lang['si_LK']['SiteTree']['PAGETYPE'] = 'පිටු වර්ගය';
$lang['si_LK']['SiteTree']['PRIORITYLEASTIMPORTANT'] = 'වැදගත්';
$lang['si_LK']['SiteTree']['PRIORITYMOSTIMPORTANT'] = ' බොහෝ වැදගත්';
$lang['si_LK']['SiteTree']['PRIORITYNOTINDEXED'] = 'ගොනූ කර නැත';
$lang['si_LK']['SiteTree']['REMOVEDFROMDRAFT'] = 'කටු අඩවියෙන් ගලවන්න';
$lang['si_LK']['SiteTree']['SHOWINMENUS'] = 'මෙනුවේ පෙන්වන්නද?';
$lang['si_LK']['SiteTree']['SHOWINSEARCH'] = 'සර්ච් ඵකේ පෙන්වන්නද?';
$lang['si_LK']['SiteTree']['TABACCESS'] = 'පරිශීලනය';
$lang['si_LK']['SiteTree']['TABBACKLINKS'] = 'පසුබැදීම්';
$lang['si_LK']['SiteTree']['TABBEHAVIOUR'] = 'හැසිරීම';
$lang['si_LK']['SiteTree']['TABCONTENT'] = 'අන්තර්ගතය';
$lang['si_LK']['SiteTree']['TABMAIN'] = 'ප්‍රදාන';
$lang['si_LK']['SiteTree']['TABMETA'] = 'මෙටා දත්ත';
$lang['si_LK']['SiteTree']['TABREPORTS'] = 'වාර්තා';
$lang['si_LK']['SiteTree']['TOPLEVEL'] = 'අන්ර්ගතය';
$lang['si_LK']['SiteTree']['URL'] = 'URL';
$lang['si_LK']['SiteTree']['VALIDATIONURLSEGMENT1'] = 'වෙනත් පිටුවක් ඵම URL ඵක භාවිතා කරයි, URL ඵකක් අද්විතීය විය යුතුයි';
$lang['si_LK']['SiteTree']['VALIDATIONURLSEGMENT2'] = 'URL සදහා අකුරැ, අංක හා හයිපfන් පමණක් වලංගු වෙයි';
$lang['si_LK']['TableField']['ISREQUIRED'] = 'මෙහි %s මෙය %s අවශ්යයි';
$lang['si_LK']['TableField.ss']['CSVEXPORT'] = 'CVS ඵකකට ගන්න';
$lang['si_LK']['ToggleCompositeField.ss']['HIDE'] = 'සගවන්න';
$lang['si_LK']['ToggleCompositeField.ss']['SHOW'] = 'පෙන්වන්න';
$lang['si_LK']['ToggleField']['LESS'] = 'අඩු';
$lang['si_LK']['ToggleField']['MORE'] = 'වැඩි';
$lang['si_LK']['TypeDropdown']['NONE'] = 'නැත';
$lang['si_LK']['VirtualPage']['CHOOSE'] = 'බැදීමට පිටුවක් තෝරන්න';
$lang['si_LK']['VirtualPage']['EDITCONTENT'] = 'සංස්කරනය කරන්න මෙතන ඹබන්න';
$lang['si_LK']['VirtualPage']['HEADER'] = 'මෙය මනඃකල්පිත පිටුවකි';

?>