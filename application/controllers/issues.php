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

		$this->load->view('templates/header', $data);
		$this->load->view('issues/index', $data);
		$this->load->view('templates/footer');
	}
}