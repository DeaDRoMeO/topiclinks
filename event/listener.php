<?php

/**
*
* @package TopicLinks
* @copyright (c) 2020 DeaDRoMeO ; hello-vitebsk.ru
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace deadromeo\topiclinks\event;

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
    exit;
}

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{

	protected $topiclinks_functions;
	protected $request;

	public function __construct(\deadromeo\topiclinks\core\topiclinks $functions, \phpbb\request\request $request)
	{
	
	$this->topiclinks_functions = $functions;
	$this->request = $request;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header' 								=> 'display_on',	
			'core.user_setup'								=> 'load_language_on_setup',			
		);
	}
public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'deadromeo/topiclinks',
			'lang_set' => 'topiclinks',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

public function display_on($event)
	{
		$this->topiclinks_functions->display_tl('tl_on', $this->request->variable('f', '0'), true);
		$this->topiclinks_functions->display_tl_f('tl_f', $this->request->variable('f', '0'), true);
		$this->topiclinks_functions->display_tl_t('tl_t', $this->request->variable('f', '0'), true);
		$this->topiclinks_functions->display_tl_f_b('tl_f_b', $this->request->variable('f', '0'), true);
		$this->topiclinks_functions->display_tl_t_b('tl_t_b', $this->request->variable('f', '0'), true);
	}	
}