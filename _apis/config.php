<?php
/** ------------------- */
/**  Oli Configuration  */
/** ------------------- */

/** MySQL Configuration */
$_Oli->setupMySQL('ďąţąβą$€',
	'µ$€яɲąʍ€',
	'ρą$$ώ๏яď',
	'h๏$ţ');

/** Tables Configuration */
$_Oli->setSettingsTables(['settings_apis', 'settings']); // Dans l'ordre de priorité : [1,2,3]
$_Oli->setShortcutLinksTable('shortcut_links');

/** Content Type Configuration */
$_Oli->setDefaultContentType('HTML');

/** Url Configuration */
$_Oli->setCdnUrl($_Oli->getShortcutLink('cdn'));

/** Translations & User Language Configuration */
$_Oli->setDefaultUserLanguage('en');
$_Oli->setTranslationsTable('translations');

/** Authentification Key Cookie Configuration */
$_Oli->setPostVarsCookieName('OliPostVars');
$_Oli->setPostVarsCookieDomain('.' . $_Oli->getOption('domain'));
$_Oli->setPostVarsCookieSecure(false);
$_Oli->setPostVarsCookieHttpOnly(false);

/** Miscellaneous */
$_Oli->setTimeZone('Europe/Paris');

/** ------------------------ */
/**  Accounts Configuration  */
/** ------------------------ */

/** Enable / Disable Accounts Management */
$_Oli->enableAccountsManagement();
// $_Oli->disableAccountsManagement();

/** Tables Configuration */
$_Oli->setAccountsTable('accounts');
$_Oli->setAccountsInfosTable('accounts_infos');
$_Oli->setAccountsSessionsTable('accounts_sessions');
$_Oli->setAccountsRequestsTable('accounts_requests');
$_Oli->setAccountsPermissionsTable('accounts_permissions');
$_Oli->setAccountsRightsTable('accounts_rights');

/** Hash Configuration */
$_Oli->setHashAlgorithm(PASSWORD_DEFAULT);
// $_Oli->setHashSalt('');
// $_Oli->setHashCost(10);

/** Authentification Key Cookie Configuration */
$_Oli->setAuthKeyCookieName($_Oli->getOption('auth_key_cookie_name'));
$_Oli->setAuthKeyCookieDomain('.' . $_Oli->getOption('domain'));
$_Oli->setAuthKeyCookieSecure(false);
$_Oli->setAuthKeyCookieHttpOnly(false);

/** Register Verification Configuration */
$_Oli->enableRegisterVerification();
$_Oli->setRequestsExpireDelay(604800);

/** *** *** */

/** ---------------------------- */
/**  Apis Manager Configuration  */
/** ---------------------------- */

use APIsManager\APIsManager;
$_APIs = new APIsManager;

/** Set Default Charset */
$_APIs->setDefaultCharset('utf-8');

/** Set Authorized Websites */
// $_APIs->setauthorizedWebsites('*');
$_APIs->setauthorizedWebsites([
	$_Oli->getInfosMySQL('settings', 'value', array('name' => 'url'), false),
	// $_Oli->getInfosMySQL('settings_account', 'value', array('name' => 'url'), false),
	$_Oli->getInfosMySQL('settings_apis', 'value', array('name' => 'url'), false),
	$_Oli->getInfosMySQL('settings_keygen', 'value', array('name' => 'url'), false)
]);

/** Set API Url */
$_APIs->setAPIUrl($_Oli->getShortcutLink('apis'));

/** *** *** *** */

/** ------------------------------ */
/**  Upload Manager Configuration  */
/** ------------------------------ */

// use UploadManager\UploadManager;
// $_Upload = new UploadManager;

/** Setup MySQL */
// $_Upload->setupExistMySQL();
// $_Upload->setupManualMySQL(DATABASE,
	// USERNAME,
	// PASSWORD,
	// HOST);

/** Set Upload Table & Path */
// $_Upload->setUploadTable('uploads');
// $_Upload->setUploadPath($_Oli->getShortcutLink('uploads_path'));
// $_Upload->setUploadUrl($_Oli->getShortcutLink('uploads_url'));

/** Set Upload Table & Path */
// $_Upload->setMaxSize(25769803.776); // 25769803.776 => 24 Mo
// $_Upload->setNameLength(62);
// $_Upload->setAllowedTypes('*');
?>