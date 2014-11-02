<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_session extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library("Aauth");

		$this->clear_cache();
	}

	public function login()
	{
		$this->load->helper('form');
		$this->load->library('session');

		if($this->aauth->is_loggedin())
		{
			redirect('issues/index');
		}
		else 
		{
			$data['title'] = "Login";

			$email = $this->input->post('email');
			$password = $this->input->post('password');
			if($this->aauth->login($email, $password))
			{
				redirect('issues/index');
			}
			else
			{
				$this->load->view('user_session/login', $data);	
			}			
		}
	}

	public function logout()
	{
		$this->aauth->logout();
		redirect('/');
	}

	private function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }
}