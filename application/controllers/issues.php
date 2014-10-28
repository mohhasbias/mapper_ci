<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Issues extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Issues';

		$this->load->view('templates/header', $data);
		$this->load->view('issues/index');
		$this->load->view('templates/footer');
	}
}