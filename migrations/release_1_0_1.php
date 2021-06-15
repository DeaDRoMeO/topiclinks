<?php

/**
*
* @package TopicLinks
* @copyright (c) 2020 DeaDRoMeO ; hello-vitebsk.ru
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace deadromeo\topiclinks\migrations;

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
    exit;
}

class release_1_0_1 extends \phpbb\db\migration\migration
{



	public function update_data()
	{
		return array(

			// Add new config vars
			array('config.add', array('topiclinks_version', '1.0.1')),
			array('config.add', array('tl_on', 0)),
			array('config.add', array('tl_f', 0)),
			array('config.add', array('tl_t', 0)),
		
			// Add new modules
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'TL_BB'
			)),

			array('module.add', array(
				'acp',
				'TL_BB',
				array(
					'module_basename'	=> '\deadromeo\topiclinks\acp\topiclinks_module',
					'modes'	=> array('topiclinks_config'),
				),
			)),
		);
	}

	public function revert_data()
	{
		return array(
			array('config.remove', array('topiclinks_version')),
			array('config.remove', array('tl_on')),
			array('config.remove', array('tl_f')),
			array('config.remove', array('tl_t')),
			
		
			array('module.remove', array(
				'acp',
				'TL_BB',
				array(
					'module_basename'	=> '\deadromeo\topiclinks\acp\topiclinks_module',
					'modes'	=> array('topiclinks_config'),
				),
			)),
			array('module.remove', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'TL_BB'
			)),
		);
	}
}