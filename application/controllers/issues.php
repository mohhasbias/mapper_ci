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

		$data['issue'] = $this->input->post();

		if($this->form_validation->run() === FALSE)
		{
			$this->render($data);
		}
		else 
		{
			if($this->do_upload())
			{
				$uploadData = $this->upload->data();
				$data = array(
						'title' => $this->input->post('title'),
						'description' => $this->input->post('description'),
						'longitude' => $this->input->post('longitude'),
						'latitude' => $this->input->post('latitude'),
						'photo' => $uploadData['full_path'],
						'status' => 'issue'
					);
				$this->issue_model->add_issues($data);

				header('Refresh:3;/issues/index');
				$data["success"] = TRUE;
			}
			else
			{
				var_dump($this->upload->display_errors());
			}
			$this->render($data);			
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);

		if($id)
		{
			$issue = $this->issue_model->get_issues($id);
			if($issue)
			{
				$data['issue'] = $issue;
				$this->issue_model->delete_issue($id);
				header('Refresh:3;/issues/index');
				$this->render($data);
			}
			else
			{
				redirect('issues/index');
			}
		}
		else
		{
			redirect('issues/index');
		}
	}

	private function render($data)
	{
		$uri_segment = $this->router->fetch_class() . '/' . $this->router->fetch_method();
		$this->load->view('templates/header', $data);
		$this->load->view($uri_segment, $data);
		$this->load->view('templates/footer');
	}

	private function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);

		return $this->upload->do_upload();
	}
}