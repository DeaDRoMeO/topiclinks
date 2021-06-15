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

class release_1_0_2 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return (isset($this->config['topiclinks_version']) && version_compare($this->config['topiclinks_version'], '1.0.2', '>='))
				|| (isset($this->config['topiclinks_version']) && version_compare($this->config['topiclinks_version'], '1.0.2', '>='));
	}
static public function depends_on()
	{
		return array('\deadromeo\topiclinks\migrations\release_1_0_1');
	}


	public function update_data()
	{
		return array(
			array('config.add', array('tl_f_b', 0)),
			array('config.add', array('tl_t_b', 0)),
			array('config.add', array('topiclinks_version', '1.0.2')),
			array('if', array(
				(isset($this->config['topiclinks_version']) && version_compare($this->config['topiclinks_version'], '1.0.2', '<')),
				array('config.update', array('topiclinks_version', '1.0.2')),
			)),
			
		);
	}

	public function revert_data()
	{
		return array(
			array('config.remove', array('tl_f_b')),
			array('config.remove', array('tl_t_b')),
			
		
		);
	}
}