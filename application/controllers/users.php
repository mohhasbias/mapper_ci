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

		$this->load->model('user_model');
	}

	public function index()
	{
		$data['title'] = "User";

		$data['users'] = $this->user_model->get_users();

		$this->render($data);
	}

	public function create()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');

		$data['title'] = "New User";

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[aauth_users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[confirm_password]|min_length[5]');
		$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required');

		if($this->form_validation->run())
		{
			$email = $this->input->post('email');
			$name = $this->input->post('name');
			$password = $this->input->post('password');
			
			$uid = $this->aauth->create_user($email, $password, $name);

			if($uid)
			{
				$data['success'] = TRUE;
				header('Refresh:3;/users/index');
			}
		}

		$data['user'] = $this->input->post();
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