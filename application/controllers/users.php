<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('aauth');

		if(!$this->aauth->is_loggedin())
		{
			redirect('/');
		}
	}

	public function index()
	{
		$data['title'] = "User";

		$data['users'] = $this->aauth->list_users();

		for($i = 0; $i < count($data['users']); $i++)
		{
			$groups = $this->aauth->get_user_groups($data['users'][$i]->id);
			$group_list = '';
			for($j = 0; $j < count($groups); $j++)
			{
				$group_list .= $groups[$j]->name;
				if($j < count($groups)-1)
				{
					$group_list .= ', ';
				}
			}
			$data['users'][$i]->groups = $group_list;
		}

		$this->render($data);
	}

	private function render($data)
	{
		$uri_segment = $this->router->fetch_class() . '/' . $this->router->fetch_method();

		$this->load->view('templates/header', $data);
		$this->load->view($uri_segment, $data);
		$this->load->view('templates/footer');
	}
}