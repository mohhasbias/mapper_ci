<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('aauth');

		// if(!$this->aauth->is_loggedin())
		// {
		// 	redirect('/');
		// }

	}

	public function index()
	{
		$this->load->model('user_model');

		$data['title'] = 'Member Area';

		$data['users'] = $this->user_model->get_users();

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