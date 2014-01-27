<?php
namespace Sample;

class Controller_Sample extends \Controller_Site
{
	protected $check_not_auth_action = array(
	);

	public function before()
	{
		parent::before();
	}

	/**
	 * Sample index
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		$this->action_list();
	}

	/**
	 * Sample list
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_list()
	{
	}
}
