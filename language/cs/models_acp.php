<?php
/**
 *
 * @package Post Models Extension
 * @copyright (c) 2015 Zoddo <zoddo.ino@gmail.com>
 * @copyright (c) 2007 Elglobo <http://www.phpbb-services.com>
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

/**
 *
 * Český překlad
 *
 * Datum: 6.12.2017
 * Domovská stránka: http://www.ice-wow.eu
 * Aktuální verze překladu: http://forum.ice-wow.eu/viewtopic.php?f=56&t=48
 * Reportní systém: http://bugtracker.ice-wow.eu
 * GitHub: https://github.com/iCeOnlineWoW/phpbb-postmodels
 *
 */
 
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}


// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ADD_NEW_MODEL'			=> 'Vytvořit šablonu',
	'FOUNDERS'				=> 'Zakladatelé',
	'MODEL'					=> 'Šablona',
	'MODEL_ADD'				=> 'Vytvoření nové šablony',
	'MODEL_ADDED'			=> 'Vytvoření šablony bylo úspěšné.',
	'MODEL_AUTH'			=> 'Oprávnění',
	'MODEL_AUTH_EXPLAIN'	=> 'Zde máš možnost zvolit jaký typ uživatelů bude moci šablonu použít.',
	'MODEL_ALREADY_EXIST'	=> 'Šablona s tímto názvem již existuje, zadejte jiný název.',
	'MODEL_CONTENT'			=> 'Obsah',
	'MODEL_CONTENT_EXPLAIN'	=> 'Zde máš možnost nastavit obsah šablony, která bude vložena do příspěvku či soukromé zprávy.',
	'MODEL_EDIT'			=> 'Úprava šablony',
	'MODEL_EDIT_EXPLAIN'	=> 'Zde máš možnost nastavit šablonu.',
	'MODEL_LANGUAGE'		=> 'Jazyk',
	'MODEL_PM'				=> 'Použití v SZ',
	'MODEL_PM_EXPLAIN'		=> 'Zde máš možnost nastavit zda šablona půjde použít i v soukromých zprávách.',
	'MODEL_SETTINGS'		=> 'Nastavení',
	'MODEL_TITLE'			=> 'Název',
	'MODEL_UPDATED'			=> 'Aktualizace šablony byla úspěšná.',
	'MODEL_REMOVED'			=> 'Smazání šablony bylo úspěšné.',

	'NO_EXIST'				=> 'Jazykový balík již není dostupný.',
	'NO_MODEL_INFO'			=> 'Musíš nastavit název, jazyk a obsah šablony.',
	'NO_MODEL'				=> 'Šablonu se nepodařilo najít.',
	'NO_PERMISSIONS'		=> 'Bohužel nemáš dostatečná oprávnění pro správu šablon.',
));
