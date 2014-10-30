<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Issue_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}

	public function get_issues($id = FALSE)
	{
		if($id === FALSE){
			$query = $this->db->get('issues');
			return $query->result_array();
		}

		$query = $this->db->get_where('issues', array('id'=>$id));
		return $query->row_array();
	}

	public function add_issues()
	{
		$data = array(
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'longitude' => $this->input->post('longitude'),
			'latitude' => $this->input->post('latitude'),
			'photo' => $this->input->post('photo'),
			'status' => 'issue'
			);

		var_dump($data);
		
		return $this->db->insert('issues', $data);
	}
}