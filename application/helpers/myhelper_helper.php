<?php

function addCssClass($class_name, $condition = TRUE)
{
	return $condition? $class_name : '';
}

function addActiveClass($class_name, $url_segment)
{
	$ci =& get_instance();
	$current_url_segment = '/' . $ci->router->fetch_class() . '/' . $ci->router->fetch_method();
	// echo($current_url_segment);
	return addCssClass($class_name, $current_url_segment === $url_segment);
}

function translateFilePathToURL($full_path)
{
	return '/' . str_replace(constant("FCPATH"),"",$full_path);
}

function current_user()
{
	$ci =& get_instance();
	$ci->load->library("Aauth");

	if($ci->aauth->is_loggedin())
	{
		$user = $ci->aauth->get_user();

		// var_dump($user);
		return $user;
	}
	else 
	{
		return "Guest";
	}
}