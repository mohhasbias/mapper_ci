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

	public function add_issues($data)
	{
		if($data)
		{
			return $this->db->insert('issues', $data);
		}
	}

	public function delete_issue($id)
	{
		if($id)
		{
			return $this->db->delete('issues', array('id' => $id));
		}
	}
}