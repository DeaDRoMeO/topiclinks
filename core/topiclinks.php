<?php

/**
*
* @package TopicLinks
* @copyright (c) 2021 DeaDRoMeO ; hello-vitebsk.ru
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace deadromeo\topiclinks\core;

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

class topiclinks
{
	/** @var \phpbb\auth\auth */
	protected $auth;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\cache\service */
	protected $cache;
	
	/** @var \phpbb\content_visibility */
	protected $content_visibility;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\event\dispatcher_interface */
	protected $dispatcher;

	/** @var \phpbb\request\request_interface */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;
	
	/** @var \phpbb\user */
	protected $user;
	
	/** @var string phpBB root path */
	protected $root_path;
	
	/** @var string PHP extension */
	protected $phpEx;

	public function __construct(\phpbb\auth\auth $auth, \phpbb\cache\service $cache, \phpbb\config\config $config, \phpbb\content_visibility $content_visibility, \phpbb\db\driver\driver_interface $db, \phpbb\event\dispatcher_interface $dispatcher, \phpbb\request\request_interface $request, \phpbb\template\template $template, \phpbb\user $user, $root_path, $phpEx)
	{
		$this->auth = $auth;
		$this->cache = $cache;
		$this->config = $config;
		$this->content_visibility = $content_visibility;
		$this->db = $db;
		$this->dispatcher = $dispatcher;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
		$this->root_path = $root_path;
		$this->phpEx = $phpEx;

	}
// first settings
public function display_tl()
	{
		
		if(!isset($this->config['tl_on']) || !$this->config['tl_on'])
		{
			return;
		}
		$this->template->assign_vars(array(
			'TL_ON'		=> true,
		));
	}
public function display_tl_f()
	{
		
		if(!isset($this->config['tl_f']) || !$this->config['tl_f'])
		{
			return;
		}
		$this->template->assign_vars(array(
			'TL_F'		=> true,
		));
	}
public function display_tl_t()
	{
		
		if(!isset($this->config['tl_t']) || !$this->config['tl_t'])
		{
			return;
		}
		$this->template->assign_vars(array(
			'TL_T'		=> true,
		));
	}	
public function display_tl_f_b()
	{
		
		if(!isset($this->config['tl_f_b']) || !$this->config['tl_f_b'])
		{
			return;
		}
		$this->template->assign_vars(array(
			'TL_F_B'		=> true,
		));
	}
public function display_tl_t_b()
	{
		
		if(!isset($this->config['tl_t_b']) || !$this->config['tl_t_b'])
		{
			return;
		}
		$this->template->assign_vars(array(
			'TL_T_B'		=> true,
		));
	}
}
