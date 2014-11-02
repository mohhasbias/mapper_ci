<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	public function get_users()
	{
		$users = $this->aauth->list_users();

		for($i = 0; $i < count($users); $i++)
		{
			$groups = $this->aauth->get_user_groups($users[$i]->id);
			$group_list = '';
			for($j = 0; $j < count($groups); $j++)
			{
				$group_list .= $groups[$j]->name;
				if($j < count($groups)-1)
				{
					$group_list .= ', ';
				}
			}
			$users[$i]->groups = $group_list;
		}

		return $users;
	}
}