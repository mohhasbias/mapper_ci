<?php

class Pages extends CI_Controller {
	public function view($page = 'home')
	{
		// check view existence
		if(!file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			// Whoops
			show_404();
		}

		// prepare data
		$data['title'] = ucfirst($page);

		// load data into view
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
}