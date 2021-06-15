<?php

/**
*
* @package TopicLinks
* @copyright (c) 2020 DeaDRoMeO ; hello-vitebsk.ru
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace deadromeo\topiclinks\acp;

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
    exit;
}

class topiclinks_info
{
	function module()
	{
		return array(
			'filename'	=> '\deadromeo\topiclinks\topiclinks_module',
			'title'		=> 'TL_BB',
			'modes'		=> array(
				'topiclinks_config' => array('title' => 'TL_CONFIG', 'auth' => 'ext_deadromeo/topiclinks && acl_a_board', 'cat' => array('TL_BB')),
			),
		);
	}
}

?>