<?php

/**
*
* @package TopicLinks
* @copyright (c) 2020 DeaDRoMeO ; hello-vitebsk.ru
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

$lang = array_merge($lang, array(
	'TL_BB'					=> '«TopicLinks»',
	'TL_CONFIG'						=> 'Настройки',
	'TL_ON_EXP'					=> 'Включить «TopicLinks»',
	'TL_F_ON'					=> 'Блок для подфорумов',
	'TL_F_ON_EXP'						=> 'Отображать блок ссылок для каждого подфорума',
	'TL_F_B_ON'					=> 'Скрыть блок для форумов под кнопку',
	'TL_F_B_ON_EXP'						=> 'Скрыть блок ссылок под кнопку. Кнопка будет находиться возле кнопки Новая тема',
	'TL_T_ON'					=> 'Блок для тем',
	'TL_T_ON_EXP'						=> 'Отображать блок ссылок для каждой темы',
	'TL_T_B_ON'					=> 'Скрыть блок для тем под кнопку',
	'TL_T_B_ON_EXP'						=> 'Скрыть блок ссылок под кнопку. Кнопка будет находиться возле кнопки Ответить',
	'LINK_TOPICS'						=> 'Ссылки на тему',
	'LINK_FORUMS'						=> 'Ссылки на форум',
	'SIMPL_LINK'						=> 'Обычная ссылка:',
	'BB_LINK'						=> 'BB-код:',
	'HTML_LINK'						=> 'HTML-код:',
	
));
