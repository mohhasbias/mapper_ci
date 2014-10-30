<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Issues extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('issue_model');
	}

	public function index()
	{
		$data['title'] = 'Issues';

		$data['issues'] = $this->issue_model->get_issues();

		// $this->load->view('templates/header', $data);
		// $this->load->view('issues/index', $data);
		// $this->load->view('templates/footer');

		$this->render($data);
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Add New Issue';

		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('description','Description','required');
		$this->form_validation->set_rules('longitude', 'Longitude', 'required');
		$this->form_validation->set_rules('latitude', 'Latitude', 'required');

		if($this->form_validation->run() === FALSE)
		{
			$this->render($data);
		}
		else 
		{
			$this->issue_model->add_issues();
			header('Refresh:3;/issues/index');
			$data["success"] = TRUE;
			$this->render($data);
		}
	}

	private function render($data)
	{
		$uri_segment = $this->router->fetch_class() . '/' . $this->router->fetch_method();
		$this->load->view('templates/header', $data);
		$this->load->view($uri_segment, $data);
		$this->load->view('templates/footer');
	}
}