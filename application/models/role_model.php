<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Role_model extends CI_Model {
	public function get_roles()
	{
		$groups = $this->aauth->list_groups();
		for($i = 0; $i < count($groups); $i++)
		{
			$groups[$i]->privileges = $this->get_privileges($groups[$i]->id);
		}

		return $groups;
	}

	public function get_privileges($group_id)
	{
		$list_perms = $this->aauth->list_perms();

		$allowed_perms = '';
		foreach($list_perms as $perm)
		{
			if($this->aauth->is_group_allowed($perm->id, $group_id))
			{
				$allowed_perms .= $perm->name;
			}
		}

		return $allowed_perms;
	}
}