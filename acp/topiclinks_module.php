<?php

/**
*
* @package TopicLinks
* @copyright (c) 2021 DeaDRoMeO ; hello-vitebsk.ru
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

/**
* @package acp
*/
class topiclinks_module
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	public $u_action;

	function main($id, $mode)
	{
		global $config, $request, $template, $user;

		$this->config = $config;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;

		$this->user->add_lang('acp/common');
		$this->tpl_name = 'acp_topiclinks';
		$this->page_title = $this->user->lang('TL_BB');

		$form_key = 'acp_topiclinks';
		add_form_key($form_key);
		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key($form_key))
			{
				trigger_error($user->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}
		
			$tl_on = $this->request->variable('tl_on', 0);
			$this->config->set('tl_on', $tl_on);
			$tl_f = $this->request->variable('tl_f', 0);
			$this->config->set('tl_f', $tl_f);
			$tl_t = $this->request->variable('tl_t', 0);
			$this->config->set('tl_t', $tl_t);	
			$tl_f_b = $this->request->variable('tl_f_b', 0);
			$this->config->set('tl_f_b', $tl_f_b);
			$tl_t_b = $this->request->variable('tl_t_b', 0);
			$this->config->set('tl_t_b', $tl_t_b);					
			
			trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
		}
		$template->assign_vars(array(
		    'TL_VERSION'			=> isset($this->config['topiclinks_version']) ? $this->config['topiclinks_version'] : '',
			'TL_ON'				=> isset($this->config['tl_on']) ? $this->config['tl_on'] : '',
			'TL_F'				=> isset($this->config['tl_f']) ? $this->config['tl_f'] : '',
			'TL_T'				=> isset($this->config['tl_t']) ? $this->config['tl_t'] : '',
			'TL_F_B'				=> isset($this->config['tl_f_b']) ? $this->config['tl_f_b'] : '',
			'TL_T_B'				=> isset($this->config['tl_t_b']) ? $this->config['tl_t_b'] : '',
			'U_ACTION'				=> $this->u_action,
		));
	}
}
